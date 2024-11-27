<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha384-DyZ88mC6Up2uqS0zUpUf2BwA6E81y/eK2snElDkC2DdAb5I8Tx1gfZDA1ibbhwYs" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css.map') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fonts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/kaiadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/kaiadmin.css.map') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins.css.map') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
    <script src="{{ asset('backend/validator/validator.js') }}"></script>

    <title>Document</title>
</head>
<style>
    .collapse {
        display: none;
    }

    .collapse.show {
        display: block;
    }
</style>

<body>
    <div id="wrapper">
        @include('backend.layout.sidebar')

        <div class="main-panel">

            @include('backend.layout.header');
            <div class="container">
                @yield('content')
            </div>


            @include('backend.layout.footer')

        </div>

    </div>

    <script src="{{ asset('backend/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <script src="{{ asset('backend/assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/kaiadmin.js') }}"></script>
    <script src="{{ asset('backend/assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('backend/assets/js/setting-demo2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('backend/assets/js/demo.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
          type: "line",
          height: "70",
          width: "100%",
          lineWidth: "2",
          lineColor: "#177dff",
          fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
          type: "line",
          height: "70",
          width: "100%",
          lineWidth: "2",
          lineColor: "#f3545d",
          fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
          type: "line",
          height: "70",
          width: "100%",
          lineWidth: "2",
          lineColor: "#ffa534",
          fillColor: "rgba(255, 165, 52, .14)",
        });


    </script> --}}

    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

</body>

</html>
