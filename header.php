<!DOCTYPE html>
<?php
   //add_filter('show_admin_bar', '__return_false'); // hide admin bar
?>
<html lang="zh-CN">
	<head>
	<?php ms_head(); /* 生成 keyword 和 description icon 等等信息.*/ ?>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53077626-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() { dataLayer.push(arguments); }
			gtag('js', new Date());
			gtag('config', 'UA-53077626-1');
		</script>
		<script>
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "https://hm.baidu.com/hm.js?1652508549bc531681d6e07c46680834";
			  var s = document.getElementsByTagName("script")[0];
			  s.parentNode.insertBefore(hm, s);
			})();
		</script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/static/css/style.css";?>">
    <link rel=preconnect href=https://fonts.gstatic.com crossorigin><link rel=stylesheet href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400;500;700&family=Source+Code+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Cinzel+Decorative:wght@700&display=swap" media=print onload="this.media='all'">
	<noscript><link rel=stylesheet href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@400;500;700&family=Source+Code+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Cinzel+Decorative:wght@700&display=swap"></noscript>
	</head>

  <body>
    <nav class="main-nav">
    <?php echo strip_tags(wp_nav_menu( array( 
      'theme_location' 	  => 'primary',
      'container' 		    => '',
      'echo'            	=> false,
      'items_wrap'      	=> '%3$s',
      'depth'           	=> 0,
      'before'            => '<span class="shuxian">|</span>',
      )), '<a><span>'); ?>
    </nav>
