@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection

@section('content')
<form class="search" action="search" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}" />
  <select name="mebe">
    <option value="">-Mẹ / Bé-</option>
    @foreach($mebe as $val)
    <option value="{{$val->sku}}">{{$val->name}}</option>
    @endforeach
  </select>
  <select>
    <option value="">-Phân loại-</option>
    @foreach($phanloai as $val)
    <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
  </select>
  <select>
    <option value="">-Màu sắc-</option>
    @foreach($mausac as $val)
    <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
  </select>
  <select>
    <option value="">-Size chân-</option>
    @foreach($size as $val)
    <option value="{{$val->id}}">{{$val->name}}</option>
    @endforeach
  </select>
  <select>
    <option value="">-Giá-</option>
    <option value="1">Tăng dần</option>
    <option value="2">Giảm dần</option>
  </select>
  <button type="submit">Tìm kiếm</button>
</form>
<div class="container">
<main>
  <div class="album bg-light infinite-scroll">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-6 homes">
        @foreach($articles as $val)
        <div class="col">
          <div class="card shadow-sm">
            <img src="data/product/300/{{$val->img}}">
            <div class="card-body">
              <p class="card-text">{{$val->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">{{date('d/m/Y',strtotime($val->updated_at))}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{$articles->links()}}
      </div>
  </div>
</main>
</div>
@endsection
