@extends('layout.index')

@section('title'){{ isset($data->title) ? $data->title : $data->name }}@endsection
@section('description'){{$data->description}}@endsection
@section('keywords'){{$data->keywords}}@endsection
@section('robots'){{ $data->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$data->slug}}@endsection

@section('content')
<div class="breadcrumb">
    <div class="uk-container uk-container-center">
        <ul class="uk-breadcrumb">
            <li><a href="{{asset('')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="uk-active"><a href="{{$data->slug}}">{{$data->name}}</a></li>
        </ul>
    </div>
</div>

<div class="uk-container uk-container-center">
    <div class="uk-grid ">
        <div class="uk-width-large-2-4">
            <article class="article detail-content">
                
            </article><!-- .article -->
            <div class="hd-search header-search">
                <form action="" method="" class="uk-form form">
                    <input type="text" name="name" class="uk-width-1-1 input-text" placeholder="Họ &amp; Tên ...">
                    <br>
                    <input type="text" name="tel" class="uk-width-1-1 input-text" placeholder="Số điện thoại ...">
                    <br>
                    <input type="text" name="email" class="uk-width-1-1 input-text" placeholder="Địa chỉ email...">
                    <br>
                    <textarea name="note" style="margin: 0px; width: 414px; height: 105px;" class="uk-width-1-1 input-text keyword" placeholder="Ghi chú"></textarea>
                    <br>
                    <input style="background-color: red; border: none; color: #fff; padding: 7px 15px;" type="submit" name="btnsubmit" class="btnsubmit" value="GỬI ĐI">

                </form>
                <div class="searchResult"></div>
            </div>
        </div><!-- .uk-width-larg-3-4 -->
        <div class="uk-width-large-2-4">
			<iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5266.983083486075!2d105.78811344351132!3d21.01990011594843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab340adf661d%3A0x2a7f8077e770d451!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gxJDhu4thIOG7kGMgTWFpIFZp4buHdA!5e0!3m2!1svi!2s!4v1562666860275!5m2!1svi!2s" width="600" height="450" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div><!-- .uk-grid -->
</div>

<section class="section4 homepage-featured-news">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a href="tin-tuc-bds" title="Tin tức">section4</a></h2>
        </header>
        <section class="panel-body">
            <ul class="uk-grid lib-grid-20 uk-grid-width-large-1-2 list-article">
                <?php for($i = 0; $i < 4; $i++){ ?>
                <li>
                    <article class="article uk-clearfix">
                        <div class="thumb">
                            <a class="image img-cover img-zoomin" href="" ><img style="height: 100%;" src="data/1.jpg" alt=""></a>
                        </div>
                        <div class="infor" style="background: none;">
                            <h3 class="title"><a href="" >Toàn thời gian, công tác theo chỉ đạo của Ban Lãnh Đạo Cty</a></h3>
                            <div class="meta"><i class="fa fa-user">nhansumaiviet@gmail.com</i> <i class="fa fa-clock-o">06/24/2021</i> <i class="fa fa-eye">112 view</i></div>
                            <div class="description">Xây dựng kế hoạch và ngân sách phát triển văn hóa doanh nghiệp, đảm bảo bản sắc của hệ Mai Việt Land theo định hướng của Lãnh đạo Tổ chức triển khai các chương trình, hoạt động, sự kiện phát triển văn hóa doanh nghiệp theo kế hoạch được phê duyệt</div>
                            <div class="viewmore"><a href="" title="Xem thêm">Xem thêm <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                    </article>
                </li>
                <?php } ?>
            </ul>
        </section>
    </div>
</section>

<section class="section7">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a title="Đối tác đầu tư">Đối tác đầu tư</a></h2>
        </header>
        <section class="panel-body">
            <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-6 list-article" data-uk-grid-match="{target:'.title'}" style="min-width: 3659.62px; min-height: 72.0156px; transform: translateX(-1626.5px);">
                        <?php for($i = 0; $i < 5; $i++){ ?>
                        <li data-slider-slide="0" style="left: 0px; width: 203.312px;" class="uk-slide-before">
                            <article class="article">
                                <div class="thumb">
                                    <a class="image img-cover img-flash" draggable="false"><img src="data/themes/yidF_BIDV_Logo.png" alt="logo đối tác" draggable="false"></a>
                                </div>
                            </article><!-- .article -->
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div><!-- .slider -->
        </section><!-- .panel-body -->
    </div>
</section>

<section class="section8 consultants-section">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-flex-middle">
            <div class="uk-width-large-1-2 uk-visible-large">
                <div class="title">Bạn cần tư vấn? Gọi cho chúng tôi ngay bây giờ!</div>
                <div class="hotline">Hỗ trợ 24/7: <a href="tel: 0961383811 " title="0961383811">0961383811 </a></div>
            </div>
            <div class="uk-width-large-1-2">
                <form action="dang-ky" method="POST" class="uk-form form" >
                    <label class="uk-width-1-1 input-label">
                        <input type="hidden" name="link" value="{{asset('')}}">
                        <input type="tel" name="email" class="uk-width-1-1 input-text" placeholder="Email" >
                    </label>
                    <button type="submit" class="btn-submit">Đăng ký</button>
                </form>
                                                        
            </div>
        </div><!-- .uk-grid -->
    </div>
</section>

@endsection