<?php snippet('header') ?>
<?php snippet('breadcrumbs') ?>

<!-- Gallery-->
<section class="section section-md bg-white oh text-center">
  <div class="shell">
    <h2><?= $page->subtitle()->kirbytext() ?></h2>
    <div class="intro text">
      <?= $page->text()->kirbytext() ?>
    </div>
    <?php snippet('showcase') ?>
  </div>
</section>
<?php snippet('footer') ?>