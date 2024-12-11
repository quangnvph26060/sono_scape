<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Company;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Services\Backend\ProductService;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function search(Request $request)
    {
        try {
            $query = $request->query('query');
            $clients = Product::where('name', 'LIKE', "%{$query}%")
                ->orWhere('phone', 'LIKE', "%{$query}%")
                ->get();

            return response()->json(['success' => true, 'customers' => $clients]);
        } catch (Exception $e) {
            Log::error("Failed to search clients: " . $e->getMessage());
            return response()->json(['error' => 'Failed to search clients'], 500);
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            DB::reconnect();
            return datatables()->of(Product::select(['id', 'name', 'status', 'price', 'guarantee', 'sale_price'])->get())
                ->addColumn('status', function ($row) {
                    return $row->status ? 'Còn hàng' : 'Hết hàng';
                })
                ->addColumn('price', function ($row) {
                    return number_format($row->price, 0, ',', '.') . ' VND';
                })
                ->addColumn('sale_price', function ($row) {
                    return number_format($row->price, 0, ',', '.') . ' VND';
                })
                ->addColumn('action', function ($row) {
                    return '
                    <div class="btn-group">
                        <button class="btn btn-danger btn-sm delete-btn" data-url="' . route('admin.product.delete', $row->id) . '">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                ';
                })
                ->rawColumns(['status', 'action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.product.index');
    }


    public function add()
    {
        // $countries = Country::all();
        // $companies = Company::all();
        $categories = Category::type('products')->get();
        return view('backend.product.add', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|unique:sgo_products,name,' . $id,
                'price' => 'nullable|numeric',
                'sale_price' => 'nullable|numeric',
                'images' => 'nullable|array|min:1',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
                'main_image' => 'nullable|mimes:jpeg,png,gif,svg,webp,jfif|max:2048',
                'status' => 'nullable',
                'description' => 'nullable',
                'sub_description' => 'nullable',
                'description_seo' => 'nullable',
                'title_seo' => 'nullable',
                'keyword_seo' => 'nullable',
            ],
            __('request.messages'),
            [
                'name' => 'Tên sản phẩm',
                'price' => 'Giá',
                'image' => 'Hiển thị',
                'status' => 'Trạng thái',
                'sale_price' => 'Giá khuyến mãi',
                'main_image' => 'Ảnh đại diện',
                'description' => 'Mô tả',
                'sub_description' => 'Mô tả phụ',
                'description_seo' => 'Mô tả SEO',
                'title_seo' => 'Tiêu đề SEO',
                'keyword_seo' => 'Từ khóa SEO'
            ]
        );


        try {
            $product = $this->productService->updateProduct($request->all(), $id);

            $products = $this->productService->getPaginatedProduct();

            $html = view('backend.product.table', compact('products'))->render();
            $pagination = $products->links('vendor.pagination.custom')->render();

            toastr()->success('Cập nhật thành công.');

            return redirect()->route('admin.product.index');
        } catch (Exception $e) {
            Log::error("Failed to update this Product: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Cập nhật sản phẩm thất bại']);
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate(
            [
                'name' => 'required|unique:sgo_products,name',
                'price' => 'nullable|numeric',
                'sale_price' => 'nullable|numeric',
                'images' => 'nullable|array|min:1',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,jfif|max:2048',
                'main_image' => 'nullable|mimes:jpeg,png,gif,svg,webp,jfif|max:2048',
                'status' => 'nullable',
                'description' => 'nullable',
                'sub_description' => 'nullable',
                'description_seo' => 'nullable',
                'title_seo' => 'nullable',
                'keyword_seo' => 'nullable',
            ],
            __('request.messages'),
            [
                'name' => 'Tên sản phẩm',
                'price' => 'Giá',
                'image' => 'Hiển thị',
                'status' => 'Trạng thái',
                'sale_price' => 'Giá khuyến mãi',
                'main_image' => 'Ảnh đại diện',
                'description' => 'Mô tả',
                'sub_description' => 'Mô tả phụ',
                'description_seo' => 'Mô tả SEO',
                'title_seo' => 'Tiêu đề SEO',
                'keyword_seo' => 'Từ khóa SEO'
            ]
        );
        try {
            $product = $this->productService->addNewProduct($request->all());

            // Lấy lại danh sách công ty để cập nhật bảng
            $products = $this->productService->getPaginatedProduct(); // Hàm này sẽ trả về danh sách công ty phân trang

            $html = view('backend.product.table', compact('products'))->render();
            $pagination = $products->links('vendor.pagination.custom')->render();

            return redirect()->route('admin.product.index')->with('Thêm sản phẩm mới thành công');
        } catch (Exception $e) {
            Log::error('Failed to add new Product: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Thêm sản phẩm thất bại',
            ]);
        }
    }


    public function delete($id)
    {
        try {
            $this->productService->deleteProduct($id);

            return response()->json([
                'status' => true,
                'message' => 'Xóa sản phẩm thành công',
            ]);
        } catch (Exception $e) {
            Log::error('Failed to delete this Product: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Xóa sản phẩm thất bại',
            ]);
        }
    }

    public function deleteImage($id)
    {
        $data = explode('-', $id);

        $product = Product::findOrFail($data[0]);

        $images = $product->images;

        if (isset($images[$data[1]])) {

            deleteImage($images[$data[1]]);

            unset($images[$data[1]]);

            $product->images = array_values($images);

            $product->save();

            return response()->json(['status' => true, 'message' => 'Ảnh đã được xóa!']);
        }

        return response()->json(['status' => false, 'message' => 'Ảnh không tồn tại!']);
    }




    public function detail($id)
    {
        try {
            $categories = Category::orderByDesc('created_at')->get();
            $product = Product::find($id);
            // $productImages = $product->whereHas('images')->get();

            return view('backend.product.edit', compact('product', 'categories'));
        } catch (Exception $e) {
            Log::error('Failed to find this Product: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Tìm sản phẩm thất bại']);
        }
    }
}
