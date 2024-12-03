<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Country;
use App\Models\Product;
use App\Services\Backend\ProductService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        // $countries = Country::all();
        // $companies = Company::all();
        // $products = $this->productService->getPaginatedProduct();

        if (request()->ajax()) {
            return datatables()->of(Product::with('company', 'country')->get())
                ->addColumn('status', function ($row) {
                    return $row->status ? 'Còn hàng' : 'Hết hàng';
                })
                ->addColumn('brand', function ($row) {
                    return $row->company->name ?? 'N/A';
                })->addColumn('country', function ($row) {
                    return $row->country->name ?? 'N/A';
                })
                ->addColumn('price', function ($row) {
                    return number_format($row->price, 0, ',', '.') . ' VND';
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="btn-group">
                           <button class="btn btn-danger btn-sm delete-btn" data-url="' . route('admin.product.delete', $row->id) . '">    <i class="fas fa-trash-alt"></i></button>
                        </div>
                    ';
                })
                ->rawColumns(['status', 'action',])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.product.index');
    }

    public function add()
    {
        $countries = Country::all();
        $companies = Company::all();
        return view('backend.product.add', compact('countries', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|unique:sgo_products,name,' . $id,
                'source' => 'required',
                'company_id' => 'required|exists:sgo_companies,id',
                'country_id' => 'required|exists:sgo_countries,id',
                'condition_level' => 'required',
                'price' => 'required|numeric',
                'images' => 'nullable|array|min:1',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'status' => 'required',
                'description' => 'required',
            ],
            __('request.messages'),
            [
                'name' => 'Tìm sản phẩm',
                'source' => 'Nguồn',
                'company_id' => 'Công ty',
                'country_id' => 'Quốc gia',
                'condition_level' => 'Trạng thái',
                'price' => 'Giá',
                'image' => 'Hiển thị',
                'status' => 'Trạng thái',
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
    {dd($request->all());

        $request->validate(
            [
                'name' => 'required|unique:sgo_products,name',
                'source' => 'required',
                'company_id' => 'required|exists:sgo_companies,id',
                'country_id' => 'required|exists:sgo_countries,id',
                'condition_level' => 'required',
                'price' => 'required|numeric',
                'images' => 'required|array|min:1',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'status' => 'required',
                'description' => 'required',
            ],
            __('request.messages'),
            [
                'name' => 'Tên sản phẩm',
                'source' => 'Nguồn',
                'company_id' => 'Công ty',
                'country_id' => 'Quốc gia',
                'condition_level' => 'Trạng thái',
                'price' => 'Giá',
                'image' => 'Hiển thị',
                'status' => 'Trạng thái',
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
            $countries = Country::all();
            $companies = Company::all();
            $product = Product::find($id);
            // $productImages = $product->whereHas('images')->get();

            return view('backend.product.edit', compact('product', 'countries', 'companies'));
        } catch (Exception $e) {
            Log::error('Failed to find this Product: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Tìm sản phẩm thất bại']);
        }
    }
}
