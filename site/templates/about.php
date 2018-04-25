<?php snippet('header') ?>
<?php snippet('breadcrumbs') ?>

<!-- About Me-->
<section class="section section-md bg-white">
  <div class="shell">
    <div class="range range-50 range-sm-center range-md-left">
      <div class="cell-xl-3 reveal-flex">
        <div class="range range-condensed range-custom-layout">
          <div class="cell-xs-6 cell-md-4 cell-xl-11">
            <!-- Box award-->
            <article class="box-award mobile">
            <video width="100%" controls >
       <source src="assets/web/spyderporsch.ogg" type="video/ogg">
       <source src="assets/web/spyder918.mp4" type="video/mp4">
        </video>
             <h4 class="box-award__title"> The making of...</h4>
             Porsche 918 Spyder
            </article>
          </div>
          
          <div class="cell-xs-6 cell-md-4 cell-xl-11">
            <!-- Box award-->
            <article class="box-award mobile">
             
            <iframe src="https://player.vimeo.com/video/203076275?title=0&byline=0&portrait=0" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
       <h4 class="box-award__title"> <a href="https://vimeo.com/203076275">Rolf Neeser, Gewinner Alltag - </a>  </h4> <a href="https://vimeo.com/swisspressaward">Swiss Press Award/Photo</a>  
           
            </article>
          </div>
        </div>
      </div>
      <div class="cell-sm-12 cell-md-12 cell-xl-6">
        <div class="box-width-5 box-centered">
        
      <!-- Bootstrap tabs -->
        
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tabs-1-1" data-toggle="tab">Deutsch</a></li>
            <li><a href="#tabs-1-2" data-toggle="tab">Français</a></li>
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
          </ul> 
          <div class="tab-content">
            <article class="quote-big"><br>
              <h3>Reportages, Editorial, People, Commercial </h3>
            </article>
              <!-- Tab panes-->
           
              <div class="tab-pane fade in active" id="tabs-1-1">
                <?= $page->textde()->kirbytext() ?>
              </div>
              <div class="tab-pane fade" id="tabs-1-2">
                <?= $page->textfr()->kirbytext() ?>
              </div>
            </div>
          </div>
        </div>
          <div class="cell-xl-3 reveal-flex">
        <div class="range range-condensed range-custom-layout mobile">
          <div class="cell-xs-6 cell-md-4 cell-xl-11 mobile">
            <!-- Box award-->
            <article class="box-award mobile"><img class="box-award__image" src="assets/images/about/logo-sbf.png" alt=""/>
              <h4 class="box-award__title">Swiss professional photographers and photo designers</h4>
              <div class="box-award__divider"></div>
              
            </article>
          </div>
          
          <div class="cell-xs-6 cell-md-4 cell-xl-11">
            <!-- Box award-->
            <?php snippet('swisspress') ?>
          </div>
        </div>
      </div>
        
      </div>
       
    </div>
  
</section>

<?php snippet('footer') ?>
