<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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

<body>

<div id="site-wrapper">

    <div id="header">

        <div id="top">

            <div class="left" id="logo">
                <a href="<?php print $base_url; ?>">
                    <img src="<?php print $theme_path; ?>/img/logo.gif" alt=""/>
                </a>
            </div>

            <div class="left navigation" id="main-nav">

                <?php print $primary_links ?>

                <div class="clearer">&nbsp;</div>

            </div>

            <div class="clearer">&nbsp;</div>

        </div>

        <div class="navigation" id="sub-nav">

            <?php print $secondary_links ?>

            <div class="clearer">&nbsp;</div>

        </div>

    </div>

    <div id="splash">

        <div class="col3 left">

        </div>

        <div class="col3-mid left">

        </div>

        <div class="col3 right">

        </div>

        <div class="clearer">&nbsp;</div>

    </div>

    <div class="main" id="main-two-columns">

        <div class="left" id="main-content">
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

        <div class="right sidebar" id="sidebar">
            <?php echo $right; ?>
            <?php echo $left; ?>
        </div>

        <div class="clearer">&nbsp;</div>

    </div>

    <?php include 'footer.php'; ?>

</div>

</body>
</html>
