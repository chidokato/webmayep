<div class="l-section__sidebar">
<div class="c-sidebar c-shop-sidebar js-shop-sidebar js-sticky-sidebar" style="">
<div class="c-shop-sidebar__shadow"></div>
<div class="c-shop-sidebar__wrap js-shop-sidebar-wrap">
<div class="c-shop-sidebar__buttons">
<button type="button" class="h-cb h-cb--svg c-shop-sidebar__close js-filter-close-button"><i class="ip-close-small c-header__menu-close-svg"></i></button>
</div>
<div class="c-shop-sidebar__content c-shop-sidebar__content--desktop">
<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
<div class="widget-title">Tìm kiếm</div>
<form method="POST" class="js-search-form-entry" action="search/product">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="c-search-form__wrap">
<label class="c-search-form__label">
<input class="c-form__input c-form__input--full" type="text" placeholder="Key" name="key" />
</label>
<button type="submit" class="c-button c-search-form__button"><i class="ip-search c-search-form__svg"></i></button>
</div>
</form>
</aside>
<?php use App\category; ?>
@foreach($shop_searchs as $shop_search)
<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
<div class="widget-title">{{$shop_search->name}}</div>
<?php $sub_category = category::where('parent', $shop_search->id)->orderBy('view','asc')->get(); ?>
<ul class="product-categories">
@foreach($sub_category as $sub_cat)
<?php $sub2_category = category::where('parent', $sub_cat->id)->orderBy('view','asc')->get(); ?>
<li class="cat-item cat-item-50 cat-parent"><a href="{{$sub_cat->slug}}">{{$sub_cat->name}}</a>
<ul class="children">
@foreach($sub2_category as $sub2_cat)
<li class="cat-item cat-item-49"><a href="{{$sub2_cat->slug}}">{{$sub2_cat->name}}</a></li>
@endforeach
</ul>
</li>
@endforeach
</ul>
</aside>
@endforeach
</div>
<!-- mobile -->
<div class="c-shop-sidebar__content c-shop-sidebar__content--mobile js-shop-sidebar-content">
<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
<div class="widget-title">Sản phẩm</div><ul class="product-categories">
<li class="cat-item cat-item-67"><a href="../product-category/fragrance/index.html">Fragrance</a></li>
<li class="cat-item cat-item-50 cat-parent"><a href="../product-category/makeup/index.html">Makeup</a>
	<ul class="children">
	<li class="cat-item cat-item-49"><a href="../product-category/makeup/lips/index.html">Lips Gloss</a></li>
	</ul>
</li>
</ul>
</aside>
</div>
<!-- mobile -->
</div>
</div>
</div>