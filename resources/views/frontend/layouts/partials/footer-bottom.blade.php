<div class="widget widget-footer widget-20" data-widget-id="20" data-widget="footer">
    <div style="color: #ffffff !important; background-color: #45818e">
        <div class="container style5">
            <div class="row center-vertical widget-content">
                <div class="w-100 position-top">
                    <div class="col-12">
                        <ul class="categories-list navbar-nav mb-menu">
                            <li class="nav-item relative default wb-header-menu-item">
                                <a class="nav-link" href="{{url('/')}}" aria-label="TRANG CHỦ">
                                    TRANG CHỦ
                                </a>
                            </li>
                            <li class="nav-item relative default wb-header-menu-item">
                                <a class="nav-link"
                                    href="{{route('introduce')}}"
                                    aria-label="GIỚI THIỆU ">
                                    GIỚI THIỆU
                                </a>
                            </li>
                            <li class="nav-item relative default wb-header-menu-item">
                                <a class="nav-link" href="{{route('product.list')}}"
                                    target='"_blank"' aria-label="{{$setting->company}}">
                                 SẢN PHẨM
                                </a>
                            </li>
                            <li class="nav-item relative default wb-header-menu-item">
                                <a class="nav-link" href="{{route('news.list')}}"
                                    aria-label="TIN TỨC MỚI">
                                    TIN TỨC MỚI
                                </a>
                            </li>
                            <li class="nav-item relative default wb-header-menu-item">
                                <a class="nav-link" href="{{route('contact')}}"
                                    aria-label="LIÊN HỆ">
                                    LIÊN HỆ
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="text-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
