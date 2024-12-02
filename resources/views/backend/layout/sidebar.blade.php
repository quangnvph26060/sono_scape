<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="" class="logo">
                <img src="{{ asset('backend/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('admin.index') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact.show') }}">
                        <i class="fas fa-cogs"></i>
                        <p>Cấu hình chung</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Thành phần quản lý</h4>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.company.index') }}">
                        <i class="fas fa-building "></i>
                        <p>Công ty sản xuất</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.supportPolicy.index') }}">
                        <i class="fas fa-sign"></i>
                        <p>Chính sách hỗ trợ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.slider.index') }}">
                        <i class="fas fa-image"></i>
                        <p>Cấu hình trình chiếu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Quản lý bài viết</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}">
                        <i class="fas fa-box-open"></i>
                        <p>Danh Sách Sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.form.index') }}">
                        <i class="fas fa-question"></i>
                        <p>Yêu cầu liên hệ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
