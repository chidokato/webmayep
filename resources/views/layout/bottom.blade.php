<section class="section7">
    <div class="uk-container uk-container-center">
        <header class="panel-head">
            <h2 class="heading-1"><a title="Đối tác đầu tư">Đối tác đầu tư</a></h2>
        </header>
        <section class="panel-body">
            <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 1500}">
                <div class="uk-slider-container">
                    <ul class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-6 list-article" data-uk-grid-match="{target:'.title'}" style="min-width: 3659.62px; min-height: 72.0156px; transform: translateX(-1626.5px);">
                        @foreach($doi_tac as $val)
                        <li data-slider-slide="0" style="left: 0px; width: 203.312px;" class="uk-slide-before">
                            <article class="article">
                                <div class="thumb">
                                    <a class="image img-cover doi_tac img-flash" draggable="false"><img src="data/themes/{{$val->img}}" alt="{{$val->name}}" draggable="false"></a>
                                </div>
                            </article><!-- .article -->
                        </li>
                        @endforeach
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
                <form action="dang-ky" method="POST" class="uk-form form" onsubmit="return validateForm()">
                    <label class="uk-width-1-1 input-label">
                        <input type="hidden" name="_token" value="xT6xinedfKxb4AiGRceLncYtazptrS5amtYdg9J7">
                        <input type="hidden" name="link" value="http://maivietland.vn/">
                        <input type="tel" name="phone" class="uk-width-1-1 input-text" placeholder="0988888888" id="phone">
                    </label>
                    <button type="submit" class="btn-submit">Đăng ký</button>
                </form>
                                                        
            </div>
        </div><!-- .uk-grid -->
    </div>
</section>