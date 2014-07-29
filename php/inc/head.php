<?php ?><html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Picture-Element Test</title>
    <link rel="stylesheet" href="<?php echo $rootUrl ?>/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Testing picture-element, with images in three sizes within a responsive grid, and Picturefill polyfill fall-back."/>
    <link rel="author" href="https://plus.google.com/+BramdeHaan/posts">

    <!--[if lt IE 9]><script src="<?php // echo $rootUrl ?>/assets/js/lib/html5shiv.min.js"></script><![endif]-->
<script>
  document.createElement( "picture" );
</script>
    <script src="<?php echo $rootUrl ?>/assets/js/lib/picturefill.min.js" async"></script>
<!-- <script>picturefill();</script> -->
  </head>
  <body>
<?php ?>
