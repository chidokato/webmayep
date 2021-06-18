<div class="c-product-grid__item c-product-grid__item--4-per-row c-product-grid__item--normal product type-product post-420 status-publish instock product_cat-makeup has-post-thumbnail sale featured shipping-taxable product-type-grouped">
<div class="c-product-grid__badges c-badge__list">
<span class="c-badge c-badge--featured">{{ isset($val->cat_id) ? $val->category->name : '' }}</span>
@if(isset($val->pricesale))
<!-- <span class="c-badge c-badge--sale">{{ round((($val->price-$val->pricesale)/$val->price)*100 , 2) }}%</span>	 -->
@endif
</div>
<div class="c-product-grid__thumb-wrap">
<a href="{{ isset($val->cat_id) ? $val->category->slug : '' }}/{{ isset($val->slug) ? $val->slug : '' }}.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
<img width="260" height="230" src="data/product/460/{{ isset($val->img) ? $val->img : 'demo.jpg' }}" class="c-product-grid__thumb c-product-grid__thumb--cover" alt="" sizes="(max-width: 260px) 100vw, 260px" />
</a>
<div class="c-product-grid__thumb-button-list">
<button class="h-cb c-product-grid__thumb-button" id="add_cart" type="button" >
	<i class="ip-cart c-header__cart-icon"></i>
</button>
</div>
</div>
<div class="c-product-grid__details">
<div class="c-product-grid__title-wrap">
<a href="{{ isset($val->cat_id) ? $val->category->slug : '' }}/{{ isset($val->slug) ? $val->slug : '' }}.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
<h2 class="woocommerce-loop-product__title">{{ isset($val->name) ? $val->name : '' }}</h2>
</a>
<!-- div class="c-product-grid__short-desc">
<p>A hyper-saturated, water-resistant, liquid eyeliner.</p>
</div -->
</div>
<div class="c-product-grid__price-wrap">
<span class="price">
@if(isset($val->pricesale))
<span class="woocommerce-Price-amount amount"><bdi>{{ isset($val->pricesale) ? number_format($val->pricesale) : '' }}</bdi></span>
<span class="woocommerce-Price-amount amount"><bdi class="pricesale">{{ isset($val->price) ? number_format($val->price) : '' }}₫</bdi></span>
@else
<span class="woocommerce-Price-amount amount"><bdi>{{ isset($val->price) ? number_format($val->price) : '' }}₫</bdi></span>
@endif
</span>
</div>
</div>
</div>