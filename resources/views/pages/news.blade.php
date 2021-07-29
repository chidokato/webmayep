@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')
<section id="body">
  <div class="product-page" class="page-body">
    <div class="breadcrumb">
            <div class="uk-container uk-container-center customer-container">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li>{{$category->name}}</li>
                </ul>
            </div>
        </div>
    <div class="uk-container uk-container-center customer-container">
      <div class="uk-grid ">
          <div class="uk-width-large-3-4">
              <section class="artcatalogue">
                  <section class="panel-body">
                      <ul class="uk-list list-article">
                        @foreach($articles as $val)
                        <li class="category-news">
                          <article class="article uk-clearfix">
                              <div class="thumb img-flash">
                                  <a class="image img-cover" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/news/300/{{$val->img}}" alt=""></a>
                              </div>
                              <div class="info">
                                  <h2 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h2>
                                  <div class="meta">
                                      <i class="fa fa-user"></i> {{$val->user->name}}
                                      <i class="fa fa-clock-o"></i> {{date('d/m/Y',strtotime($val->created_at))}}
                                      <i class="fa fa-folder-open"></i> {{$val->category->name}}
                                      <i class="fa fa-eye"></i> {{$val->hits}} view
                                  </div>
                                  <div class="description lib-line-4">{{$val->detail}}</div>
                              </div>
                          </article><!-- .article-1 -->
                        </li>
                        @endforeach
                      </ul><!-- .list-article -->
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
  </div><!-- .uk-container -->
</section>

@include('layout.bottom')

@endsection