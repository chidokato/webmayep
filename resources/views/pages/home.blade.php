@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')
<section class="main-slide">
  <div class="uk-slidenav-position slide-show" data-uk-slideshow="{autoplay: true, autoplayInterval: 7500, animation: 'random-fx'}">
    <ul class="uk-slideshow" style="height: 500px;">
      @foreach($slider as $key => $val)
      <li data-slideshow-slide="img" aria-hidden="false" class="{{ $key==0 ? 'uk-active' : '' }}" style="height: 500px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(data/themes/{{$val->img}});"></div><img src="data/themes/{{$val->img}}" alt="" style="width: 100%; height: auto; opacity: 0;"></li>
      @endforeach
    </ul>
    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
      @foreach($slider as $key => $val)
      <li data-uk-slideshow-item="{{$key}}" class="{{ $key==0 ? 'uk-active' : '' }}"><a href="#"></a></li>
      @endforeach
    </ul>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
  </div>
</section>

<section class="section6 section-home">
    <div class="uk-container uk-container-center">
        <header class="panel-head homes-tit-1">
            <h2>SECTION 6 </h2>
            <a href="">Xem thêm ></a>
        </header>
        <div class="panel-body">
            <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-article" data-uk-grid-match="{target:'.title'}" style="min-width: 3660px; min-height: 320px; transform: translateX(-1525px);">
                        <li class="iteam">
                            <div class="thumb">
                                <a class="image img-cover img-shine" href="detail-product.php"><img src="data/3.jpg" alt="KHAI SƠN HILL"></a>
                            </div>
                            <div class="infor">
                                <h3 class="title"><a href="detail-product.php">Newtatco Xuân Đỉnh</a></h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .slider -->
        </div><!-- .panel-body -->
    </div>
</section>


@endsection
