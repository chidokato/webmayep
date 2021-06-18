@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')
<main class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="row infinite-scroll">
        @foreach($articles as $val)
        <div class="col-md-12">
          <div class="row g-0 mb-4">
            <div class="col-auto d-lg-block">
              <img style="width: 88px" src="data/news/80/{{$val->img}}">
            </div>
            <div class="col d-flex flex-column position-static iteam">
              <h2 class="mb-0 title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h2>
              <div class="link text-muted">
                <span>{{$val->user->name}}</span>
                <span>{{date('d/m/Y',strtotime($val->created_at))}}</span>
                <span>{{$val->hits}}</span>
              </div>
              <p class="card-text mb-auto description">{{$val->detail}}</p>
            </div>
          </div>
        </div>
        @endforeach
        {{$articles->links()}}
      </div>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 4rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection