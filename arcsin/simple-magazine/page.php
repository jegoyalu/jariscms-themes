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

<body id="top">

<div id="network">
    <div class="center-wrapper">

        <div class="left"><?php print t(date("l, j F, Y")); ?>
            <span class="text-separator"><!--|--></span>
            <span class="quiet"><!--794 users online--></span>
        </div>

        <!--div class="right">
            <ul class="tabbed" id="network-tabs">
                <li class="current-tab"><a href="#">Simple Magazine</a></li>
                <li><a href="#">Network site</a></li>
                <li><a href="#">Network site 2</a></li>
            </ul>

            <div class="clearer">&nbsp;</div>
        </div-->

        <div class="clearer">&nbsp;</div>

    </div>
</div>

<div id="site">
    <div class="center-wrapper">

        <div id="header">
            <div class="right" id="toolbar">
                <!--
                Text size <a href="#" title="Larger text">
                    <img src="img/icon-plus.gif" width="20" height="20" alt=""/>
                </a>
                <a href="#" title="Smaller text">
                    <img src="img/icon-minus.gif" width="20" height="20" alt=""/>
                </a>
                -->
            </div>

            <div class="clearer">&nbsp;</div>

            <div id="site-title">
                <h1>
                    <a href="<?php print $base_url; ?>"><?php print $site_title; ?></a>
                    <span> / <?php print $slogan; ?></span>
                </h1>
            </div>

            <div id="navigation">
                <div id="main-nav">
                    <?php print $primary_links ?>

                    <div class="clearer">&nbsp;</div>
                </div>

                <div id="sub-nav">
                    <?php print $secondary_links ?>

                    <div class="clearer">&nbsp;</div>
                </div>
            </div>
        </div>

        <div class="main" id="main-three-columns">
            <div class="left" id="main-left">

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

                <!--div class="post"-->

                <div class="content-separator"></div>

                <div class="col3 left">
                    <div class="column-content">
                        <!--div class="post"-->
                    </div>
                </div>

                <div class="col3 col3-mid left">
                    <div class="column-content">
                        <!--div class="post"-->
                    </div>
                </div>

                <div class="col3 right">
                    <div class="column-content">
                        <!--div class="post"-->
                    </div>
                </div>

                <div class="clearer">&nbsp;</div>
            </div>

            <div class="left sidebar" id="sidebar-1">
                <!--div class="post"-->

                <!--div class="content-separator"></div-->

                <!--div class="post"-->

                <?php echo $right; ?>
                <?php echo $left; ?>
            </div>

            <div class="right sidebar" id="sidebar-2">

                <div class="section">

                    <div class="section-title">
                        <div class="left"><!--Latest News--></div>

                        <div class="right">
                            <img src="img/icon-time.gif" width="14" height="14" alt=""/>
                        </div>

                        <div class="clearer">&nbsp;</div>
                    </div>

                    <div class="section-content">
                        <ul class="nice-list">
                            <!--
                            <li>
                                <div class="left"><a href="#">Aenean tempor arcu..</a></div>
                                <div class="right">20.49</div>
                                <div class="clearer">&nbsp;</div>
                            </li>
                            ...
                            -->
                        </ul>
                    </div>

                </div>

                <div class="section network-section">
                    <!-- Same as "section" -->
                </div>

            </div>

            <div class="clearer">&nbsp;</div>

        </div>

        <div id="dashboard">

            <div class="column left" id="column-1">
                <div class="column-content">
                    <div class="column-title"></div>
                </div>
            </div>

            <div class="column left" id="column-2">
                <div class="column-content">
                    <div class="column-title"><!--Follow Us (RSS)--></div>
                    <ul class="plain-list">

                    </ul>
                </div>
            </div>

            <div class="column left" id="column-3">
                <div class="column-content">
                    <div class="column-title"><!--Help &amp; Support--></div>
                </div>
            </div>

            <div class="column right" id="column-4">
                <div class="column-content">
                    <div class="column-title"><!--Get in touch--></div>
                </div>
            </div>

            <div class="clearer">&nbsp;</div>

        </div>

        <?php include 'footer.php'; ?>

    </div>
</div>

</body>

</html>
