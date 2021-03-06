<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php print $title; ?></title>
<?php print $header_info; ?>
<?php print $meta; ?>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/ie.css" />
<![endif]-->
<?php print $styles; ?>
<?php print $scripts; ?>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="title" align="center">
            <h1><a href="<?php print $base_url; ?>" style="text-decoration: none; color:#fff">
                <?php print $site_title . " - " . $slogan; ?></a></h1>
        </div>
    </div>

    <div class="navigation">
        <?php print $primary_links; ?>
    </div>

    <div class="main">

        <div class="content">
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

        <div class="sidenav">
            <?php print $right; ?>
            <?php print $left; ?>
            <?php print $secondary_links ?>
        </div>

        <div class="clearer"><span></span></div>

    </div>

    <?php include 'footer.php'; ?>

</div>

</body>

</html>
