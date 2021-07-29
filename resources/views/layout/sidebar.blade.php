<section class="aside-prd-detail aside-whyus">
    <div class="prd-detail">
        <div class="call-groups">
            <a class="btn uk-flex uk-flex-middle uk-flex-space-between" href="tel:{{$head_setting->hotline}}" title="Showroom 1">
                <div class="text">
                    <span class="title">{{$head_setting->hotline}}</span>
                </div>
            </a>
        </div>
    </div>
</section><!-- .aside-prd-detail -->
<section class="aside-prd-detail">
  <header class="panel-head">
      <h3 class="heading"><span>Tin tức mới nhất</span></h3>
  </header>
  <section class="panel-body">
      <ul class="uk-list list-product">
          @foreach($news_hits as $val)
          <li class="sidebar_new">
              <div class="uk-clearfix">
                  <div class="thumb">
                      <a class="image img-cove" href="{{$val->category->slug}}/{{$val->slug}}" ><img src="data/news/80/{{$val->img}}" alt="{{$val->name}}"></a>
                  </div>
                  <div class="infor">
                      <h4 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}" >{{$val->name}}</a></h4>
                  </div>
              </div>
          </li>
          @endforeach
      </ul>
  </section>
</section><!-- .aside-panel -->