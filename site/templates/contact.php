<?php snippet('header') ?>
<?php snippet('breadcrumbs') ?>

<!-- Get in Touch -->
<section class="section section-md bg-white text-center"> 
  <div class="shell">
    <div class="range range-md-center">
      <div class="cell-md-11 cell-xl-10">
      
        <div class="layout-columns"> 
          <div class="layout-columns__aside">
            <div class="layout-columns__aside-item">
              <p class="heading-5">Mobile</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span></div>
                <div class="unit__body"><a href="callto:#"><?= $page->mobile()->html() ?></a></div>
              </div>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">Address</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span></div>
                <div class="unit__body"><a href="#"><?= $page->address()->html() ?></a></div>
              </div>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">E-Mail Address</p>
              <div class="divider-modern"></div>
              <div class="unit unit-horizontal unit-spacing-xxs">
                <div class="unit__left"><span class="icon icon-md icon-primary material-icons-mail"></span></div>
                <div class="unit__body"><a href="mailto:<?= $page->email()->html() ?>"><?= $page->email()->html() ?></a></div>
              </div>
            </div>
            <div class="layout-columns__aside-item">
              <p class="heading-5">Socials</p>
              <div class="divider-modern"></div>
              <ul class="list-icons list-inline-xs">
              <?php foreach($page->contactoptions()->toStructure() as $item): ?>
                <li><a class="icon icon-sm fa <?= $item->icon()->html() ?> icon-style-social" title="<?= $item->title()->html() ?>" href="<?= $item->url()->html() ?>"></a></li>
              <?php endforeach ?>
           </ul>
            </div>
          </div>
          <div class="layout-columns__main">
           <iframe style="width:100%;height:420px;border:0" class="map" src="<?= $page->map()->html() ?>"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php snippet('footer') ?>