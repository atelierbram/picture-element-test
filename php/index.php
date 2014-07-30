<?php echo "<!doctype html>";
include "inc/config.php";
$image_small = "_small";
$image_medium = "_medium";
$image_large = "_large"; 
include "inc/head.php";
?>

<header class="container"><h1>Picture Element Test</h1></header>

<div class="container content">

<ul class="grid-list">
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg" media="(min-width: 800px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg" media="(min-width: 500px)">
    <source srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $rootUrl ?>/assets/img/img<?php echo $image_large ?>.jpg 480w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_medium ?>.jpg 384w,<?php echo $rootUrl ?>/assets/img/img<?php echo $image_small ?>.jpg 192w," sizes="100%" alt="">
    </picture>
  </li>

</ul>
<p>Resize the browser window, &hellip; in some browsers you may need to refresh the webpage.</p>
<p>Support of <a href="http://caniuse.com/#feat=picture"> browsers which natively support the picture element</a></p>
</div>

<?php include "inc/footer.php"; ?>
