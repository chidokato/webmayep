<footer class="footer"><!-- FOOTER -->
  <div class="uk-container uk-container-center customer-container">
    <section class="upper">
      <div class="uk-grid uk-grid-medium">
        <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-5">
          <section class="panel ft-contact">
            <header class="panel-head">
              <h3 class="heading"><span>Thông tin liên hệ</span></h3>
            </header>
            <section class="panel-body">
              <ul class="uk-list list">
                <li class="location">{{$head_setting->address}}</li>
                <li class="phone"><a href="tel: {{$head_setting->hotline}}" title="Hotline">{{$head_setting->hotline}}</a></li>
                <li class="email"><a href="mailto: {{$head_setting->email}}" title="Email">{{$head_setting->email}}</a></li>
              </ul>
            </section>
          </section><!-- .panel -->
        </div>
          <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-5">
          <section class="panel">
            <header class="panel-head">
              <h3 class="heading"><span>Danh mục</span></h3>
            </header>
            <section class="panel-body">
              <ul class="uk-list site-link">
                <li><a href=".html" title="">Thiết kế kiến trúc</a></li>
                <li><a href=".html" title="">Thiết kế nội thất</a></li>
                <li><a href=".html" title="">Bàn ghế phòng khách</a></li>
              </ul>
            </section>
          </section><!-- .panel -->
        </div>
                <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-5">
          <section class="panel">
            <header class="panel-head">
              <h3 class="heading"><span>Tin tức</span></h3>
            </header>
                        <section class="panel-body">
              <ul class="uk-list site-link">
                              <li><a href=".html" title="">Tin tức và sự kiện</a></li>
                              <li><a href=".html" title="">Tin trong ngành</a></li>
                              <li><a href=".html" title="">Tin nội bộ</a></li>
                              <li><a href=".html" title="">Tin sản phẩm</a></li>
                              <li><a href=".html" title="">Tin tuyển dụng</a></li>
                            </ul>
            </section>
                      </section><!-- .panel -->
        </div>
                <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-5">
          <section class="panel">
            <header class="panel-head">
              <h3 class="heading"><span>Sản phẩm</span></h3>
            </header>
                        <section class="panel-body">
              <ul class="uk-list site-link">
                              <li><a href=".html" title="">Giường ngủ</a></li>
                              <li><a href=".html" title="">Tủ quần áo</a></li>
                              <li><a href=".html" title="">Tủ bếp</a></li>
                              <li><a href=".html" title="">Ghế sofa</a></li>
                            </ul>
            </section>
                      </section><!-- .panel -->
        </div>
                <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-5 lib-visible-xlarge">
          <section class="panel ft-subscribe">
            <header class="panel-head">
              <h3 class="heading"><span>Giới thiệu</span></h3>
            </header>
            <section class="panel-body">
              <div class="title" style="color:#fff !important;"><p><font color="#545454" face="arial, sans-serif" size="2">Nội thất Glee là đơn vị thiết kế và thi công sản phẩm nội thất&nbsp;hàng đầu của miền Bắc, luôn lấy được sự hài lòng và thiện cảm tuyệt đối từ khách hàng, chế độ bảo hành dài hạn...</font></p>
</div>
              
            </section>
          </section><!-- .panel -->
        </div>
      </div><!-- .uk-grid -->
    </section><!-- .upper -->
  </div>

  <section class="lower">
    <div class="uk-container uk-container-center customer-container"> 
      <div class="uk-flex uk-flex-middle uk-flex-space-between container">
        <div class="copyright">© 2017 by <a href="#" title="">Glee</a>. All rights reserved | Design by <span onclick="return false;" title="HTVietNam">HTVietNam</span></div>
        <div class="ft-social uk-visible-large">
          <ul class="uk-list uk-clearfix">
            <li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="google"><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="youtube"><a href="#" title="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section><!-- .lower -->
</footer>

<div class="hotline-fixed uk-hidden-large">
  <a href="tel: {{$head_setting->hotline}}" title="Hotline">
    <span class="label">Hotline: </span>
    <span class="value">{{$head_setting->hotline}}</span>
  </a>
</div>

<script src="frontend/function.js"></script>

<script src="frontend/uikit/js/components/slideshow.min.js"></script>
<script src="frontend/uikit/js/components/slider.min.js"></script>
<script src="frontend/uikit/js/components/sticky.min.js"></script>
<script src="frontend/uikit/js/components/accordion.min.js"></script>
<script src="frontend/uikit/js/components/lightbox.min.js"></script>
<script src="frontend/plugins/Readmore/readmore.min.js"></script>
<script src="frontend/plugins/lightslider-master/dist/js/lightslider.min.js"></script>
<script src="frontend/library/js/library.js"></script>
<script src="templates/acore/function.js" type="text/javascript"></script>
<script src="frontend/mask/jquery.mask.min.js" type="text/javascript"></script>

<div id="modal-cart" class="uk-modal">
  <div class="uk-modal-dialog" style="width:768px;">
    <a class="uk-modal-close uk-close"></a>
    <div class="cart-content">

    </div>
  </div>
</div>
<div id="modal-alert" class="uk-modal">
  <div class="uk-modal-dialog uk-modal-dialog-small">
     <a class="uk-modal-close uk-close"></a>
    <div class="alert-content"></div>
  </div>
</div>