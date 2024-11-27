<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.partials.head')

</head>

<body
    class="{{ request()->route()->getName() == 'product.detail' ? 'product_detail' : 'homepage' }} mobile-768 title_heading_style1 product_layout_sale_style1 product_layout_item_style1 buttom_layout_style2 sidebar_right gallery_grid menu_fixed_0 menu_style_mega_menu layout_full tab_style1 menu_mobile_style1 post-layout-item-style1">
    <h1 style="position: fixed; top: -100px">Máy Siêu Âm SonoScape</h1>
    <div class="wrapper clearfix project-layout">
        <header id="header">

            @include('frontend.layouts.partials.header')

        </header>


        @yield('content')


        <footer class="footer">

            <div class="footer-top"></div>

            <div class="footer-middle-part">
                @include('frontend.layouts.partials.footer-middle')
            </div>

            <div class="footer-bottom">
                @include('frontend.layouts.partials.footer-bottom')
            </div>

        </footer>

    </div>
    <div class="body_overlay"></div>

    @include('frontend.layouts.partials.exit-popup')

    @include('frontend.layouts.partials.location')

    @include('frontend.layouts.partials.scripts')
</body>

</html>
