      <!-- Isotope-->
      <div class="isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
        <div class="row" id="lightGallery">
          <?php
          $counter = 0;
          ?>
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
              <?php
                if( ($counter % 2) == 0 ){
                  $category = 2;
                  $css = 'col-xs-12 col-sm-6 col-md-3';
                }else{
                  $category = 1;
                  $css = 'col-xs-12 col-sm-6';                
                }

                if( $counter < 1 ){
                  $cssa = 'thumb-ruby';
                }else{
                  $cssa = 'thumb-ruby';
                }
              ?>
              <div data-src="<?= $image->url() ?>" class="<?= $css ?> isotope-item" data-filter="Category <?= $category ?>">
                <a class="<?= $cssa ?>" href="<?= $image->url() ?>" data-lightgallery="group-item*">
                  <img class="thumb-ruby__image" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" width="270" height="375"/>
                  <div class="thumb-ruby__caption"> 
                  </div>
                </a>
              </div>
              <?php
              $counter++;
              ?>            
          <?php endforeach ?>
        </div>
      </div>