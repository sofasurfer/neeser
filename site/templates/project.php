
<?php if( !empty($_REQUEST['pdf']) ):  ?>

  <?php snippet('pdf') ?>

<?php else: ?> 
  <?php snippet('header') ?>
  <?php snippet('breadcrumbs') ?>

  <!-- Gallery-->
  <section class="section section-md bg-white oh text-center">
    <div class="shell">
      <h2><?= $page->subtitle()->kirbytext() ?></h2>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>

      <?php if($page->images()->count() > 1 ): ?>

        <?php if($document = $page->files()->findBy('extension', 'pdf')): ?>
          <p>
            <?php foreach($page->documents()->filterBy('extension', 'pdf') as $pdf): ?>
              <a class="btn btn-primary" href="<?= $page->url() ?>?pdf=<?= $pdf->url() ?>"><?= ($pdf->alttext()->empty()) ? $pdf->filename() : $pdf->alttext(); ?></a>
            <?php endforeach ?>
          </p>
        <?php endif ?>
        <?php snippet('gallery'); ?>
      <?php else: ?>
        <?php snippet('pdf2', array('pdffile' => $page->documents()->filterBy('extension', 'pdf')->first()->url() )); ?>
      <?php endif ?>
    </div>
  </section>
  <?php snippet('footer') ?>​
<?php endif ?>