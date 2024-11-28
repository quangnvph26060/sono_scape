<div class="header-top" style="background-color: #cccccc">
    <div class="container">
        <div class="textAlign-left topbar-left">
            <div class="section-infor-topbar relative">
                <ul class="info-account line-right">
                    <li>
                        <span class="phone-label">Gọi ngay</span>
                        <a href="tel:{{ $setting->phone }}">
                            <span class="color">
                                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            </span>
                           {{ $setting->phone }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="textAlign-right topbar-right">
            <div class="textAlign-right">
                <div class="social-header d-inline-block relative">
                    <a href="https://www.facebook.com/{{$setting->fanpage}}" rel="nofollow" aria-label="facebook"
                        class="float-shadow" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/{{$setting->youtube}}" rel="nofollow"
                        aria-label="youtube" class="float-shadow" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    header .mini-cart3 .mini-cart-number {
        background-color: #134f5c !important;
    }

    header .mini-cart3 a {
        color: #134f5c !important;
    }

    header .header-container.fixed-ontop .mb-menu li:hover>a,
    header .header-container.fixed-ontop .mb-menu>li.active>a,
    header .header-finemarket.fixed-ontop .mega-container:hover .mega-menu-title .h3 {
        color: #ffffff !important;
    }

    @media (min-width: 992px) {

        header .header-container.fixed-ontop .main-nav ul>li>a,
        header .header-container.fixed-ontop .main-nav .dropdown-menu .title-mega>a,
        header .header-finemarket.fixed-ontop .mega-container .mega-menu-title .h3 {
            color: #134f5c !important;
        }
    }
</style>

<div class="d-lg-none header-mobile">
    <div class="header-left header-container no-pd-menu-header">
        <div class="wb-nav-header width-menu-mobile">
            <div class="container">
                <div class="row clearfix center-vertical relative">
                    <div class="col-lg-3 col-6 header-logo">
                        <a href="{{url('/')}}" aria-label="Máy Siêu Âm SonoScape"
                            class="logo d-inline-b">
                            <img src="{{showImage($setting->logo)}}"
                                alt="{{$setting->company}}" width="100%" height="100%" />
                        </a>
                    </div>
                    <div
                        class="col-lg-9 col-md-12 col-sm-12 col-12 px-0 px-lg-3 menu-cart center-vertical-nojustify height-menu-fixed">
                        <ul class="list-inline-block pull-right pr-lg-3">
                            <li>
                                <form class="search-form"
                                    action="{{route('product.list')}}" method="GET">
                                    <input placeholder="Nhập từ khóa" value="" data-default-value="Nhập từ khóa"
                                        data-value="Nhập từ khóa" type="text" name="keyword" class="search-box"
                                        autocomplete="off" />
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <a href="{{url('/')}}" aria-label="{{$setting->company}}"
                            class="logo d-inline-b logo-fixed">
                            <img src="{{showImage($setting->logo)}}"
                                alt="{{$setting->company}}" width="100%" height="100%" />
                        </a>
                        <nav class="main-nav navbar-expand-lg pull-left">
                            <div class="btn-toggle-mobile-menu center-vertical">
                                <span class="nav-icon toggle-mobile-menu">
                                    <span></span>
                                </span>
                                <span class="nav-icon toggle-mobile-menu title-menu">
                                    <span> MENU </span>
                                </span>
                            </div>
                            <div class="navbar-menu">
                                <div class="section-header-menu">
                                    <ul class="navbar-nav ml-auto menu-nav mb-menu">
                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link" href="{{url('/')}}"
                                                aria-label="TRANG CHỦ">
                                                TRANG CHỦ
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('introduce')}}"
                                                aria-label="GIỚI THIỆU ">
                                                GIỚI THIỆU
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('product.list')}}"
                                                target="_blank" aria-label="{{$setting->company}}">
                                               SẢN PHẨM
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link" href="{{route('news.list')}}"
                                                aria-label="TIN TỨC MỚI">
                                                TIN TỨC MỚI
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('contact')}}"
                                                aria-label="LIÊN HỆ">
                                                LIÊN HỆ
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="textAlign-right">
                                    <div class="social-header d-inline-block relative">
                                        <a href="https://www.facebook.com/{{$setting->fanpage}}" rel="nofollow"
                                            aria-label="facebook" class="float-shadow" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.youtube.com/channel/{{$setting->youtube}}"
                                            rel="nofollow" aria-label="youtube" class="float-shadow"
                                            target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-none d-lg-block header-desktop">
    <div class="header-left header-container no-pd-menu-header">
        <div class="wb-main-header">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-4 header-logo">
                        <a href="{{url('/')}}" aria-label="Máy Siêu Âm SonoScape"
                            class="logo d-inline-b">
                            <img src="{{showImage($setting->logo)}}"
                                alt="Máy siêu âm SonoScape Việt Nam" width="100%" height="100%" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wb-nav-header width-menu-mobile">
            <div class="container">
                <div class="row clearfix">
                    <div
                        class="col-lg-12 col-md-12 col-sm-12 col-12 menu-cart center-vertical-nojustify height-menu-fixed">
                        <div class="header-logo">
                            <a href="{{url('/')}}" aria-label="Máy Siêu Âm SonoScape"
                                class="logo d-inline-b">
                                <img src="https://media.loveitopcdn.com/39908/thumb/sonoscape-2.png"
                                    alt="Máy siêu âm SonoScape Việt Nam" width="100%" height="100%" />
                            </a>
                        </div>
                        <a href="{{url('/')}}" aria-label="Máy Siêu Âm SonoScape"
                            class="logo d-inline-b logo-fixed">
                            <img src="https://media.loveitopcdn.com/39908/thumb/sonoscape-2.png"
                                alt="Máy siêu âm SonoScape Việt Nam" width="100%" height="100%" />
                        </a>
                        <nav class="main-nav navbar-expand-lg pull-left">
                            <div class="btn-toggle-mobile-menu center-vertical">
                                <span class="nav-icon toggle-mobile-menu">
                                    <span></span>
                                </span>
                                <span class="nav-icon toggle-mobile-menu title-menu">
                                    <span> MENU </span>
                                </span>
                            </div>
                            <div class="navbar-menu">
                                <div class="section-header-menu">
                                    <ul class="navbar-nav ml-auto menu-nav mb-menu">
                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link" href="{{url('/')}}"
                                                aria-label="TRANG CHỦ">
                                                TRANG CHỦ
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('introduce')}}"
                                                aria-label="GIỚI THIỆU  SONOSCAPE">
                                                GIỚI THIỆU
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('product.list')}}"
                                                target="_blank" aria-label="MÁY SIÊU ÂM SONOSCAPE  ">
                                                SẢN PHẨM
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link" href="{{route('news.list')}}"
                                                aria-label="TIN TỨC MỚI">
                                                TIN TỨC MỚI
                                            </a>
                                        </li>

                                        <li class="nav-item mega_menu relative wb-header-menu-item">
                                            <a class="nav-link"
                                                href="{{route('contact')}}"
                                                aria-label="LIÊN HỆ">
                                                LIÊN HỆ
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="list-inline-block pull-right pr-lg-3">
                            <li>
                                <form class="search-form"
                                    action="{{route('product.list')}}" method="GET">
                                    <input placeholder="Nhập từ khóa" value=""
                                        data-default-value="Nhập từ khóa" data-value="Nhập từ khóa" type="text"
                                        name="keyword" class="search-box" autocomplete="off" />
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
