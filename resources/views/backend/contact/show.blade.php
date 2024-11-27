@extends('backend.layout.index')

@section('content')
    <form action="{{ route('admin.contact.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Cấu hình chung</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chủ sở hữu</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$data->name}}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$data->email}}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$data->phone}}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên công ty</label>
                                    <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{$data->company}}">
                                    @error('company')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$data->address}}">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên Fanpage</label>
                                    <input type="text" name="fanpage" class="form-control @error('fanpage') is-invalid @enderror" value="{{$data->fanpage}}">
                                    @error('fanpage')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link youtube</label>
                                    <input type="text" name="youtube" class="form-control @error('youtube') is-invalid @enderror" value="{{$data->youtube}}">
                                    @error('youtube')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả ngắn</label>
                                    <textarea name="sort_description" class="form-control @error('sort_description') is-invalid @enderror">{{$data->sort_description}}</textarea>
                                    @error('sort_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Map</label>
                                    <input type="text" name="map" class="form-control @error('map') is-invalid @enderror" value="{{$data->map}}">
                                    @error('map')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 float-right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Lưu cấu hình</button>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Logo</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail w-100" id="show_logo" style="cursor: pointer"
                            src="{{ showImage($data->logo) }}" alt="" onclick="document.getElementById('logo').click();">
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        <input type="file" name="logo" id="logo" class="form-control d-none" accept="image/*"
                            onchange="previewImage(event, 'show_logo')">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Icon</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail w-100" id="show_icon" style="cursor: pointer"
                            src="{{ showImage($data->icon) }}" alt=""
                            onclick="document.getElementById('icon').click();">
                            @error('icon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        <input type="file" name="icon" id="icon" class="form-control d-none"
                            accept="image/*" onchange="previewImage(event, 'show_icon')">
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Logo công ty</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid img-thumbnail w-100" id="show_company_logo" style="cursor: pointer"
                            src="{{ showImage($data->company_logo) }}" alt=""
                            onclick="document.getElementById('company_logo').click();">
                            @error('company_logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        <input type="file" name="company_logo" id="company_logo" class="form-control d-none"
                            accept="image/*" onchange="previewImage(event, 'show_company_logo')">
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
