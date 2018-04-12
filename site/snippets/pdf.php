<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<?php echo seo('title'); ?>
<?php echo seo('description'); ?>  

<link rel="icon" href="favicon.png" type="image/png">
<link href="/assets/web/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/assets/web/assets/css/style-last-working.css" rel="stylesheet" type="text/css">
<link href="/assets/web/assets/css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/assets/web/assets/css/menu.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="/assets/web/assets/js/skel.min.js"></script>
            <script src="/assets/web/assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="/assets/web/assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="/assets/web/assets/js/main.js"></script>
</head>
<body>

<!-- Header -->
<header id="header">
    
<a href="index.html"><h1>ROLF NEESER <span>FOTOGRAFIE </span></h1></a>
    <nav class="main">
        <ul>
            <li class="menu">
                <a class="fa-bars" href="<?= $page->url() ?>">Close</a>
            </li>
        </ul>
    </nav>
</header>
<?php
if( !empty($_REQUEST['pdf']) ){
  $pdffile = $_REQUEST['pdf'];
}
?>
<!--Service-->
<section  id="service">
  <div class="container">
    <div class="service_area">
        <div style="position: relative; height: 400vh;margin-top: 2em;">
         <iframe src="/assets/web/viewer.html?file=<?= $pdffile ?>" type="application/pdf" frameborder="0" marginheight="0;"
          style="position: absolute; height: 1000vh; width: 100%; margin:0 auto; overflow: scroll; 
         -webkit-box-pack: center; -webkit-box-align: center; display: -webkit-box;"> </iframe>
        </div>
    </div>
  </div>
</section>
<!--Service-->

</body>
</html>