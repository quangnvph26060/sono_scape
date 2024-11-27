<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('backend/auth/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/auth/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/auth/css/bootstrap.min.css') }}">

    <!-- Style -->

    <link rel="stylesheet" href="{{ asset('backend/auth/css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Login</title>
    <style>
        .form-block {
            display: none;
        }

        .form-block.active {
            display: block;
        }

        .error {
            color: red;
            padding: 5px 0px 0px 10px;
            font-size: 13px;

        }

        .custom-toast {
            width: auto !important;
            /* Cho phép chiều rộng tự động */
            max-width: 500px;
            /* Bạn có thể điều chỉnh giá trị này theo nhu cầu */
            white-space: nowrap;
            /* Ngăn việc xuống dòng */
        }
    </style>
</head>

<body>

    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('{{ asset('backend/auth/images/bg_1.jpg') }}');"></div>
        <div class="contents">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <!-- Login Form -->
                        <div id="loginForm" class="form-block mx-auto active">
                            <div class="text-center mb-5">
                                <h3 class="text-uppercase">Đăng nhập <strong> Admin</strong></h3>
                            </div>
                            <form method="post" action="">
                                @csrf
                                <div class="form-group first">
                                    <label for="loginEmail">Email</label>
                                    <input type="text" class="form-control" value="{{ old('email') }}"
                                        placeholder="your-email@gmail.com" name="email" id="loginEmail">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="loginPassword">Password</label>
                                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password"
                                        id="loginPassword">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0">
                                        <span class="caption">Ghi nhớ mật khẩu</span>
                                        <input type="checkbox" name="remember" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    {{-- <span class="ml-auto"><a href="#" onclick="showForgotPasswordForm(event);" class="forgot-pass">Forgot Password</a></span> --}}
                                </div>

                                <input type="submit" value="Xác nhận" class="btn btn-block py-2 btn-primary">


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</body>

</html>
