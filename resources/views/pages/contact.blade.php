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

<div data-elementor-type="wp-page" data-elementor-id="9" class="elementor elementor-9" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-f995139 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f995139" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-39a8339" data-id="39a8339" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8b2fbe9 elementor-widget elementor-widget-ideapark-page-header" data-id="8b2fbe9" data-element_type="widget" data-widget_type="ideapark-page-header.default">
<div class="elementor-widget-container">
<header
class="l-section c-page-header c-page-header--header-type-1 c-page-header--default
c-page-header--page c-page-header--low"
>

<div class="c-page-header__wrap">
<h1 class="c-page-header__title">Contact</h1>
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
<a itemprop="item" title="Contact" href="index.html"><span
itemprop="name">Contact</span></a>					<meta itemprop="position" content="2">
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-72a0178 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="72a0178" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73dc191" data-id="73dc191" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-d4b88fa elementor-widget elementor-widget-ideapark-tabs" data-id="d4b88fa" data-element_type="widget" data-widget_type="ideapark-tabs.default">
<div class="elementor-widget-container">
<div class="c-ip-tabs js-ip-tabs">

<div class="c-ip-tabs__list">
<div class="c-ip-tabs__item visible active"
id="tab-d4b88fa-1">
<style id="elementor-post-360">.elementor-360 .elementor-element.elementor-element-79e7aa8:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-360 .elementor-element.elementor-element-79e7aa8 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-360 .elementor-element.elementor-element-79e7aa8 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:50px 60px 50px 60px;}.elementor-360 .elementor-element.elementor-element-79e7aa8 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-360 .elementor-element.elementor-element-1b3ba0a .c-ip-heading{text-align:left;color:#000000;font-size:22px;}.elementor-360 .elementor-element.elementor-element-2252f12{margin-top:55px;margin-bottom:0px;}.elementor-360 .elementor-element.elementor-element-3cdd25e .c-ip-heading{text-align:left;font-size:11px;font-weight:normal;text-transform:uppercase;line-height:18px;}.elementor-360 .elementor-element.elementor-element-1a772f4 .c-ip-heading{text-align:left;color:#000000;}.elementor-360 .elementor-element.elementor-element-1a772f4 > .elementor-widget-container{margin:017px 0px 0px 0px;}.elementor-360 .elementor-element.elementor-element-c4777b0 .c-ip-heading{text-align:left;font-size:11px;font-weight:normal;text-transform:uppercase;line-height:18px;}.elementor-360 .elementor-element.elementor-element-182dc73 .c-ip-heading{text-align:left;color:#000000;}.elementor-360 .elementor-element.elementor-element-182dc73 > .elementor-widget-container{margin:017px 0px 0px 0px;}.elementor-360 .elementor-element.elementor-element-89c9294{margin-top:55px;margin-bottom:0px;}.elementor-360 .elementor-element.elementor-element-88fe3ad .c-ip-heading{text-align:left;font-size:11px;font-weight:normal;text-transform:uppercase;line-height:18px;}.elementor-360 .elementor-element.elementor-element-12e7c1e .c-ip-heading{text-align:left;color:#000000;}.elementor-360 .elementor-element.elementor-element-12e7c1e > .elementor-widget-container{margin:017px 0px 0px 0px;}.elementor-360 .elementor-element.elementor-element-eee9e14 .c-ip-heading{text-align:left;font-size:11px;font-weight:normal;text-transform:uppercase;line-height:18px;}.elementor-360 .elementor-element.elementor-element-bd7f840 .c-ip-social__link{color:#000000;}.elementor-360 .elementor-element.elementor-element-bd7f840 .c-ip-social__link:hover{color:#E4C1B1;}.elementor-360 .elementor-element.elementor-element-bd7f840 .c-ip-social{font-size:16px;margin:calc(-20px / 2);}.elementor-360 .elementor-element.elementor-element-bd7f840 .c-ip-social__icon{margin:calc(20px / 2);}.elementor-360 .elementor-element.elementor-element-bd7f840 > .elementor-widget-container{margin:22px 0px 0px 0px;}.elementor-360 .elementor-element.elementor-element-a83c75f iframe{height:500px;}@media(max-width:767px){.elementor-360 .elementor-element.elementor-element-79e7aa8 > .elementor-element-populated{padding:30px 30px 30px 30px;}.elementor-360 .elementor-element.elementor-element-69e23fd > .elementor-element-populated{margin:055px 0px 0px 0px;}.elementor-360 .elementor-element.elementor-element-5b7a298 > .elementor-element-populated{margin:055px 0px 0px 0px;}}@media(max-width:1189px) and (min-width:768px){.elementor-360 .elementor-element.elementor-element-79e7aa8{width:100%;}.elementor-360 .elementor-element.elementor-element-57d6fa3{width:100%;}}</style>						<div class="c-ip-tabs__content">		<div data-elementor-type="wp-post" data-elementor-id="360" class="elementor elementor-360" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-31731fa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="31731fa" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-79e7aa8" data-id="79e7aa8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-1b3ba0a elementor-widget elementor-widget-ideapark-heading" data-id="1b3ba0a" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--medium c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">Liên hệ</span></div>		</div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-2252f12 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2252f12" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a5aad85" data-id="a5aad85" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3cdd25e elementor-widget elementor-widget-ideapark-heading" data-id="3cdd25e" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">Phones</span></div>		</div>
</div>
<div class="elementor-element elementor-element-1a772f4 elementor-widget elementor-widget-ideapark-heading" data-id="1a772f4" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner"><a href="tel:{{$head_setting->hotline}}">{{$head_setting->hotline}}</a><br />
<a href="tel:{{ isset($head_setting->hotline1) ? $head_setting->hotline1 : '' }}">{{ isset($head_setting->hotline1) ? $head_setting->hotline1 : '' }}</a></span></div>		</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-69e23fd" data-id="69e23fd" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-c4777b0 elementor-widget elementor-widget-ideapark-heading" data-id="c4777b0" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">Address</span></div>		</div>
</div>
<div class="elementor-element elementor-element-182dc73 elementor-widget elementor-widget-ideapark-heading" data-id="182dc73" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">{{$head_setting->address}}</span></div>		</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-89c9294 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="89c9294" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6e4913a" data-id="6e4913a" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-88fe3ad elementor-widget elementor-widget-ideapark-heading" data-id="88fe3ad" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">Email</span></div>		</div>
</div>
<div class="elementor-element elementor-element-12e7c1e elementor-widget elementor-widget-ideapark-heading" data-id="12e7c1e" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner"><a href="mailto:{{$head_setting->email}}">{{$head_setting->email}}</a></span></div>		</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5b7a298" data-id="5b7a298" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-eee9e14 elementor-widget elementor-widget-ideapark-heading" data-id="eee9e14" data-element_type="widget" data-widget_type="ideapark-heading.default">
<div class="elementor-widget-container">
<div class="c-ip-heading c-ip-heading--default c-ip-heading--left c-ip-heading--tablet- c-ip-heading--mobile- c-ip-heading--bullet-hide"><span class="c-ip-heading__inner">Social Networks</span></div>		</div>
</div>
<div class="elementor-element elementor-element-bd7f840 elementor-widget elementor-widget-ideapark-social" data-id="bd7f840" data-element_type="widget" data-widget_type="ideapark-social.default">
<div class="elementor-widget-container">
<div class="c-ip-social">				<a href="#" class="c-ip-social__link"><i
class="ip-facebook c-ip-social__icon c-ip-social__icon--facebook">
<!-- --></i></a>
<a href="#" class="c-ip-social__link"><i
class="ip-instagram c-ip-social__icon c-ip-social__icon--instagram">
<!-- --></i></a>
<a href="#" class="c-ip-social__link"><i
class="ip-twitter c-ip-social__icon c-ip-social__icon--twitter">
<!-- --></i></a>
<a href="#" class="c-ip-social__link"><i
class="ip-youtube c-ip-social__icon c-ip-social__icon--youtube">
<!-- --></i></a>
</div>		</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-57d6fa3" data-id="57d6fa3" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-a83c75f elementor-widget elementor-widget-google_maps" data-id="a83c75f" data-element_type="widget" data-widget_type="google_maps.default">
<div class="elementor-widget-container">
<div class="elementor-custom-embed">
{!! $head_setting->maps !!}
</div>		</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>					</div>



</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>


@endsection