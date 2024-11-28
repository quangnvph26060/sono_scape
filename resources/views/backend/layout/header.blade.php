<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="../index.html" class="logo">
                <img src="{{ asset('backend/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                    class="navbar-brand" height="20">
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
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                        <li>
                            <div class="dropdown-title d-flex justify-content-between align-items-center">
                                Messages
                                <a href="#" class="small">Mark all as read</a>
                            </div>
                        </li>
                        <li>
                            <div class="scroll-wrapper message-notif-scroll scrollbar-outer"
                                style="position: relative;">
                                <div class="message-notif-scroll scrollbar-outer scroll-content"
                                    style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('backend/assets/img/jm_denis.jpg') }}"
                                                    alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jimmy Denis</span>
                                                <span class="block"> How are you ? </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('backend/assets/img/chadengle.jpg') }}"
                                                    alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Chad</span>
                                                <span class="block"> Ok, Thanks ! </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('backend/assets/img/mlane.jpg') }}"
                                                    alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jhon Doe</span>
                                                <span class="block">
                                                    Ready for the meeting today...
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('backend/assets/img/talha.jpg') }}"
                                                    alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Talha</span>
                                                <span class="block"> Hi, Apa Kabar ? </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="scroll-element scroll-x">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar"></div>
                                    </div>
                                </div>
                                <div class="scroll-element scroll-y">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all messages<i
                                    class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="notification">0</span>
                    </a>
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <div class="dropdown-title">
                                You have 100 new notifications
                            </div>
                        </li>
                        <li>
                            <div class="scroll-wrapper notif-scroll scrollbar-outer" style="position: relative;">
                                <div class="notif-scroll scrollbar-outer scroll-content"
                                    style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                    <div class="notif-center">
                                        {{-- @foreach ($adminNotifications as $item)
                                            @php
                                                $createdAt = $item->created_at;
                                                $timeElapsed = Carbon\Carbon::parse($createdAt)
                                                    ->locale('vi')
                                                    ->diffForHumans();
                                            @endphp
                                            <a href="{{ route('admin.transaction.updateNotification', ['id' => $item->id]) }}"
                                                class="notification-item mark-as-read">
                                                <!-- Thêm data-href -->
                                                <div class="notif-icon notif-primary">
                                                    <i class="fas fa-bell"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Giao dịch của bạn đã
                                                        @if ($item->notification == 0)
                                                            được xác nhận
                                                        @else
                                                            bị từ chối
                                                        @endif
                                                    </span>
                                                    <span class="time">{{ $timeElapsed }}</span>
                                                </div>
                                            </a>
                                        @endforeach --}}
                                    </div>
                                </div>
                                <div class="scroll-element scroll-x">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar"></div>
                                    </div>
                                </div>
                                <div class="scroll-element scroll-y">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all notifications<i
                                    class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    <div class="dropdown-menu quick-actions animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">Quick Actions</span>
                            <span class="subtitle op-7">Shortcuts</span>
                        </div>
                        <div class="scroll-wrapper quick-actions-scroll scrollbar-outer" style="position: relative;">
                            <div class="quick-actions-scroll scrollbar-outer scroll-content"
                                style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height: 0px;">
                                <div class="quick-actions-items">
                                    <div class="row m-0">
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-danger rounded-circle">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                                <span class="text">Calendar</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-warning rounded-circle">
                                                    <i class="fas fa-map"></i>
                                                </div>
                                                <span class="text">Maps</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-info rounded-circle">
                                                    <i class="fas fa-file-excel"></i>
                                                </div>
                                                <span class="text">Reports</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-success rounded-circle">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <span class="text">Emails</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-primary rounded-circle">
                                                    <i class="fas fa-file-invoice-dollar"></i>
                                                </div>
                                                <span class="text">Invoice</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-secondary rounded-circle">
                                                    <i class="fas fa-credit-card"></i>
                                                </div>
                                                <span class="text">Payments</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-element scroll-x">
                                <div class="scroll-element_outer">
                                    <div class="scroll-element_size"></div>
                                    <div class="scroll-element_track"></div>
                                    <div class="scroll-bar"></div>
                                </div>
                            </div>
                            <div class="scroll-element scroll-y">
                                <div class="scroll-element_outer">
                                    <div class="scroll-element_size"></div>
                                    <div class="scroll-element_track"></div>
                                    <div class="scroll-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="profile-pic" href="#" id="dropdownToggle">
                        <div class="avatar-sm">
                            <img src="{{ asset('backend/assets/img/chadengle.jpg') }}" alt="image profile"
                                class="avatar-img rounded-circle">
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Hi, {{ auth()->user()->name }}</span>
                            <span class="fw-bold">{{ auth()->user()->email }}</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu" id="dropdownMenu">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg">
                                    <img src="{{ asset('backend/assets/img/chadengle.jpg') }}" alt="image profile"
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="u-text">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-muted">{{ auth()->user()->email }}</p>
                                    <a href="{{ route('admin.logout') }}" class="btn btn-xs btn-sm"
                                        style="background: red; color: #fff">Đăng xuất</a>
                                    <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

