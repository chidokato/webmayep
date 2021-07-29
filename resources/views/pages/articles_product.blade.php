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
    	<section class="prd-detail">
			<section class="panel-body">
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-large-3-5">
						<div class="prd-gallerys">
							<div class="slider">
								<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
									<li data-thumb="data/product/{{$articles->img}}"> 
										<a class="image img-cover" href="data/product/{{$articles->img}}" title="{{$articles->name}}" data-uk-lightbox="{group:'gallerys'}">
											<img src="data/product/{{$articles->img}}" />
										</a>
									 </li>
					 				@foreach($articles->images as $val)					 									 
									<li data-thumb="data/product/80/{{$val->img}}"> 
										<a class="image img-cover" href="data/imgdetail/{{$val->img}}" title="" data-uk-lightbox="{group:'gallerys'}">
											<img src="data/product/{{$val->img}}" />
										</a>
									 </li>
								  	@endforeach
									</ul>
							</div>
						</div>
						<div class="artcatalogue">
							<div class="panel-body">
								<div class="detail-content">
									{!! $articles->content !!}
								</div>
							</div><!-- .panel-body -->
						</div>

					</div>
					<div class="uk-width-large-2-5" >
						<div class="prd-desc sticky">
							<h1 class="prd-title"><span>{{$articles->name}}</span></h1>
							<div class="description">
								{!! $articles->detail !!}
							</div>
							<div class="call-groups">
								<a class="btn uk-flex uk-flex-middle uk-flex-space-between" href="tel:0166.7272.072" title="Showroom 1">
									<div class="text">
										<span class="title">Gọi ngay</span>
										<span class="subtitle">Kỹ thuật</span>
									</div>
									<span class="number">0911388799</span>
								</a>

								<a class="btn uk-flex uk-flex-middle uk-flex-space-between" href="tel:0911388799" title="Showroom 2">
									<div class="text">
										<span class="title">Gọi ngay</span>
										<span class="subtitle">Kinh doanh</span>
									</div>
									<span class="number">0911388799</span>
								</a>
							</div>
							<!-- <div class="prd-commitment">
								<ul class="uk-grid uk-grid-small uk-grid-width-1-3">
									<li>
										<div class="box">
											<span class="icon"><img src="data/themes/camket.png" alt="" /></span>
											<span class="value">Cam kết <br> chất lượng</span>
										</div>
									</li>
									<li>
										<div class="box">
											<span class="icon"><img src="data/themes/giaohangmienphi.png" alt="" /></span>
											<span class="value">Giao hàng <br> miễn phí</span>
										</div>
									</li>
									<li>
										<div class="box">
											<span class="icon"><img src="data/themes/thanhtoan.png" alt="" /></span>
											<span class="value">Thanh toán <br> tại nhà</span>
										</div>
									</li>
								</ul>
							</div> -->
							<div class="prd-contact uk-flex uk-flex-middle">
								<a target="_blank" class="btn btn-map" href="" title="Chỉ đường">Chỉ đường</a>
								<a target="_blank" class="btn btn-contact" href="lien-he" title="Liên hệ">Liên hệ</a>
							</div>
						</div><!-- .prd-desc -->
					</div>
				</div><!-- .uk-grid -->
			</section><!-- .panel-body -->
		</section><!-- .prd-detail -->
    </div>
    @include('layout.bottom')
  </div><!-- .uk-container -->
</section>


<script>
	$(document).ready(function() {
	var wd_width = $(window).width();
	if(wd_width > 600) {
		$("#content-slider").lightSlider({
			loop:true,
			keyPress:true
		});
		$('#image-gallery').lightSlider({
			gallery:true,
			item:1,
			thumbItem:5,
			slideMargin: 0,
			speed:500,
			auto:true,
			loop:true,
			onSliderLoad: function() {
				$('#image-gallery').removeClass('cS-hidden');
			}  
		});
	}else {
		$("#content-slider").lightSlider({
			loop:true,
			keyPress:true
		});
		$('#image-gallery').lightSlider({
			gallery:true,
			item: 1,
			thumbItem: 3,
			slideMargin: 0,
			speed:500,
			auto:true,
			loop:true,
			onSliderLoad: function() {
				$('#image-gallery').removeClass('cS-hidden');
			}  
		});
	}

	});
</script>


@endsection