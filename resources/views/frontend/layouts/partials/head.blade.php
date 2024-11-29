<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>@yield('title', $setting->seo_title ?? env('APP_NAME'))</title>

<link rel="icon" type="image/png" href="{{ showImage($setting->icon) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="description" content="@yield('description', $setting->seo_description)">
<meta name="keywords" content="@yield('keywords', formatString($setting->seo_keywords) ?? env('APP_NAME'))">


<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title', $setting->seo_title ?? env('APP_NAME'))" />
<meta property="og:description" content="@yield('description', $setting->seo_description)" />
<meta property="og:site_name" content="{{ $setting->company }}" />
<meta property="og:image" content="{{ showImage($setting->logo) }}" />

@include('frontend.layouts.partials.styles')
