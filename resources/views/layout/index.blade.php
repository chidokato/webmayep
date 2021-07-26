<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="{{$head_setting->img}}" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="@yield('img')" />
<meta property="og:image" content="@yield('img')" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->
<!-- g+ -->
<link rel="publisher" href="g+"/>
<!-- and g+ -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />

<!-- ================= Style ================== --> 
<link href="frontend/acore/core.css" rel="stylesheet" />
<link href="frontend/fonts/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="frontend/uikit/css/uikit.modify.css" rel="stylesheet" />
<link href="frontend/library/css/reset.css" rel="stylesheet" />
<link href="frontend/library/css/library.css" rel="stylesheet" />
<link href="frontend/uikit/css/components/slideshow.min.css" rel="stylesheet" />
<link href="frontend/plugins/lightslider-master/dist/css/lightslider.min.css" rel="stylesheet" />
<link href="frontend/style.css" rel="stylesheet" />
<script src="frontend/library/js/jquery.js"></script>
<script src="frontend/uikit/js/uikit.min.js"></script>
<link href="frontend/custom.css" rel="stylesheet" />
<link href="frontend/hotline.css" rel="stylesheet" />
<!-- ================= js ================== --> 

@yield('css')
{!! $head_setting->codeheader !!}
</head>
@include('layout.function')
<body>

@include('layout.header')

@yield('content')
  
@include('layout.footer')
{!! $head_setting->codebody !!}
@yield('script')
</body>
</html>