<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php echo seo('title'); ?>
  <?php echo seo('description'); ?>  
  <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
  <?= css('assets/css/bootstrap.css') ?>
  <?= css('assets/css/lightGallery.css') ?>
  <?= css('assets/css/style.css') ?>  
</head>
<body>
<div class="page">
  <header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout=" rd-navbar-fixed" 
      data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-sidebar" 
      data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" 
      data-md-stick-up="true" data-lg-stick-up="true">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a class="brand" href="<?= url() ?>">
              <div class="brand__name">
                <img src="/assets/images/rolfneeser.png" alt="rolf neeser">
                <span><img src="/assets/images/reportage.png" alt="rolf neeser"></span>
              </div>
            </a></div>
        </div>
        <?php snippet('menu') ?>
      </nav>
    </div>
  </header>