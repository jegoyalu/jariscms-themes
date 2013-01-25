<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

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

<div id="header">
    <div class="center_wrapper">
        <div id="toplinks">
            <div id="toplinks_inner">
                <?php print $primary_links; ?>
            </div>
        </div>
        <div class="clearer">&nbsp;</div>

        <div id="site_title">
            <h1>
                <a href="<?php print $base_url; ?>"><?php print $site_title; ?></a>
            </h1>
            <?php print $slogan; ?>
        </div>
    </div>
</div>

<div id="navigation">
    <div class="center_wrapper">
        <?php print $secondary_links; ?>
    </div>
    <div class="clearer">&nbsp;</div>
</div>

<div id="main_wrapper_outer">
    <div id="main_wrapper_inner">
        <div class="center_wrapper">
            <div class="left" id="main">
                <div id="main_content">
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

            <div class="right" id="sidebar">
                <div id="sidebar_content">
                    <?php echo $right; ?>
                    <?php echo $left; ?>
                    <?php print $secondary_links ?>
                </div>
            </div>

            <div class="clearer">&nbsp;</div>
        </div>
    </div>
</div>

<div id="dashboard">
    <div id="dashboard_content">
        <div class="center_wrapper">
            <div class="col3 left">
                <div class="col3_content">

                </div>
            </div>

            <div class="col3mid left">
                <div class="col3_content">

                </div>
            </div>

            <div class="col3 right">
                <div class="col3_content">

                </div>
            </div>

            <div class="clearer">&nbsp;</div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
