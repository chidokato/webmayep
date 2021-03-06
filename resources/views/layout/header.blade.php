<?php use App\category; ?>
<header class="pc-header uk-visible-large header1">
  <div class="uk-container uk-container-center">
  <section class="topbar">
    <div class="uk-container uk-container-center">
      <div class="uk-flex uk-flex-middle uk-flex-space-between container">
        <ul class="uk-list uk-flex uk-flex-middle hd-contact">
          <li class="location"><span><i class="fa fa-map-marker"></i> {{$head_setting->address}} </span></li>
          <li class="email"><span><i class="fa fa-envelope"></i> <a href="{{$head_setting->email}}" title="Email">{{$head_setting->email}}</a></span></li>
        </ul>
        <div class="page-social">
          <ul class="uk-list uk-clearfix">
            <!-- <li class="facebook"><a href="https://www.facebook.com/noithatgleehome/" title="facebook" target="_blank">facebook</a></li>
            <li class="twitter"><a href="#" title="twitter" target="_blank">twitter</a></li>
            <li class="google"><a href="#" title="google plus" target="_blank">google plus</a></li>
            <li class="pinterest"><a href="#" title="pinterest" target="_blank">pinterest</a></li> -->
          </ul>
        </div>
      </div><!-- .container -->
    </div>
  </section>



  
  <section class="upper">
    <div class="uk-container uk-container-center">
      <div class="uk-flex uk-flex-middle uk-flex-space-between container">
        <div class="logo" itemscope="" itemtype="http://schema.org/Hotel">
          <a itemprop="url" href="{{asset('')}}" title="logo">
            <img src="data/logo.png" style="height: 80px;" alt="logo" itemprop="logo">
          </a>
          <span class="uk-hidden">logo</span>
        </div>
        <div class="hd-search header-search">
          <form action="tim-kiem" method="POST" class="uk-form form">
            <input type="hidden" name="_token" value="0YLwFJ9XbeSHL7gM2TqIQT6IEB8g2XnDD31fIRZE">
            <input type="text" name="key" class="uk-width-1-1 input-text keyword" placeholder="Tìm kiếm sản phẩm...">
            <button type="submit" name="" class="btn-submit">Tìm kiếm</button>
          </form>
          <div class="searchResult"></div>
        </div>
        <div class="hd-hotline">
        <span class="label">Hotline</span>
        <a class="number" href="tel:{{$head_setting->hotline}}" title="Hotline">{{$head_setting->hotline}}</a>
        </div>
      </div><!-- .container -->
    </div>
  </section><!-- .upper -->
  <div class="uk-sticky-placeholder">
    <section class="lower" data-uk-sticky="{top: 0}" style="margin: 0px;">
      <div class="uk-container uk-container-center">
        <nav class="main-nav">
          <ul class="uk-navbar-nav uk-clearfix main-menu float_left">
            <li class="active"> <a href="{{asset('')}}">Trang chủ</a> </li>
            @foreach($head_category as $val)
            <li> <a href="{{$val->slug}}">{{$val->name}}</a>
              <?php $sub_category = category::where('status','true')->where('parent', $val->id)->orderBy('view','asc')->get(); ?>
              @if(count($sub_category) > 0)
              <div class="dropdown-menu">
                <ul class="uk-list sub-menu">
                  @foreach($sub_category as $sub_cat)
                  <li><a href="{{$sub_cat->slug}}">{{$sub_cat->name}}</a></li>
                  @endforeach
                </ul>
              </div>
              @endif
            </li>
            @endforeach
          </ul>
        </nav><!-- .main-nav -->    
      </div>
    </section>
  </div><!-- .lower -->
</div>
</header>

<header class="mobile-header uk-hidden-large">
    <section class="upper">
        <a class="moblie-menu-btn skin-1" href="#offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
            <span>Menu</span>
        </a>
        <div class="logo"><a href="#" title="Logo"><img src="uploads/images/he-thong/logo.png" alt="Logo"></a></div>
        <a class="mobile-hotline" href="tel: {{$head_setting->hotline}}" title="Hotline">
            <span class="label">Hotline: </span>
            <span class="value">{{$head_setting->hotline}}</span>
        </a>
    </section><!-- .upper -->
    <section class="lower">
        <div class="mobile-search header-search">
            <form action="#" method="" class="uk-form form">
                <input type="text" name="" class="uk-width-1-1 input-text keyword" placeholder="Bạn muốn tìm gì hôm nay?">
                <button type="submit" name="" value="" class="btn-submit">Tìm kiếm</button>
            </form>
            <div class="searchResult"></div>
        </div>
    </section>
</header>