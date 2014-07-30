<?php echo "<!doctype html>";
include "inc/config.php";
$image_small = "http://placekitten.com/192/128";
$image_medium = "http://placekitten.com/384/256";
$image_large = "http://placekitten.com/480/320";
include "inc/head.php";
?>

<header class="container"><h1>Picture Element Test</h1></header>

<div class="container content">

<ul class="grid-list">
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>
  <li>
    <picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <source srcset="<?php echo $image_large ?>" media="(min-width: 800px)">
    <source srcset="<?php echo $image_medium ?>" media="(min-width: 500px)">
    <source srcset="<?php echo $image_small ?>">
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $image_large ?> 480w,<?php echo $image_medium ?> 384w,<?php echo $image_small ?> 192w," sizes="100%" alt="">
    </picture>
  </li>

</ul>
<p>Resize the browser window, &hellip; in some browsers you may need to refresh the webpage.</p>
<p>Support of <a href="http://caniuse.com/#feat=picture"> browsers which natively support the picture element</a></p>
</div>

<?php include "inc/footer.php"; ?>
