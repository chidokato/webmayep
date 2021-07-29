@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')
<section class="main-slide">
    <div class="uk-container uk-container-center">
        <div class="uk-slidenav-position slide-show" data-uk-slideshow="{autoplay: true, autoplayInterval: 3500, animation: 'random-fx'}">
            <ul class="uk-slideshow">
              @foreach($slider as $key => $val)
              <li data-slideshow-slide="img" aria-hidden="false" class="{{ $key==0 ? 'uk-active' : '' }}"><div class="uk-cover-background uk-position-cover" style="background-image: url(data/themes/{{$val->img}});"></div><img src="data/themes/{{$val->img}}" alt=""></li>
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
    </div>
</section>

<section class="section6 section-home">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a href="" title="Tin tức">DỰ ÁN TRIỂN KHAI</a></h2>
        </header>
        <div class="panel-body">
            <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                <div class="uk-slider-container">
                    <ul class="border_radius uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-article" data-uk-grid-match="{target:'.title'}" style="min-width: 3660px; min-height: 320px; transform: translateX(-1525px);">
                        @foreach($articles as $val)
                            @include('layout.iteamproduct')
                        @endforeach
                    </ul>
                </div>
            </div><!-- .slider -->
        </div><!-- .panel-body -->
    </div>
</section>

<section class="section3 section-home">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a href="san-pham" title="Tin tức">SẢN PHẨM </a></h2>
        </header>
        <div class="panel-body">
            <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-article" data-uk-grid-match="{target:'.title'}" style="min-width: 3660px; min-height: 320px; transform: translateX(-1525px);">
                        @foreach($articles as $val)
                            @include('layout.iteamproduct')
                        @endforeach
                    </ul>
                </div>
            </div><!-- .slider -->
        </div><!-- .panel-body -->
    </div>
</section>

<section class="bannerhomes" style="background: url(data/themes/{{$bannerhomes->img}});">
    <p>{{$bannerhomes->name}}</p>
</section>

<section class="section4 homepage-featured-news">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a href="tin-tuc" title="Tin tức">TIN TỨC</a></h2>
        </header>
        <section class="panel-body">
            <ul class="uk-grid lib-grid-20 uk-grid-width-large-1-2 list-article">
                @foreach($articles_news as $val)
                <li>
                    <article class="article uk-clearfix">
                        <div class="thumb">
                            <a class="image img-cover img-zoomin" href="{{$val->category->slug}}/{{$val->slug}}" ><img style="height: 100%;" src="data/news/300/{{$val->img}}" alt=""></a>
                        </div>
                        <div class="infor" style="background: none;">
                            <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}" >{{$val->name}}</a></h3>
                            <div class="meta"><i class="fa fa-user">{{$val->user->name}}</i> <i class="fa fa-clock-o">06/24/2021</i> <i class="fa fa-eye">112 view</i></div>
                            <div class="description">Xây dựng kế hoạch và ngân sách phát triển văn hóa doanh nghiệp, đảm bảo bản sắc của hệ Mai Việt Land theo định hướng của Lãnh đạo Tổ chức triển khai các chương trình, hoạt động, sự kiện phát triển văn hóa doanh nghiệp theo kế hoạch được phê duyệt</div>
                            <div class="viewmore"><a href="" title="Xem thêm">Xem thêm <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </article>
                </li>
                @endforeach
            </ul>
        </section>
    </div>
</section>

@include('layout.bottom')


@endsection
