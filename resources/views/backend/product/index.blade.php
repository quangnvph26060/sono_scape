@extends('backend.layout.index')
@section('content')
    <!-- Styles are unchanged -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        .d-flex {
            display: flex;
            align-items: center;
        }

        .justify-content-start {
            justify-content: flex-start;
        }

        .justify-content-end {
            justify-content: flex-end;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .icon-bell:before {
            content: "\f0f3";
            font-family: FontAwesome;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 2rem;
        }

        .card-header {
            background: linear-gradient(135deg, #6f42c1, #007bff);
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
        }

        .breadcrumbs {
            background: #fff;
            padding: 0.75rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .breadcrumbs a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumbs i {
            color: #6c757d;
        }

        .table-responsive {
            margin-top: 1rem;
        }

        .table {
            margin-bottom: 0;
        }

        .table th,
        .table td {
            padding: 1rem;
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }

        .btn-warning,
        .btn-danger {
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn-warning:hover,
        .btn-danger:hover {
            transform: scale(1.05);
        }

        .page-header {
            margin-bottom: 2rem;
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin-top: 1rem;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination .page-item:hover .page-link {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .pagination .page-item.active .page-link,
        .pagination .page-item .page-link {
            transition: all 0.3s ease;
        }
    </style>
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" style="text-align: center; color:white">Danh sách Chính sách hỗ trợ</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-6 d-flex justify-content-start">
                                            <a href="{{ route('admin.product.add') }}" id="open-add-modal" type="button"
                                                class="btn btn-primary">
                                                Thêm sản phẩm mới
                                            </a>
                                        </div>
                                        {{-- <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_filter">
                                                <label for="search-query">Tìm kiếm</label>
                                                <input id="search-query" type="text" name="phone"
                                                    class="form-control form-control-sm" placeholder="Nhập số điện thoại">
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="table-content">
                                        <!-- Load bảng user ban đầu từ view `table.blade.php` -->
                                        @include('backend.product.table', [
                                            'products' => $products,
                                        ])
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="pagination-links">
                                        <!-- Load phân trang ban đầu -->
                                        {{ $products->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal thêm khách hàng mới -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#logo').on('change', function(event) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Hiển thị hình ảnh đã chọn trong modal
                    $('#logo-preview').remove(); // Xóa hình ảnh cũ nếu có
                    var image = $('<img />', {
                        src: e.target.result,
                        id: 'logo-preview',
                        class: 'img-fluid',
                        style: 'max-width: 200px; margin-top: 10px;'
                    });
                    $('#logo').after(image); // Hiển thị sau input file
                };

                // Đọc tệp hình ảnh
                if (this.files && this.files[0]) {
                    reader.readAsDataURL(this.files[0]);
                }
            });
            $('#edit-logo').on('change', function(event) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Hiển thị hình ảnh đã chọn trong modal
                    $('#logo-preview').remove(); // Xóa hình ảnh cũ nếu có
                    var image = $('<img />', {
                        src: e.target.result,
                        id: 'logo-preview',
                        class: 'img-fluid',
                        style: 'max-width: 200px; margin-top: 10px;'
                    });
                    $('#edit-logo').after(image); // Hiển thị sau input file
                };

                // Đọc tệp hình ảnh
                if (this.files && this.files[0]) {
                    reader.readAsDataURL(this.files[0]);
                }
            });

            $(document).on('click', '#pagination-links a', function(e) {
                e.preventDefault();
                let pageUrl = $(this).attr('href'); // Lấy URL của liên kết phân trang

                $.ajax({
                    url: pageUrl,
                    type: 'GET',
                    success: function(response) {
                        // Cập nhật bảng và phân trang
                        $('#table-content').html($(response).find('#table-content').html());
                        $('#pagination-links').html($(response).find('#pagination-links')
                            .html());
                    },
                    error: function(xhr) {
                        console.error("Failed to paginate:", xhr.responseText);
                    }
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Mở modal thêm khách hàng
            $('#open-add-modal').on('click', function() {
                $('#add-product-form')[0].reset();
                $('.invalid-feedback').hide();
                $('#addProductsModal').modal('show');
            });

            $('.edit-btn').on('click', function() {
                let productId = $(this).data('id');
                let url = "{{ route('admin.product.detail', ':id') }}";
                url = url.replace(':id', productId);

                $.get(url, function(data) {
                    // Cập nhật giá trị cho các trường input
                    $('#edit-name').val(data.name);
                    $('#edit-description').val(data.description);
                    $('#edit-product-id').val(data.id);

                    // Hiển thị logo nếu có
                    if (data.logo) {
                        let logoUrl = "{{ env('APP_URL') }}/storage/:path".replace(':path', data
                            .logo); // Đảm bảo đường dẫn là đúng
                        console.log(logoUrl);

                        $('#logo-preview').remove(); // Xóa hình ảnh cũ nếu có
                        let image = $('<img />', {
                            src: logoUrl,
                            id: 'logo-preview',
                            class: 'img-fluid',
                            style: 'max-width: 200px; margin-top: 10px;'
                        });
                        $('#logo-preview-container').append(
                            image); // Hiển thị hình ảnh trong container chứa logo
                    }

                    // Hiển thị modal chỉnh sửa
                    $('#editProductsModal').modal('show');
                });
            });


            // Thêm khách hàng mới
            $('#add-product-form').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('admin.product.store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('#addProductsModal').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công',
                                text: response.message,
                            });

                            // Cập nhật bảng và phân trang
                            $('#table-content').html(response.html);
                            $('#pagination-links').html(response.pagination);
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                $(`#${key}-error`).text(errors[key][0]).show();
                            }
                        }
                    }
                });
            });

            $('#edit-product-form').on('submit', function(e) {
                e.preventDefault();

                // Lấy ID chính sách hỗ trợ từ hidden input
                const productId = $('#edit-product-id').val();
                var formData = new FormData(this);

                $.ajax({
                    url: `/admin/support-policy/update/${productId}`, // URL sử dụng ID động
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('#editProductsModal').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công',
                                text: response.message,
                            });

                            // Cập nhật bảng và phân trang
                            $('#table-content').html(response.html);
                            $('#pagination-links').html(response.pagination);
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                $(`#edit-${key}-error`).text(errors[key][0]).show();
                            }
                        }
                    }
                });
            });

            // Ngăn chặn việc form gửi tự động khi nhấn Enter
            $('#search-query').on('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault(); // Ngăn chặn hành động submit form mặc định
                    updateTableAndPagination(); // Gọi hàm AJAX để cập nhật bảng và phân trang
                }
            });

            // Cập nhật bảng và phân trang khi tìm kiếm
            function updateTableAndPagination() {
                let query = $('#search-query').val();
                $.ajax({
                    url: "{{ route('admin.product.search') }}", // URL tìm kiếm
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        // Cập nhật nội dung bảng và phân trang
                        $('#table-content').html(response.html);
                        $('#pagination-links').html(response.pagination);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            // Xử lý sự kiện click vào liên kết phân trang
            $(document).on('click', '#pagination-links a', function(e) {
                e.preventDefault();
                let url = $(this).attr('href'); // Lấy URL của trang phân trang
                let query = $('#search-query').val(); // Lấy giá trị tìm kiếm hiện tại
                let newUrl = url + (url.includes('?') ? '&' : '?') + 'query=' + encodeURIComponent(query);

                $.ajax({
                    url: newUrl, // Gửi yêu cầu AJAX với URL đã điều chỉnh
                    type: 'GET',
                    success: function(response) {
                        // Cập nhật nội dung bảng và phân trang
                        $('#table-content').html(response.html);
                        $('#pagination-links').html(response.pagination);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();

                let url = $(this).data('url');
                if (confirm('Bạn có chắc chắn muốn xóa?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        success: function(response) {
                            // Kiểm tra nếu phản hồi thành công
                            if (response.success) {
                                // Hiển thị thông báo thành công với SweetAlert
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thành công',
                                    text: response.message,
                                });

                                // Cập nhật bảng và phân trang
                                $('#table-content').html(response.html);
                                $('#pagination-links').html(response.pagination);
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Lỗi',
                                    text: response.message,
                                });
                            }
                        },
                        error: function(xhr) {
                            // Thông báo lỗi nếu xảy ra sự cố khi xóa
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi',
                                text: 'Có lỗi xảy ra khi xóa sản phẩm',
                            });
                        }
                    });
                }
            });


            $('#search-query').on('keyup', function() {
                let query = $(this).val().trim();
                updateTable(query);
            });

            function updateTable(query) {
                $.ajax({
                    url: "{{ route('admin.product.search') }}", // Route tìm kiếm
                    type: 'GET',
                    data: {
                        query: query
                    }, // Gửi từ khóa tìm kiếm
                    success: function(response) {
                        if (response.success) {
                            let htmlContent = '';
                            if (response.customers.length > 0) {
                                response.customers.forEach(function(customer) {
                                    htmlContent += `
                                <tr>
                                    <td>${customer.id}</td>
                                    <td>${customer.name}</td>
                                    <td>${customer.phone}</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-warning edit-btn" data-id="${customer.id}">
                                            <i class="fas fa-wrench"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger delete-btn" data-url="/admin/support-policy/delete/${customer.id}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>`;
                                });
                            } else {
                                htmlContent = `
                            <tr>
                                <td colspan="4" class="text-center">Không tìm thấy kết quả</td>
                            </tr>`;
                            }

                            // Cập nhật bảng
                            $('#table-content tbody').html(htmlContent);
                        } else {
                            console.log('Error:', response.error);
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    </script>
@endsection
