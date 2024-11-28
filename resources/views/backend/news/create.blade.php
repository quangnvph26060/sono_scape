@extends('backend.layout.index')

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
            <h4 class="card-title">Tạo bài viết</h4>
            <div class="card-tools">
                <a href="{{ route('admin.news.index') }}" class="btn btn-primary btn-sm">Danh sách bài viết</a>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ngày đăng</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="posted_at" value="{{ old('posted_at', date('Y-m-d H:i')) }}" class="form-control datetimepicker-input"
                                id="datetimepicker4" data-toggle="datetimepicker" data-target="#datetimepicker4" />
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Tiêu đề" value="{{ old('subject') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="summary">Mô tả ngắn</label>
                                    <textarea name="summary" class="form-control" placeholder="Nội dung ngắn">{{ old('summary') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="article">Nội dung</label>
                                    <textarea name="article" class="form-control" placeholder="Nội dung">{!! old('article') !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Mô tả seo</label>
                                    <textarea name="seo_description" id="" cols="30" rows="5" class="form-control"  placeholder="Mô tả seo">{{ old('seo_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Trạng thái</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="status" class="form-select">
                                <option value="published" @selected(old('status') == 'published')>Công chiếu</option>
                                <option value="unpublished" @selected(old('status') == 'unpublished')>Chưa công chiếu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gắn thẻ</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Gắn thẻ" id="chose_tag"
                                name="seo_keywords" value="{{ old('seo_keywords') }}">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ảnh đại diện</h4>
                    </div>
                    <div class="card-body">
                        <input id="file-1" name="featured_image" type="file" accept="image/*">
                    </div>
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary ">Lưu</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

    <script>
        $(function() {
            $('textarea[name="article"]').summernote({
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

            $('#datetimepicker4').datetimepicker({
                format: 'YYYY-MM-DD HH:mm',
                icons: {
                    time: 'fa fa-clock',
                    date: 'fa fa-calendar',
                    up: 'fa fa-chevron-up',
                    down: 'fa fa-chevron-down',
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-sun',
                    clear: 'fa fa-trash',
                    close: 'fa fa-times'
                }
            });

            const input = document.querySelector('#chose_tag');
            const tagify = new Tagify(input, {
                whitelist: ["Chất lượng cao", "Giá rẻ", "Cao cấp", "Độc quyền", "Mới nhất",
                    'Thân thiện với môi trường', 'Dễ sử dụng', 'Công nghệ tiên tiến'
                ], // Tag gợi ý
                dropdown: {
                    maxItems: 10, // Số lượng gợi ý tối đa
                    classname: "tags-look", // Class CSS tùy chỉnh
                    enabled: 0, // Gợi ý tự động khi gõ
                    closeOnSelect: false // Không đóng dropdown khi chọn tag
                }
            });

            $("#file-1").fileinput({
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
