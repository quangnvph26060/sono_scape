@extends('backend.layout.index')

@section('title', 'Danh sách danh mục')


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
                        <h4 class="card-title" style="text-align: center; color:white">Danh sách Công ty sản xuất</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-8 d-flex justify-content-start">
                                            <button id="open-add-modal" type="button" class="btn btn-primary">
                                                Thêm danh mục
                                            </button>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="dataTables_filter">

                                                <div class="input-group">
                                                    <input id="category-search-query" type="text" name="phone"
                                                        class="form-control form-control-sm" placeholder="Tên danh mục">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="table-content">
                                        <!-- Load bảng user ban đầu từ view `table.blade.php` -->
                                        @include('backend.category.table', ['categories' => $categories])
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12" id="pagination-links">
                                        <!-- Load phân trang ban đầu -->
                                        {{ $categories->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal thêm danh mục mới -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-category-form">
                        @csrf
                        <!-- Họ tên -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <small id="name-error" class="text-danger"></small>
                        </div>

                        <div class="mb-3">
                            <label for="title_seo" class="form-label">Tiêu đề SEO</label>
                            <input type="text" class="form-control" id="title_seo" name="title_seo">
                            <small id="title_seo-error" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="keyword_seo" class="form-label">Từ khóa SEO</label>
                            <input type="text" class="form-control" id="keyword_seo" name="keyword_seo">
                            <small id="keyword_seo-error" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="description_seo" class="form-label">Mô tả SEO</label>
                            <input type="text" class="form-control" id="description_seo" name="description_seo">
                            <small id="description_seo-error" class="text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Sửa danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-category-form">
                        @csrf
                        <input type="hidden" id="edit-category-id" name="id">
                        <!-- Họ tên -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="edit-name" name="name">
                            <small id="name-error" class="text-danger"></small>
                        </div>

                        <div class="mb-3">
                            <label for="title_seo" class="form-label">Tiêu đề SEO</label>
                            <input type="text" class="form-control" id="edit-title_seo" name="title_seo">
                            <small id="title_seo-error" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="keyword_seo" class="form-label">Từ khóa SEO</label>
                            <input type="text" class="form-control" id="edit-keyword_seo" name="keyword_seo">
                            <small id="keyword_seo-error" class="text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="description_seo" class="form-label">Mô tả SEO</label>
                            <input type="text" class="form-control" id="edit-description_seo" name="description_seo">
                            <small id="description_seo-error" class="text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#pagination-links a', function(e) {
                e.preventDefault();
                let pageUrl = $(this).attr('href');

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
            // Mở modal thêm danh mục
            $('#open-add-modal').on('click', function() {
                $('#add-category-form')[0].reset();
                $('.invalid-feedback').hide();
                $('#addCategoryModal').modal('show');
            });

            $('.edit-category-btn').on('click', function() {
                const categoryId = $(this).data('id'); // Lấy ID danh mục từ nút bấm

                // Gửi AJAX để lấy chi tiết danh mục
                $.ajax({
                    url: `/admin/category/detail/${categoryId}`, // Gửi yêu cầu tới route chi tiết danh mục
                    type: 'GET',
                    success: function(response) {
                        if (response) {
                            // Gán dữ liệu vào hidden input và các trường khác trong form
                            $('#edit-category-id').val(response.id); // Gán ID vào hidden input
                            $('#edit-name').val(response.name); // Gán tên
                            $('#edit-title_seo').val(response.title_seo ||
                                ''); // Gán số điện thoại
                            $('#edit-description_seo').val(response.description_seo ||
                                ''); // Gán số điện thoại
                            $('#edit-keyword_seo').val(response.keyword_seo ||
                                ''); // Gán số điện thoại

                            // Hiển thị modal
                            $('#editCategoryModal').modal('show');
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Thất bại',
                            text: 'Không thể tải thông tin danh mục.',
                        });
                    }
                });
            });

            // Thêm danh mục mới
            $('#add-category-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('admin.category.store') }}",
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#addCategoryModal').modal('hide');
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

            $('#edit-category-form').on('submit', function(e) {
                e.preventDefault();

                // Lấy ID danh mục từ hidden input
                const categoryId = $('#edit-category-id').val();

                $.ajax({
                    url: `/admin/category/update/${categoryId}`, // URL sử dụng ID động
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('#editCategoryModal').modal('hide');
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
            $('#category-search-query').on('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault(); // Ngăn chặn hành động submit form mặc định
                    updateTableAndPagination(); // Gọi hàm AJAX để cập nhật bảng và phân trang
                }
            });

            // Cập nhật bảng và phân trang khi tìm kiếm
            function updateTableAndPagination() {
                let query = $('#category-search-query').val();
                $.ajax({
                    url: "{{ route('admin.category.search') }}", // URL tìm kiếm
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
                let query = $('#category-search-query').val(); // Lấy giá trị tìm kiếm hiện tại
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

            $(document).on('click', '.delete-category-btn', function(e) {
                e.preventDefault();

                let url = $(this).data('url');
                if (confirm('Bạn có chắc chắn muốn xóa?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thành công',
                                    text: response.message,
                                });

                                // Cập nhật bảng và phân trang sau khi xóa
                                $('#table-content').html(response.html);
                                $('#pagination-links').html(response.pagination);
                            }
                        },
                        error: function(xhr) {
                            toastr.error('Xóa danh mục thất bại', 'Lỗi');
                        }
                    });
                }
            });

            // $('#category-search-query').on('keyup', function() {
            //     let query = $(this).val().trim();
            //     updateTable(query);
            // });

            // function updateTable(query) {
            //     $.ajax({
            //         url: "{{ route('admin.category.search') }}", // Route tìm kiếm
            //         type: 'GET',
            //         data: {
            //             query: query
            //         }, // Gửi từ khóa tìm kiếm
            //         success: function(response) {
            //             if (response.success) {
            //                 let htmlContent = '';
            //                 if (response.customers.length > 0) {
            //                     response.customers.forEach(function(customer) {
            //                         htmlContent += `
        //                     <tr>
        //                         <td>${customer.id}</td>
        //                         <td>${customer.name}</td>
        //                         <td>${customer.phone}</td>
        //                         <td>
        //                             <a href="javascript:void(0)" class="btn btn-warning edit-btn" data-id="${customer.id}">
        //                                 <i class="fas fa-wrench"></i>
        //                             </a>
        //                             <a href="javascript:void(0)" class="btn btn-danger delete-category-btn" data-url="/admin/category/delete/${customer.id}">
        //                                 <i class="fas fa-trash-alt"></i>
        //                             </a>
        //                         </td>
        //                     </tr>`;
            //                     });
            //                 } else {
            //                     htmlContent = `
        //                 <tr>
        //                     <td colspan="4" class="text-center">Không tìm thấy kết quả</td>
        //                 </tr>`;
            //                 }

            //                 // Cập nhật bảng
            //                 $('#table-content tbody').html(htmlContent);
            //             } else {
            //                 console.log('Error:', response.error);
            //             }
            //         },
            //         error: function(xhr) {
            //             console.error(xhr.responseText);
            //         }
            //     });
            // }
        });
    </script>
@endsection
