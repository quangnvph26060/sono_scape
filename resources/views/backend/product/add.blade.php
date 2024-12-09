@extends('backend.layout.index')
@section('title', 'Thêm mới sản phẩm')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header  d-flex justify-content-between">
            <h4 class="card-title">Tạo sản phẩm</h4>
            <div class="card-tools">
                <a href="{{ route('admin.product.index') }}" class="btn btn-primary btn-sm">Danh sách sản phẩm</a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Cột bên trái -->
                    <div class="col-lg-6 add_product">
                        <!-- Tên sản phẩm -->
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nhập tên sản phẩm">
                        </div>
                        <!-- Giá -->
                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" name="price" id="price"
                                placeholder="Nhập giá sản phẩm">
                        </div>
                        <!-- Giá khuyến mãi-->
                        <div class="form-group mb-3">
                            <label for="sale_price" class="form-label">Giá khuyễn mãi</label>
                            <input type="number" class="form-control" name="sale_price" id="sale_price"
                                placeholder="Nhập giá khuyến mãi sản phẩm">
                        </div>
                    </div>


                    <!-- Cột bên phải -->
                    <div class="col-lg-6 add_product">

                        <div class="form-group mb-3">
                            <label for="category_id" class="form-label">Danh mục</label>
                            <select class="form-select" name="category_id" id="category_id">
                                <option value="">Chọn danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bảo hành -->
                        <div class="form-group mb-3">
                            <label for="guarantee" class="form-label">Bảo hành (tháng)</label>
                            <input type="number" class="form-control" name="guarantee" id="guarantee"
                                placeholder="Nhập số tháng bảo hành">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Trạng thái</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1">Còn hàng</option>
                                <option value="0">Hết hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="main_image" class="form-label">Ảnh đại diện sản phẩm</label>
                            <input type="file" class="form-control" id="main_image" name="main_image" max="1">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Ảnh sản phẩm -->
                        <div class="form-group mb-3">
                            <label for="images" class="form-label">Album ảnh</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple
                                accept="image/*">
                        </div>
                    </div>

                    <!-- Mô tả -->
                    <div class="col-lg-12 mb-3">
                        <label for="sub_description" class="form-label">Mô tả ngắn</label>
                        <textarea id="sub_description" class="form-control" name="sub_description" rows="10"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="description" class="form-label">Mô tả chi tiết</label>
                        <textarea id="description" class="form-control" name="description" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="title_seo" class="form-label">Tiêu đề SEO</label>
                        <input type="text" class="form-control" name="title_seo" id="title_seo"
                            placeholder="Nhập tiêu đề SEO">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description_seo" class="form-label">Mô tả SEO</label>
                        <input type="text" class="form-control" name="description_seo" id="description_seo"
                            placeholder="Nhập mô tả SEO">
                    </div>
                    <div class="form-group mb-3">
                        <label for="keyword_seo" class="form-label">Từ khóa SEO</label>
                        <input type="text" class="form-control" name="keyword_seo" id="keyword_seo"
                            placeholder="Nhập từ khóa SEO">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>

    <script>
        $(function() {

            CKEDITOR.replace('sub_description', {

                filebrowserImageUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form',
                height: 150
            });

            CKEDITOR.replace('description', {
                filebrowserImageUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form',
                height: 400
            });

            $("#images").fileinput({
                showPreview: true, // Hiển thị ảnh preview
                allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif', 'jfif'], // Định dạng file chấp nhận
                maxFileSize: 2000, // Kích thước file tối đa (KB)
                browseLabel: 'Chọn ảnh', // Nhãn cho nút chọn ảnh
                removeLabel: 'Xóa ảnh', // Nhãn cho nút xóa ảnh
                uploadLabel: 'Tải lên', // Nhãn cho nút tải lên
                showRemove: true, // Hiển thị nút xóa
                showUpload: false, // Ẩn nút upload (nếu bạn không cần)
                previewFileType: 'image', // Đảm bảo chỉ hiển thị file ảnh
                browseIcon: '<i class="fas fa-folder-open"></i>', // Icon cho nút chọn file
                removeIcon: '<i class="fas fa-trash"></i>' // Icon cho nút xóa file
            });
            $("#main_image").fileinput({
                showPreview: true, // Hiển thị ảnh preview
                allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif', 'jfif'], // Định dạng file chấp nhận
                maxFileSize: 2000, // Kích thước file tối đa (KB)
                browseLabel: 'Chọn ảnh', // Nhãn cho nút chọn ảnh
                removeLabel: 'Xóa ảnh', // Nhãn cho nút xóa ảnh
                uploadLabel: 'Tải lên', // Nhãn cho nút tải lên
                showRemove: true, // Hiển thị nút xóa
                showUpload: false, // Ẩn nút upload (nếu bạn không cần)
                previewFileType: 'image', // Đảm bảo chỉ hiển thị file ảnh
                browseIcon: '<i class="fas fa-folder-open"></i>', // Icon cho nút chọn file
                removeIcon: '<i class="fas fa-trash"></i>' // Icon cho nút xóa file
            });
        });
    </script>
@endpush

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css" />
    <style>
        .bootstrap-datetimepicker-widget {
            font-size: 0.875rem;
            /* Giảm kích thước font */
            max-width: 300px;
            /* Giới hạn chiều rộng */
        }

        .modal-backdrop.show {
            z-index: 1001 !important;
        }
    </style>
@endpush
