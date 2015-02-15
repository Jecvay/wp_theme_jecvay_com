<?php
   //add_filter('show_admin_bar', '__return_false'); // hide admin bar
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php ms_head(); /* 生成 keyword 和 description icon 等等信息.*/ ?>
    <link href='<?php echo get_template_directory_uri()."/bs/css/bootstrap.min.css";?>' rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <nav id="site-navigation" class="navbar navbar-inverse" role="navigation" style="margin-top: 10px;">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url');?>"><?php bloginfo( 'name' ); ?></a>
        </div>
      <!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
      
        <div class="navbar-right">
        <?php wp_nav_menu( array( 
          'theme_location' 	  => 'primary',
          'container' 		    => 'div',
          'container_class' 	=> 'collapse navbar-collapse',
          'container_id'    	=> 'main-navbar-collapse',
          'menu_class'      	=> 'nav navbar-nav',
          'menu_id'         	=> '',
          'echo'            	=> true,
          'fallback_cb'     	=> 'wp_page_menu',
          'before'          	=> '',
          'after'           	=> '',
          'link_before'     	=> '',
          'link_after'      	=> '',
          'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           	=> 0,
          'walker'          	=> ''
          )); ?>
         </div>
        
      </div>
      </nav><!-- #site-navigation -->
    
  

      <div class="container-fluid" id="body">
      

    
    
    
