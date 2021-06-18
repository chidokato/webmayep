@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')
<header class="l-section c-page-header c-page-header--header-type-1 c-page-header--default
c-page-header--product-list">
<div class="c-page-header__wrap">
<h1 class="c-page-header__title">{{ isset($category->name) ? $category->name : '' }}</h1>
</div>
<nav class="c-breadcrumbs">
<ol class="c-breadcrumbs__list c-breadcrumbs__list--default" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<li class="c-breadcrumbs__item  c-breadcrumbs__item--first  " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Home" href="{{asset('')}}"><span itemprop="name">Trang chủ</span></a>
<i class="ip-breadcrumb c-breadcrumbs__separator"></i><meta itemprop="position" content="1">
</li>
<li class="c-breadcrumbs__item   c-breadcrumbs__item--last " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Shop" href="{{ isset($category->slug) ? $category->slug : '' }}"><span itemprop="name">{{ isset($category->name) ? $category->name : '' }}</span></a><meta itemprop="position" content="2">
</li>
</ol>
</nav>
</header>
<div class="woocommerce-notices-wrapper woocommerce-notices-wrapper--ajax woocommerce-notices-wrapper--transition" style="top: 15px; transform: translateY(0px);"></div>
<div class="l-section l-section--container l-section--top-margin l-section--bottom-margin l-section--with-sidebar">
<div class="l-section__content l-section__content--with-sidebar">
<div class=" js-sticky-sidebar-nearby ">
<div class="c-catalog-ordering">
<div class="c-catalog-ordering__col c-catalog-ordering__col--result">
<p class="woocommerce-result-count">
HIỂN THỊ 1-12 TRONG SỐ {{count($product)}} KẾT QUẢ</p>
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


@endsection