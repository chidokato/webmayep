@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['desc']; ?>
@endsection
@section('keywords')
<?php echo $category['key']; ?>
@endsection
@section('robots')
<?php if ( $category['robot'] == 0 ) echo "index, follow";  elseif ( $category['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$category['slug']; ?>
@endsection

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-ae248c4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ae248c4" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b92c4e" data-id="6b92c4e" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-b369bce elementor-widget elementor-widget-ideapark-page-header" data-id="b369bce" data-element_type="widget" data-widget_type="ideapark-page-header.default">
<div class="elementor-widget-container">
<header
class="l-section c-page-header c-page-header--header-type-1 c-page-header--default
c-page-header--page c-page-header--high c-page-header--custom-bg"
style="background-color:#bebfc1;background-image:url(../wp-content/uploads/2020/10/luchiana-2058254205.jpg);background-size: cover; background-repeat: no-repeat; background-position: center;">

<div class="c-page-header__wrap">
<h1 class="c-page-header__title">About us</h1>
</div>

<nav class="c-breadcrumbs">
<ol class="c-breadcrumbs__list c-breadcrumbs__list--default" itemscope
itemtype="http://schema.org/BreadcrumbList">
<li class="c-breadcrumbs__item  c-breadcrumbs__item--first  "
itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Home" href="../index.html"><span
itemprop="name">Home</span></a><!--
--><i class="ip-breadcrumb c-breadcrumbs__separator"><!-- --></i>					<meta itemprop="position" content="1">
</li>
<li class="c-breadcrumbs__item   c-breadcrumbs__item--last "
itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" title="About us" href="index.html"><span
itemprop="name">About us</span></a>					<meta itemprop="position" content="2">
</li>
</ol>
</nav>	</header>

<div class="woocommerce-notices-wrapper">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-f7b080a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f7b080a" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-484697d" data-id="484697d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">


<section class="elementor-section elementor-inner-section elementor-element elementor-element-2943bc4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2943bc4" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="c-post__content h-clearfix entry-content  entry-content--sidebar ">
{!! $category->content !!}
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>

<style type="text/css">
.entry-content h2{font-size: 22px;margin-top: 0px;margin-bottom: 0px;}
.entry-content p{text-align: justify;}
</style>

</div>
</div>
</div>

@endsection