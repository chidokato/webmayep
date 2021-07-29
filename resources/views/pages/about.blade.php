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
            <li><a href="https://maivietland.vn/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="uk-active"><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
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

@include('layout.bottom')

@endsection