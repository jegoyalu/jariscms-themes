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

<div id="wrapper">
<div id="container">

<div class="title">
    <h1>
        <a href="<?php print $base_url; ?>"><?php print $site_title; ?></a> -
        <?php print $slogan; ?>
    </h1>
</div>

<div class="header"></div>

<div class="navigation">

    <?php print $primary_links; ?>

    <div class="clearer"></div>

</div>

<div class="main" id="two-columns">

    <div class="col2">

        <div class="left">

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

        </div>

        <div class="right">

            <div class="content">
                <?php print $right; ?>
                <?php print $left; ?>
                <?php print $secondary_links ?>
            </div>

        </div>

        <div class="clearer"></div>

    </div>

    <div class="bottom">

        <div class="left">

        </div>

        <div class="right">

        </div>

        <div class="clearer"></div>

    </div>

    <?php include 'footer.php'; ?>

</div>

</div>
</div>

</body>
</html>
