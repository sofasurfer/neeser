<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(/assets/images/breadcrumbs-image.jpg);">
  <div class="shell">
    <h1 class="breadcrumbs-custom__title"><?= $page->title()->html() ?></h1>
    <ul class="breadcrumbs-custom__path">     
      <?php foreach($site->breadcrumb() as $crumb): ?>
        <li>
          <a href="<?= $crumb->url() ?>">
            <?= html($crumb->title()) ?>
          </a>          
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</section>