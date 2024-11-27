@extends('backend.layout.index')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between  ">
            <h4 class="card-title">Danh sách trình chiếu</h4>
            <div class="card-options">
                <a href="{{ route('admin.slider.create', 'image') }}" class="btn btn-primary btn-sm"><i class="fas fa-image me-2"></i>Thêm mới trình chiếu hình ảnh (+)</a>
                <a href="{{ route('admin.slider.create', 'video') }}" class="btn btn-primary btn-sm"><i class="fas fa-video me-2"></i>Thêm mới trình chiếu video (+)</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Kiểu</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->type == 'image' ? 'Trình chiếu hình ảnh' : 'Trình chiếu video' }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="fas fa-edit edit-btn" data-id="{{ $item->id }}"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt delete-btn" data-url=""></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
