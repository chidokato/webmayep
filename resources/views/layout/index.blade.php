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
<!-- Bootstrap core CSS -->
<link href="frontend/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="frontend/custom.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
<!-- Custom styles for blog -->
<link href="frontend/blog.css" rel="stylesheet">
 <!-- Custom styles for navbar-top-fixed -->
<link href="frontend/navbar-top-fixed.css" rel="stylesheet">
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

@if(session('Alerts'))
	<script> alert('Thành công'); </script>
@endif
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
<script src="frontend/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.js"></script>


<script type="text/javascript">
// ẩn thanh phân trang của laravel
$('ul.pagination').hide();
$(function() {
    $('.infinite-scroll').jscroll({
        autoTrigger: true,
        loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
        padding: 0,
        nextSelector: '.pagination li.active + li a',
        contentSelector: 'div.infinite-scroll',
        callback: function() {
            // xóa thanh phân trang ra khỏi html mỗi khi load xong nội dung
            $('ul.pagination').remove();
        }
    });
}); 
</script>

</body>
</html>