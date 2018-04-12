<?php snippet('header') ?>
  <!-- Swiper-->
  <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="true" data-simulate-touch="false" data-pagination-type="fraction" data-slide-effect="fade">
    <div class="swiper-wrapper">
      <?php foreach($page->images() as $image): ?>
      <div class="swiper-slide" data-slide-bg="<?= $image->url() ?>"></div>
      <?php endforeach ?>
    </div>
    <div class="swiper-controls swiper-controls_vertical">
      <div class="swiper-button-prev">
        <svg version="1.1" x="0px" y="0px" width="20px" height="36px" viewbox="0 0 20 36">
          <line fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10" y1="35" x2="10" y2="1"></line>
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="            1,11 10,1 19,11"></polyline>
        </svg>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next">
        <svg version="1.1" x="0px" y="0px" width="20px" height="36px" viewbox="0 0 20 36">
          <line fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10" y1="1" x2="10" y2="35"></line>
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="            1,25 10,35 19,25"></polyline>
        </svg>
      </div>
    </div>
  </section>

  <!-- About-->
  <section class="section">
    <div class="shell-fluid shell-condensed">
      <div class="range range-ten range-condensed range-50 range-sm-0">
        <div class="cell-sm-6 cell-lg-6 cell-xl-8 cell-sm-middle">
          <div class="box-spacer">
           <div class="range range-lg-center">
              <!-- Bootstrap tabs -->
              <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tabs-1-1" data-toggle="tab">Deutsch</a></li>
                  <li><a href="#tabs-1-2" data-toggle="tab">Français</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tabs-1-1">
                    <?= $page->textde()->kirbytext() ?>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
                     <?= $page->textfr()->kirbytext() ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cell-xl-2 reveal-flex">
          <div class="range range-condensed range-custom-layout">
            <div class="cell-xs-6 cell-md-6 cell-xl-12">
              <!-- Box award-->
              <article class="box-award"><img class="box-award__image" src="assets/images/about/logo-sbf.png" alt=""/>
                <h3 class="box-award__title">Swiss professional photographers and photo designers</h3>
                <div class="box-award__divider"></div>
                
              </article>
            </div>
            <div class="cell-xs-6 cell-md-6 cell-xl-12">
              <!-- Box award-->
              <article class="box-award"><img class="box-award__image" src="assets/images/about/logo-swpa.png" alt=""/>
                <h3 class="box-award__title">Swiss Press Award/Photo</h3>
                <div class="box-award__divider"></div>
                <time class="box-award__time" datetime="2014">2017</time>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php snippet('footer') ?>