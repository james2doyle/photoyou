<!DOCTYPE html>
<html>
<head>
  <title>Photome Clone</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/basscss/css/basscss.min.css">
  <link rel="stylesheet" href="bower_components/magnific-popup/dist/magnific-popup.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="bower_components/lazyload/build/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
  <?php include 'partials/header.php'; ?>
  <?php include 'partials/menu.php'; ?>
  <div class="container">
    <div class="clearfix mt2 mb2 center caps">
      <h1>LOREM IPSUM DOLOR</h1>
      <hr class="mb2">
      <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a href="#" class="btn btn-primary">CONTACT</a>
    </div>
  </div><!-- end .container -->
  <div class="spacer py3"></div>
  <div class="container-full mt3 image-grid">
    <div class="clearfix">
      <?php $images = glob('img/*.jpg'); ?>
      <?php for ($i = 0; $i < count($images); $i++): ?>
        <?php echo (($i % 2) == 0) ? '<div class="clearfix"></div>':null ?>
        <div id="image-<?php echo $i ?>" class="col sm-col-12 md-col-6 center">
          <a href="<?php echo $images[$i] ?>" class="block image-link">
            <img onload="lzld(this)" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $images[$i] ?>" width="800" height="500" class="align-bottom">
          </a>
        </div>
      <?php endfor; ?>
    </div>
  </div><!-- end .container -->
  <div class="spacer py3"></div>
  <?php include 'partials/menu.php'; ?>
  <div class="container center">
    <div class="clearfix">
      <p><em>Copyright &copy; Stephanie Malicdem <?php echo date('Y') ?></em></p>
    </div>
  </div>
  <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="bower_components/magnific-popup/dist/jquery.magnific-popup.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/script.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>