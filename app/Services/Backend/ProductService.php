<?php

namespace App\Services\Backend;

use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductService
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getPaginatedProduct()
    {
        return $this->product->orderByDesc('created_at')->paginate(10);
    }

    public function getAllProduct()
    {
        return $this->product->orderByDesc('created_at')->get();
    }

    public function addNewProduct(array $data)
    {
        try {
            DB::beginTransaction();
            $price = preg_replace('/[^\d]/', '', $data['price']);
            $product = $this->product->create([
                'name' => $data['name'],
                'source' => $data['source'],
                'company_id' => $data['company_id'],
                'country_id' => $data['country_id'],
                'condition_level' => $data['condition_level'],
                'guarantee' => $data['guarantee'],
                'price' => $price,
                'status' => $data['status'],
                'description' => $data['description'],
            ]);

            $images = [];

            if (request()->hasFile('images')) {
                foreach (request()->file('images') as $image) {
                    $imageName = $image->getClientOriginalName();
                    $path = $image->storeAs('product_images', $imageName, 'public');
                    $images[] = $path;
                }
            }

            $product->update(['images' => $images]);
            DB::commit();
            return $product;
        } catch (Exception $e) {
            Log::error('Failed to add new product: ' . $e->getMessage());
            throw new Exception('Failed to add new product ');
        }
    }

    public function updateProduct(array $data, $id)
    {
        try {
            DB::beginTransaction();
            $price = preg_replace('/[^\d]/', '', $data['price']);
            $product = $this->product->find($id);
            $product->update([
                'name' => $data['name'],
                'source' => $data['source'],
                'company_id' => $data['company_id'],
                'country_id' => $data['country_id'],
                'condition_level' => $data['condition_level'],
                'guarantee' => $data['guarantee'],
                'price' => $price,
                'status' => $data['status'],
                'description' => $data['description'],
            ]);

            $images = [];
            if (request()->hasFile('images')) {
                // Nếu có ảnh mới, tiến hành xóa ảnh cũ trước
                if (empty($images) && $product->images) {
                    $oldImages = $product->images;
                    foreach ($oldImages as $oldImage) {
                        // Gọi hàm deleteImage để xóa các ảnh cũ
                        deleteImage($oldImage);
                    }
                }

                // Lưu các ảnh mới
                foreach (request()->file('images') as $image) {
                    $imageName = $image->getClientOriginalName();
                    // Lưu ảnh mới vào thư mục product_images
                    $path = $image->storeAs('product_images', $imageName, 'public');
                    $images[] = $path;
                }
            }

            if (!empty($images)) {
                $product->update([
                    'images' => $images,
                ]);
            }
            DB::commit();
            return $product;
        } catch (Exception $e) {
            Log::error('Failed to update this product: ' . $e->getMessage());
            throw new Exception('Failed to update this product');
        }
    }

    public function deleteProduct($id)
    {
        try {
            DB::beginTransaction();
            $product = $this->product->findOrFail($id);

            // Kiểm tra xem images có tồn tại và là mảng không
            if (is_array($product->images)) {
                foreach ($product->images as $image) {
                    deleteImage($image);  // Giả sử deleteImage xử lý từng hình ảnh
                }
            }

            $product->delete();
            DB::commit();
            return $product;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Xóa sản phẩm thất bại: ' . $e->getMessage());
            throw new Exception('Xóa sản phẩm thất bại');
        }
    }
}
