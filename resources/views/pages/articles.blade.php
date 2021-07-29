@extends('layout.index')

@section('title'){{ isset($articles->title) ? $articles->title : $articles->name }}@endsection
@section('description'){{$articles->description}}@endsection
@section('keywords'){{$articles->keywords}}@endsection
@section('robots'){{ $articles->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$articles->category->slug.'/'.$articles->slug.'.html'}}@endsection

@section('content')
<section id="body">
  <div class="product-page" class="page-body">
    <div class="breadcrumb">
            <div class="uk-container uk-container-center customer-container">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="https://duyvillas.com/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li>Đất Nền</li>
                </ul>
            </div>
        </div>
    <div class="uk-container uk-container-center customer-container">
      <div class="uk-grid ">
          <div class="uk-width-large-3-4">
              <section class="artcatalogue">
                    <header class="panel-head">
                        <h1 class="heading-2"><span>{{$articles->name}}</span></h1>
                    </header>
                    <section class="panel-body">
                        <div class="detail-content">
                            {!! $articles->content !!}
                        </div>
                    </section><!-- .panel-body -->
                </section>
          </div><!-- .uk-width-larg-3-4 -->
          <div class="uk-width-large-1-4 uk-visible-large">
            <aside class="aside">
                @include('layout.sidebar') 
              </aside>
          </div>
      </div>
      
    </div>
    @include('layout.bottom')
  </div><!-- .uk-container -->
</section>
@endsection