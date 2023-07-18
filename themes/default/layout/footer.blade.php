<footer>
  @php
    $locale = locale();
  @endphp

  @hook('footer.services.before')

  @if ($footer_content['services']['enable'])
    <div class="services-wrap">
      <div class="container">
        <div class="row">
          @foreach ($footer_content['services']['items'] as $item)
            <div class="col-lg-3 col-md-6 col-12">
              <div class="service-item my-1">
                <div class="icon"><img src="{{ image_resize($item['image'], 80, 80) }}" class="img-fluid"></div>
                <div class="text">
                  <p class="title">{{ $item['title'][locale()] ?? '' }}</p>
                  <p class="sub-title">{{ $item['sub_title'][locale()] ?? '' }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  @endif

  @hook('footer.services.after')

  <div class="container">
    <div class="footer-content">
      <div class="row">
        <div class="col-12 col-md-3">
          <div class="footer-content-left">
            <div class="logo"><a href="http://"><img
                  src="{{ image_origin($footer_content['content']['intro']['logo']) }}" class="img-fluid"></a></div>
            <div class="text tinymce-format-p">{!! $footer_content['content']['intro']['text'][$locale] ?? '' !!}</div>
          </div>
        </div>
        @for ($i = 1; $i <= 3; $i++)
          @php
            $link = $footer_content['content']['link' . $i];
          @endphp
          <div class="col-6 col-sm footer-content-link{{ $i }}">
            <h6 class="text-uppercase text-dark mb-3">{{ $link['title'][$locale] ?? '' }}</h6>
            <ul class="list-unstyled">
              @foreach ($link['links'] as $item)
                @if ($item['link'])
                <li class="lh-lg mb-2">
                  <a href="{{ $item['link'] }}" @if (isset($item['new_window']) && $item['new_window']) target="_blank" @endif>
                    {{ $item['text'] }}
                  </a>
                </li>
              @endif
              @endforeach
            </ul>
          </div>
        @endfor

        @hook('footer.contact.before')
        @hookwrapper('footer.contact')
        <div class="col-12 col-md-3 footer-content-contact">
          <h6 class="text-uppercase text-dark mb-3">{{ __('common.contact_us') }}</h6>
          <ul class="list-unstyled">
            @if ($footer_content['content']['contact']['email'])
              <li class="lh-lg mb-2"><i class="bi bi-envelope-fill"></i> {{ $footer_content['content']['contact']['email'] }}</li>
            @endif
            @if ($footer_content['content']['contact']['telephone'])
              <li class="lh-lg mb-2"><i class="bi bi-telephone-fill"></i> {{ $footer_content['content']['contact']['telephone'] }}</li>
            @endif
            @if ($footer_content['content']['contact']['address'][$locale] ?? '')
              <li class="lh-lg mb-2"><i class="bi bi-geo-alt-fill"></i> {{ $footer_content['content']['contact']['address'][$locale] ?? '' }}</li>
            @endif
          </ul>
        </div>
        @endhookwrapper
        @hook('footer.contact.after')
      </div>
    </div>
  </div>

  @hookwrapper('footer.copyright')
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-flex">
            <!-- 删除版权信息, 请先购买授权 https://beikeshop.com/vip/subscription -->
            @if(!check_license())
              Powered By&nbsp;<a href="https://beikeshop.com/" target="_blank" rel="noopener">BeikeShop</a>&nbsp;-&nbsp;
            @endif
            {!! $footer_content['bottom']['copyright'][$locale] ?? '' !!}
          </div>
        </div>
        @if (isset($footer_content['bottom']['image']) && $footer_content['bottom']['image'])
          <div class="col-auto right-img py-2">
            <img src="{{ image_origin($footer_content['bottom']['image']) }}" class="img-fluid">
          </div>
        @endif
      </div>
    </div>
  </div>
  @endhookwrapper

</footer>
