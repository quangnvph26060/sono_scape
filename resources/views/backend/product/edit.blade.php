@extends('backend.layout.index')

@section('content')
    <style>
        .product-image {
            width: 100%;
            /* Chiều rộng bằng 100% của container */
            height: 200px;
            /* Chiều cao cố định */
            object-fit: cover;
            /* Cắt bớt ảnh để phù hợp với tỷ lệ */
            border-radius: 5px;
            /* Bo góc cho ảnh (tuỳ chọn) */
        }
    </style>

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
    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
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
                                value="{{ $product->name }}" placeholder="Nhập tên sản phẩm">
                        </div>

                        <!-- Dropdown Country -->
                        <div class="form-group mb-3">
                            <label for="country_id" class="form-label">Công nghệ</label>
                            <select class="form-select" name="country_id" id="country_id">
                                <option value="{{ $product->country->id }}">{{ $product->country->name }}</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Dropdown Company -->
                        <div class="form-group mb-3">
                            <label for="company_id" class="form-label">Hãng sản xuất</label>
                            <select class="form-select" name="company_id" id="company_id">
                                <option value="{{ $product->company->id }}">{{ $product->company->name }}</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tình trạng -->
                        <div class="form-group mb-3">
                            <label for="condition_level" class="form-label">Tình trạng (%)</label>
                            <input type="number" class="form-control" name="condition_level" id="condition_level"
                                value="{{ $product->condition_level }}" min="0" max="100">
                        </div>
                    </div>

                    <!-- Cột bên phải -->
                    <div class="col-lg-6 add_product">
                        <!-- Giá -->
                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Giá</label>
                            <input type="number" class="form-control" value="{{ $product->price }}" name="price"
                                id="price" placeholder="Nhập giá sản phẩm">
                        </div>

                        <!-- Đơn vị sản phẩm -->
                        <div class="form-group mb-3">
                            <label for="product_unit" class="form-label">Nguồn</label>
                            <input type="text" value="{{ $product->source }}" class="form-control" name="source"
                                id="source" placeholder="Nhập nguồn sản phẩm">
                        </div>

                        <!-- Bảo hành -->
                        <div class="form-group mb-3">
                            <label for="guarantee" class="form-label">Bảo hành (tháng)</label>
                            <input type="number" value="{{ $product->guarantee }}" class="form-control" name="guarantee"
                                id="guarantee" placeholder="Nhập số tháng bảo hành">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Trạng thái</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Còn hàng</option>
                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Hết hàng</option>
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
                        <textarea id="description" class="form-control" name="description" rows="10">{{ $product->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-md">Xác nhận</button>
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
            var existingImages = [];
            var existingImagesConfig = [];

            @foreach ($product->images as $key => $image)
                existingImages.push('{{ showImage($image) }}');
                existingImagesConfig.push({
                    caption: 'Ảnh {{ $loop->index + 1 }}', // Đặt tên cho từng ảnh
                    size: 12345, // Kích thước file (tùy chỉnh nếu cần)
                    key: '{{ $key }}', // ID của ảnh
                    url: '{{ route('admin.product.delete-image', ['id' => $product->id . '-' . $key]) }}' // API xóa ảnh
                });
            @endforeach


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
                showPreview: true,
                allowedFileExtensions: ['jpg', 'jpeg', 'png', 'gif'],
                maxFileSize: 2000,
                browseLabel: 'Chọn ảnh',
                removeLabel: 'Xóa ảnh',
                uploadLabel: 'Tải lên',
                showRemove: true,
                showUpload: false,
                previewFileType: 'image',
                browseIcon: '<i class="fas fa-folder-open"></i>',
                removeIcon: '<i class="fas fa-trash"></i>',


                initialPreview: existingImages,
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: existingImagesConfig,
                deleteUrl: true,
            }).on('filedeleted', function(event, key, jqXHR, data) {
                if (jqXHR.responseJSON.status) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "success",
                        title: jqXHR.responseJSON.message
                    });
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "error",
                        title: jqXHR.responseJSON.message
                    });
                }

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
