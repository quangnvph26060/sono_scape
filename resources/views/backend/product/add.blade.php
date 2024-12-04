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
                    </div>

                    <!-- Cột bên phải -->
                    <div class="col-lg-6 add_product">
                        <!-- Giá -->
                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" name="price" id="price"
                                placeholder="Nhập giá sản phẩm">
                        </div>

                        <!-- Đơn vị sản phẩm -->
                        <div class="form-group mb-3">
                            <label for="product_unit" class="form-label">Nguồn</label>
                            <input type="text" class="form-control" name="source" id="source"
                                placeholder="Nhập nguồn sản phẩm">
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
                        <!-- Ảnh sản phẩm -->
                        <div class="form-group mb-3">
                            <label for="images" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple
                                accept="image/*">
                        </div>
                    </div>
                    <!-- Mô tả -->
                    <div class="col-lg-12">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea id="description" class="form-control" name="description" rows="10"></textarea>
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

    <script>
        $(function() {
            $('textarea[name="description"]').summernote({
                placeholder: 'Mô tả nội dung...',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript', 'fontname', 'fontsize',
                        'color', 'backcolor'
                    ]],
                    ['para', ['ul', 'ol', 'paragraph',
                        'height'
                    ]],
                    ['insert', ['link', 'picture', 'video', 'table']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['heading', ['style']],
                ]
            });

            $("#images").fileinput({
                showPreview: true, // Hiển thị ảnh preview
                allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'], // Định dạng file chấp nhận
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
