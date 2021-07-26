@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')
<section class="main-slide">
  <div class="uk-slidenav-position slide-show" data-uk-slideshow="{autoplay: true, autoplayInterval: 7500, animation: 'random-fx'}">
    <ul class="uk-slideshow" style="height: 565px;">
      <li data-slideshow-slide="img" aria-hidden="false" class="uk-active" style="height: 565px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(data/banner1.jpg);"></div><img src="data/banner1.jpg" alt="" style="width: 100%; height: auto; opacity: 0;"></li>
      <li data-slideshow-slide="img" aria-hidden="true" style="height: 565px;" class=""><div class="uk-cover-background uk-position-cover" style="background-image: url(data/banner2.jpg);"></div><img src="data/banner2.jpg" alt="" style="width: 100%; height: auto; opacity: 0;"></li>
    </ul>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
    <li data-uk-slideshow-item="0" class="uk-active"><a href="#"></a></li>
    <li data-uk-slideshow-item="1" class=""><a href="#"></a></li>
  </ul>
  </div>
</section>



@endsection
