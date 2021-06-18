@extends('layout.index')


@section('content')
<header class="l-section c-page-header c-page-header--header-type-1 c-page-header--default c-page-header--post">
<div class="c-page-header__wrap"><h1 class="c-page-header__title">{{ isset($singlenews->name) ? $singlenews->name : '' }}</h1></div>
<nav class="c-breadcrumbs">
<ol class="c-breadcrumbs__list c-breadcrumbs__list--default" itemscope itemtype="http://schema.org/BreadcrumbList">
<li class="c-breadcrumbs__item  c-breadcrumbs__item--first  " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<a itemprop="item" title="Home" href="{{asset('')}}"><span itemprop="name">Trang chủ</span></a><!----><i class="ip-breadcrumb c-breadcrumbs__separator"><!-- --></i><meta itemprop="position" content="1"> </li> <li class="c-breadcrumbs__item   c-breadcrumbs__item--last " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
<span itemprop="name">{{ isset($singlenews->name) ? $singlenews->name : '' }}</span> <meta itemprop="position" content="2"></li>
</ol>
</nav>	</header>
<div class="woocommerce-notices-wrapper"></div>
<div class="c-blog l-section l-section--container l-section--top-margin-80 l-section--bottom-margin  l-section--with-sidebar">
<div class="l-section__content l-section__content--with-sidebar">
<div class="js-sticky-sidebar-nearby">					
<article id="post-142" class="c-post c-post--standard c-post--sidebar post-142 post type-post status-publish format-standard has-post-thumbnail hentry category-cosmetic category-fashion tag-cosmetic tag-trends">
<div class="c-post__wrap  c-post__wrap--thumb   c-post__wrap--sidebar ">
<div class="c-post__inner">
<ul class="c-page__meta c-page__meta--sidebar">
	<li class="c-page__meta-item">By<a href="https://parkofideas.com/luchiana/demo" title="Visit Luchiana’s website" rel="author external">Luchiana</a>		</li>
<li class="c-page__meta-item">
October 20, 2020		</li>
<li class="c-page__meta-item">
<a class="c-page__categories-item-link" href="../../../../category/cosmetic/index.html" title="View all posts in Cosmetic">Cosmetic</a>, <a class="c-page__categories-item-link" href="../../../../category/fashion/index.html" title="View all posts in Fashion">Fashion</a>		</li>

<li class="c-page__meta-item">
Comments:2			</li>
</ul>			

<div class="c-post__content h-clearfix entry-content  entry-content--sidebar ">
{!! $singlenews->content !!}
</div>

<style type="text/css">
	.entry-content h2{font-size: 22px;margin-top: 0px;margin-bottom: 0px;}
	.entry-content p{text-align: justify;}
</style>



<div class="c-post__bottom"><div class="c-post__tags">
<a href="../../../../tag/cosmetic/index.html" rel="tag">cosmetic</a><span class="h-bullet"></span><a href="../../../../tag/trends/index.html" rel="tag">trends</a>					</div>
<div class="c-post__share">
<div class="c-post__bottom-title">Share post:</div>
<div class="c-post-share">
<a class="c-post-share__link" target="_blank" href="http://www.facebook.com/sharer.php?u=https://parkofideas.com/luchiana/demo/2020/10/20/new-trends-2020/" title="Share on Facebook"><i class="ip-facebook c-post-share__icon c-post-share__icon--facebook"></i></a><a class="c-post-share__link" target="_blank" href="http://twitter.com/share?url=https://parkofideas.com/luchiana/demo/2020/10/20/new-trends-2020/" title="Share on Twitter"><i class="ip-twitter c-post-share__icon c-post-share__icon--twitter"></i></a><a class="c-post-share__link" target="_blank" href="http://pinterest.com/pin/create/button/?url=https://parkofideas.com/luchiana/demo/2020/10/20/new-trends-2020/&amp;media=https://parkofideas.com/luchiana/demo/wp-content/uploads/2020/10/luchiana-1959487418.jpg&amp;description=New+Trends+in+2020" title="Pin on Pinterest"><i class="ip-pinterest c-post-share__icon c-post-share__icon--pinterest"></i></a><a class="c-post-share__link" target="_blank" href="whatsapp://send?text=https://parkofideas.com/luchiana/demo/2020/10/20/new-trends-2020/" title="Share on Whatsapp" data-action="share/whatsapp/share"><i class="ip-whatsapp c-post-share__icon c-post-share__icon--whatsapp"></i></a>	</div>					</div></div>					</div>
</div>
</article>
</div></div>
@include('layout.sidebar_news')
</div>


@endsection