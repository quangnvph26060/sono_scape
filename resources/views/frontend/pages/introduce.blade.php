@extends('frontend.layouts.master')


@section('content')
    <x-breadcrumb />

    <div class="page-content">
        <div class="container">
            <div class="row clearfix">
                <!-- left content column-->
                <div class="col-lg-9">
                    <!-- blog post-->
                    <article class="article-detail m-bottom-50">
                        <div class="ck_editor_content">
                            {!! $introduction->article !!}

                        </div>
                    </article>
                    <div class="share-container" style="margin-top: 20px">
                        <p class="d-inline-middle">Chia sẻ:</p>
                        <div class="d-inline-middle addthis-widget-container">
                            <ul class="clearfix horizontal-list social-icons">
                                <li class="relative">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://nld.com.vn/tinh-gon-bo-may-la-doi-hoi-cap-thiet-19624112520582625.htm"
                                        rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="relative">
                                    <a href="https://twitter.com/intent/tweet?url=https://maysieuamsonoscape.com/gioi-thieu-may-sieu-am-sonoscape.html"
                                        rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="relative">
                                    <a class="f-size-ex-large textAlign-center" rel="nofollow"
                                        href="https://www.linkedin.com/sharing/share-offsite/?url=https://maysieuamsonoscape.com/gioi-thieu-may-sieu-am-sonoscape.html"
                                        target="_blank" aria-label="Linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="relative">
                                    <a href="http://pinterest.com/pin/create/link/?url=https://maysieuamsonoscape.com/gioi-thieu-may-sieu-am-sonoscape.html&media=https://media.loveitopcdn.com/39908/thumb/may-sieu-am-5d-sonoscape-s55.png"
                                        rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="relative">
                                    <a href="https://www.tumblr.com/share/link?url=https://maysieuamsonoscape.com/gioi-thieu-may-sieu-am-sonoscape.html"
                                        rel="nofollow" target="_blank" class="f-size-ex-large textAlign-center">
                                        <i class="fab fa-tumblr"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="divider-3" />
                    <div class="m-bottom-30"></div>
                </div>

                <x-sidebar />

            </div>
        </div>
    </div>
@endsection
