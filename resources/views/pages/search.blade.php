@extends('layout.index')


@section('content')
@if(isset($product))
<header class="l-section c-page-header c-page-header--header-type-1 c-page-header--default
c-page-header--product-list">
<div class="c-page-header__wrap">
<h1 class="c-page-header__title">Từ khóa: {{ $key }}</h1>
</div>
<nav class="c-breadcrumbs">
<ol class="c-breadcrumbs__list c-breadcrumbs__list--default" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<li class="c-breadcrumbs__item  c-breadcrumbs__item--first  " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Home" href="{{asset('')}}"><span itemprop="name">Trang chủ</span></a><!--
--><i class="ip-breadcrumb c-breadcrumbs__separator"><!-- --></i>					<meta itemprop="position" content="1">
</li>
<li class="c-breadcrumbs__item   c-breadcrumbs__item--last " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Shop" href=""><span itemprop="name">{{ $key }}</span></a><meta itemprop="position" content="2">
</li>
</ol>
</nav>
</header>
<div class="woocommerce-notices-wrapper woocommerce-notices-wrapper--ajax woocommerce-notices-wrapper--transition" style="top: 15px; transform: translateY(0px);"></div>
<div class="l-section l-section--container l-section--top-margin l-section--bottom-margin l-section--with-sidebar">
@include('layout.sidebar_pro')
<div class="l-section__content l-section__content--with-sidebar">
<div class=" js-sticky-sidebar-nearby ">
<div class="c-catalog-ordering">
<div class="c-catalog-ordering__col c-catalog-ordering__col--result">
<p class="woocommerce-result-count">
HIỂN THỊ 1-24 TRONG SỐ {{count($product)}} KẾT QUẢ</p>
</div>
<button class="h-cb c-catalog-ordering__filter-show-button js-filter-show-button" type="button">
Filter<i class="ip-filter c-catalog-ordering__filter-ico"></i>
</button>
</div>
<div class="c-product-grid"><div class="c-product-grid__wrap c-product-grid__wrap--4-per-row  c-product-grid__wrap--sidebar ">
<div class="c-product-grid__list c-product-grid__list--4-per-row">
<!-- iteam -->
@foreach($product as $val)
@include('layout.iteamproduct')
@endforeach
<!-- iteam -->
</div>
</div></div>
<nav class="woocommerce-pagination">
	{{$product->links()}}
</nav>
</div>
</div>
</div>
@else
<header class="l-section c-page-header c-page-header--header-type-1 c-page-header--default c-page-header--post">
<div class="c-page-header__wrap"><h1 class="c-page-header__title">Từ khóa: {{$key}}</h1></div>
<nav class="c-breadcrumbs">
<ol class="c-breadcrumbs__list c-breadcrumbs__list--default" itemscope itemtype="http://schema.org/BreadcrumbList">
<li class="c-breadcrumbs__item  c-breadcrumbs__item--first  " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Home" href="{{asset('')}}"><span itemprop="name">Trang chủ</span></a><!----><i class="ip-breadcrumb c-breadcrumbs__separator"><!-- --></i><meta itemprop="position" content="1"> </li> <li class="c-breadcrumbs__item   c-breadcrumbs__item--last " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<span itemprop="name">{{$key}}</span> <meta itemprop="position" content="2"></li>
</ol>
</nav>	</header>
<div class="woocommerce-notices-wrapper"></div>
<div class="c-blog l-section l-section--container l-section--top-margin-80 l-section--bottom-margin  l-section--with-sidebar">
<div class="l-section__content  l-section__content--with-sidebar">
<div class="c-blog-wrap  c-blog-wrap--list   c-blog-wrap--sidebar ">
<div class=" c-blog__list   js-sticky-sidebar-nearby ">
@foreach($news as $val)
<article id="post-142" class="c-post-list c-post-list--standard c-post-list--list c-post-list--sidebar c-post-list--with-thumb c-post-list--post js-post-item post-142 post type-post status-publish format-standard has-post-thumbnail hentry category-cosmetic category-fashion tag-cosmetic tag-trends">
<div class="c-post-list__thumb c-post-list__thumb--standard c-post-list__thumb--list">
<div class="c-post-list__thumb-inner c-post-list__thumb-inner--list">
<a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html">
<img width="760" height="428" src="data/news/300/{{$val->img}}" class="c-post-list__img wp-post-image" alt="" loading="lazy" srcset="data/news/300/{{$val->img}} 760w, data/news/300/{{$val->img}} 460w, data/news/300/{{$val->img}} 920w, data/news/300/{{$val->img}} 258w, data/news/300/{{$val->img}} 516w, data/news/300/{{$val->img}} 1120w" sizes="(max-width: 760px) 100vw, 760px" /></a></div></div>
<div class="c-post-list__wrap c-post-list__wrap--standard c-post-list__wrap--list   c-post-list__wrap--sidebar ">
<div class="c-post-list__meta-date  c-post-list__meta-date--with-thumb   c-post-list__meta-date--sidebar  c-post-list__meta-date--list">
{{$val->date}}</div>
<a class="c-post-list__header-link" href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html"><h2 class="c-post-list__header">{{$val->name}}</h2></a>
<div class="c-post-list__except">
<p>{{$val->detail}}</p>
</div>
<div class="c-post-list__meta-category">
<a class="c-post-list__categories-item-link" href="{{$val->category->slug}}" title="View all posts in Cosmetic" >{{$val->category->name}}</a></div>
<a class="c-button c-button--outline c-post-list__continue"
href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html">Xem thêm</a>
</div>
</article>
@endforeach
</div>
</div>
</div>
@include('layout.sidebar_news')
</div>
@endif
@endsection