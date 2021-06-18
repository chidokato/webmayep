@extends('layout.index')

@section('title'){{ isset($articles->title) ? $articles->title : $articles->name }}@endsection
@section('description'){{$articles->description}}@endsection
@section('keywords'){{$articles->keywords}}@endsection
@section('robots'){{ $articles->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$articles->category->slug.'/'.$articles->slug.'.html'}}@endsection

@section('content')
<main class="container">
  <div class="row">
    <div class="col-md-8">
      <article class="blog-post">
        <h1 class="blog-post-title">{{$articles->name}}</h1>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">{{$articles->user->name}}</a></p>

        {!! $articles->content !!}
        
      </article>
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