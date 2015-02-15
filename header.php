<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php ms_head(); ?>
<link id="favicon" href="http://jecvay.com/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name ">
                <a id="logo" href="<?php bloginfo('url'); ?>">
                   <?php bloginfo('name'); ?>
                </a>
        	    <p class="description"><?php bloginfo('description'); ?></p>
            </div>
            <div>
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'       => 'nav',
                    'container_class' => 'clearfix',
                    'container_id'    => 'nav-menu'                   
                )); ?>
            </div>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group">
