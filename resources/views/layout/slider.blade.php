<section class="elementor-section elementor-top-section elementor-element elementor-element-4012b7ba elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4012b7ba" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3cc5595d" data-id="3cc5595d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3b9ed65e elementor-widget elementor-widget-ideapark-slider" data-id="3b9ed65e" data-element_type="widget" data-widget_type="ideapark-slider.default">
<div class="elementor-widget-container">
<div class="c-ip-slider   c-ip-slider--header-type-2 c-ip-slider--full js-slider">
<div class="c-ip-slider__list c-ip-slider__list--full js-slider-carousel h-carousel h-carousel--big-dots h-carousel--inner h-carousel--hover  c-ip-slider__list--dots  h-carousel--dot-animated  " data-autoplay="yes" data-animation="owl-fade-scale" data-animation-timeout="5000" data-widget-id="3b9ed65e"> 
<!-- iteam -->
@foreach($slider as $val)
<div class="c-ip-slider__item   c-ip-slider__item--full elementor-repeater-item-e9bb087" data-dot="&lt;svg role=&quot;button&quot; data-index=&quot;2&quot; class=&quot;c-ip-slider__circle&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; preserveAspectRatio=&quot;xMidYMid&quot;&gt;&lt;path d=&quot;M0,0 &quot; id=&quot;arc-3b9ed65e-2&quot; fill=&quot;none&quot; stroke=&quot;inherit&quot; stroke-width=&quot;2&quot;/&gt;&lt;/svg&gt;&lt;button role=&quot;button&quot; class=&quot;h-cb c-ip-slider__dot&quot; &gt;&lt;/button&gt;" data-index="2"> <img class="c-ip-slider__image c-ip-slider__image--full c-ip-slider__image--desktop" width="3360" height="1738" src="data/home/{{ isset($val->img) ? $val->img : '' }}" sizes="(max-width: 3360px) 100vw, 3360px" alt="back-img-3@2x" loading="lazy" data-index="2"/><img class="c-ip-slider__image c-ip-slider__image--full c-ip-slider__image--mobile" width="750" height="1500" src="{{ isset($val->imgmobile) ? $val->imgmobile : '$val->img' }}"  sizes="(max-width: 750px) 100vw, 750px" alt="luchiana-1930841722.jpg" loading="lazy" data-index="2"/><div class="c-ip-slider__wrap c-ip-slider__wrap--full">
<div class="c-ip-slider__title c-ip-slider__title--full"><span style="font-size: {{ isset($val->titlesize) ? $val->titlesize : '' }}px" class="c-ip-slider__title-inner">{{ isset($val->title) ? $val->title : '' }}</span></div><div class="c-ip-slider__description c-ip-slider__description--full" style="font-size: {{ isset($val->textsize) ? $val->textsize : '' }}px">{{ isset($val->text) ? $val->text : '' }}</div><a href="{{ isset($val->link) ? $val->link : '' }}" class="c-button c-button--default c-ip-slider__button c-ip-slider__button--full" style="background-color: #{{ isset($val->colorbutton) ? $val->colorbutton : '' }}; border-color: #{{ isset($val->colorbutton) ? $val->colorbutton : '' }}">{{ isset($val->button) ? $val->button : '' }}</a></div>
</div>
@endforeach
<!-- iteam -->
</div>

<svg class="c-ip-slider__scroll c-ip-slider__scroll--full"
xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
text-rendering="geometricPrecision" width="26" height="33">
<style>
@keyframes e2xlmpnkgrry3_to__to { 0% { transform:translate(0, 0); animation-timing-function: cubic-bezier(.54, .01, .46, 1.005) } 46.666667% { transform:translate(0, 6px); animation-timing-function: cubic-bezier(.54, .01, .46, 1.005) } to { transform: translate(0, 0) } }
</style>

<rect id="e2xlmpnkgrry2" width="24" height="31" rx="12" ry="12" transform="translate(1 1)" fill="none" stroke="inherit" stroke-width="1.8" stroke-opacity=".2"/> <g style="animation:e2xlmpnkgrry3_to__to 1500ms linear infinite normal forwards"> <g id="e2xlmpnkgrry3" fill="none" stroke="inherit" stroke-linecap="round"> <path id="e2xlmpnkgrry4" d="M16 17l-3 3-3-3"/> <path id="e2xlmpnkgrry5" d="M13 19v-7"/> </g> </g> </svg>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>