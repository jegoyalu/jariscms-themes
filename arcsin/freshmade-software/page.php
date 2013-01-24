<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
<title><?php print $title; ?></title>
<?php print $header_info ?>
<?php print $meta ?>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/ie.css" />
<![endif]-->
<?php print $styles ?>
<?php print $scripts ?>
</head>

<body id="top">

<div id="header-wrapper">
    <div id="header-wrapper-2">
        <div class="center-wrapper">
            <div id="header">

                <div id="logo">
                    <h1 id="site-title">
                        <a href="<?php print $base_url; ?>">
                            <?php print $site_title; ?>
                        </a>
                    </h1>
                    <h2 id="site-slogan"><?php print $slogan; ?></h2>
                </div>

                <div id="help-wrapper">
                    <div id="help">
                        <!--a href="#">Contact us</a>
                        <span class="text-separator">|</span>
                        <a href="#">F.A.Q</a>
                        <span class="text-separator">|</span>
                        <a href="#">Sitemap</a-->
                        <?php print $secondary_links ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="navigation-wrapper">
    <div id="navigation-wrapper-2">
        <div class="center-wrapper">

            <div id="navigation">

                <?php print $primary_links ?>

                <div class="clearer">&nbsp;</div>

            </div>

        </div>
    </div>
</div>

<div id="content-wrapper">
    <div class="center-wrapper">

        <div class="content">

            <div id="featured-wrapper">
                <div id="featured">

                    <div class="left" style="width: 330px">

                        <!--h2>Super<span>Product</span></h2>

                        <p class="large">Integer eu magna sit amet nulla consectetur luctus at et massa. Sed nec viverra lacus.</p>

                        <p><img src="sample-videoplayer.jpg" width="321" height="197" alt="" /></p>

                        <p class="large text-center"><a href="#">Try it out</a> <span class="text-separator">|</span> <a href="#">Buy now</a> <span class="text-separator">|</span> <a href="#">Information</a></p-->

                    </div>

                    <div class="right">
                        <!-- img src="sample-product.jpg" width="252" height="332" alt="" /-->
                    </div>

                    <div class="clearer">&nbsp;</div>

                </div>
            </div>

            <div id="main">

                <div class="separator-vertical">

                    <div class="col2 left">
                        <h1><?php print $content_title; ?></h1>

                        <?php if($breadcrumb){?>
                            <?php print $breadcrumb; ?>
                        <?php } ?>

                        <?php if($messages){?>
                            <?php print $messages; ?>
                        <?php } ?>

                        <?php if($tabs){?>
                            <?php print $tabs; ?>
                        <?php } ?>

                        <?php print $content; ?>
                    </div>

                    <div class="col2 right">
                        <?php echo $right; ?>
                        <?php echo $left; ?>
                    </div>

                    <div class="clearer">&nbsp;</div>

                </div>

            </div>

        </div>

    </div>
</div>

<div id="footer-wrapper">

    <div class="center-wrapper">

        <div id="footer">

            <div class="left">
                <?php print $primary_links; ?>
            </div>

            <div class="right">
                <a href="#">Top &uarr;</a>
            </div>

            <div class="clearer">&nbsp;</div>

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
