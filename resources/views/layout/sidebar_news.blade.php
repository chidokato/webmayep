<div class="l-section__sidebar l-section__sidebar--right">
<div class="c-post-sidebar-wrap">
<aside id="sidebar"
class="c-sidebar c-post-sidebar  js-sticky-sidebar ">
<aside id="search-3" class="widget widget_search"><div class="widget-title">Tìm kiếm</div><div class="c-search-form">
<form method="POST" class="js-search-form-entry" action="search/news">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="c-search-form__wrap">
<label class="c-search-form__label">
<input class="c-form__input c-form__input--full" type="text" placeholder="Key" name="key" />
</label>
<button type="submit" class="c-button c-search-form__button"><i class="ip-search c-search-form__svg"></i></button>
</div>
</form>
</div>
</aside>
<aside id="ideapark_latest_posts_widget-3" class="widget custom-lps-widget"><div class="widget-title">Xem nhiều nhất</div><ul class="c-lp-widget">
@foreach($news_hits as $val)
<li class="c-lp-widget__item c-lp-widget__item--thumb">
<div class="c-lp-widget__thumb">
<a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" rel="bookmark">
<img width="115" height="115" src="data/news/120/{{$val->img}}" class="c-lp-widget__thumb-img wp-post-image" alt="" loading="lazy" srcset="data/news/80/{{$val->img}} 115w, data/news/120/{{$val->img}} 70w" sizes="(max-width: 115px) 100vw, 115px" /></a>
</div>
<div class="c-lp-widget__content">
<a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" rel="bookmark">
<div class="c-lp-widget__title">{{$val->name}}</div>
</a>
<!-- <div class="c-lp-widget__date">October 20, 2020</div> -->
</div>
</li>
@endforeach
</ul>
</aside>

</aside>
</div>
</div>