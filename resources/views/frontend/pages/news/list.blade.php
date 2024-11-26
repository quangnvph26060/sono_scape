@extends('frontend.layouts.master')

@section('content')
    <x-breadcrumb />
    <div class="page-content">
        <div class="container">
            <div class="row clearfix post-list">
                <div class="col-lg-9 post-view">
                    <div class="blog-item post-list-view" data-wow-delay="0.25s">
                        <div class="row">

                            @foreach ($news as $item)
                                <div class="item col-12 col-sm-6 col-md-6 col-lg-12">
                                    <div class="post-item relative" data-id="224">
                                        <figure class="photoframe relative">
                                            <div class="relative img-post">
                                                <a href="{{ route('news.detail', $item->slug) }}"
                                                    class="d-block relative text-center">
                                                    <img src="https://media.loveitopcdn.com/39908/thumb/800x500/212222-may-sieu-am-5d-sonoscape-p25-2.jpg?zc=1"
                                                        width="100%" height="100%"
                                                        data-isrc="https://media.loveitopcdn.com/39908/thumb/800x500/212222-may-sieu-am-5d-sonoscape-p25-2.jpg?zc=1"
                                                        class="lazyload"
                                                        alt="{{ $item->subject }}"
                                                        aria-label="{{ $item->subject }}" />
                                                </a>
                                            </div>
                                            <figcaption class="info-post">
                                                <div class="bg-gradient"></div>
                                                <div class="wrap-two-lines post-title">
                                                    <a href="{{ route('news.detail', $item->slug) }}"
                                                        class="two-lines"
                                                        aria-label="{{ $item->subject }}">{{ $item->subject }}.</a>
                                                </div>
                                                <p class="f-size-medium post-view-date">
                                                    <span class="post-date">
                                                        <i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                                        <span class="d-none-sidebar"> | </span>
                                                    </span>
                                                    <span class="post-item-view">
                                                        <i class="fas fa-eye"></i> {{ $item->view }} Lượt xem
                                                    </span>
                                                </p>
                                                <div class="description">
                                                    {!! \Str::words($item->article, 35, ' [...]') !!}
                                                </div>
                                                <div class="read-more">
                                                    <a
                                                        href="{{ route('news.detail', $item->slug) }}">
                                                        Xem thêm &rsaquo;&rsaquo;</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                            <hr class="divider-2" />
                        </div>

                        {{ $news->links() }}
                    </div>
                </div>

                <x-sidebar />

            </div>
        </div>
    </div>
@endsection
