<?php

/**
 * 
 * @package Maupassant
 * @author cho, grafting by mufeng
 * @version 1.13
 * @link http://pagecho.com
 */

	// 定义主题路径
	define( "THEMEPATH", get_bloginfo('template_directory') );

	// 定义主题版本号
	define( "THEMEVERSION", '1.0' );

	// 添加RSS
	add_theme_support( 'automatic-feed-links' );

	// 定义菜单
	register_nav_menus(
		array(
			'primary' => __('主题菜单')
		)
	);

	// Enqueue style-file, if it exists.
	add_action('wp_enqueue_scripts', 'ms_scripts');
	function ms_scripts() {
		global $wp_scripts;
		wp_enqueue_style('style', get_bloginfo('stylesheet_url'), array(), THEMEVERSION, 'screen');
/*
		wp_enqueue_style('normalize', THEMEPATH . '/css/normalize.css', array(), THEMEVERSION, 'screen');

		wp_register_script( 'html5shiv', 'http://x.papaapp.com/farm1/a571d2/8dda131d/html5shiv.js',array(), '3.7.1');
		$wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('html5shiv');
*/
  }

	// Maupassant's widgets
	function ms_widgets() {
		register_sidebar(array(
			'name' => 'sidebar1',
			'description' => __('主题侧边栏'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
	add_action( 'widgets_init', 'ms_widgets' );	

	// Pagenavi of archive and index part
	function pagenavi( $p = 5 ) {
		if ( is_singular() ) return;
		global $wp_query, $paged;
		$max_page = $wp_query->max_num_pages;
		if ( $max_page == 1 ) return;
		echo '<nav><ul class="pagination">';

		if ( empty( $paged ) ) $paged = 1;
		if ( $paged > 1 ) p_link( $paged - 1, '&laquo; Previous', '&laquo; Previous' );
		if ( $paged > $p + 2 ) echo '<li><span>...</span></li>';
		for( $i = $paged - $p; $i <= $paged + $p; $i++ ) {
			if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li class='current'><span>{$i}</span></li>" : p_link( $i );
		}
		if ( $paged < $max_page - $p - 1 ) echo '<li><span>...</span></li>';
		if ( $paged < $max_page ) p_link( $paged + 1,'Next &raquo;', 'Next &raquo;' );

		echo '</ul></nav>';
	}

	function p_link( $i, $title = '', $linktype = '' ) {
		if ( $title == '' ) $title = "第 {$i} 页";
		if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }
		echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a></li>";
	}

	function ms_head() {
	?><?php if ( is_home() ) { ?><title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title><?php } ?>
<?php if ( is_search() ) { ?><title><?php _e('搜索&#34;');the_search_query();echo "&#34;";?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_single() ) { ?><title><?php echo trim(wp_title('',0)); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_author() ) { ?><title><?php wp_title(""); ?> - <?php bloginfo('name'); ?></title><?php } ?>	
<?php if ( is_archive() ) { ?><title><?php single_cat_title(); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_year() ) { ?><title><?php the_time('Y'); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_month() ) { ?><title><?php the_time('F'); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_page() ) { ?><title><?php echo trim(wp_title('',0)); ?> - <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_404() ) { ?><title>404 - <?php bloginfo('name'); ?></title><?php } ?>
<?php
		global $post;
		if (is_home()){
			$keywords = 'Jecvay,刘杰威,计算机';
			$description = 'Jecvay Notes | Gook luck and Have fun';
		}elseif (is_single()){
			$keywords = get_post_meta($post->ID, "keywords", true);
			if($keywords == ""){
				$tags = wp_get_post_tags($post->ID);
				foreach ($tags as $tag){
					$keywords = $keywords.$tag->name.",";
				}
				$keywords = rtrim($keywords, ', ');
			}
			$description = get_post_meta($post->ID, "description", true);
			if($description == ""){
				if($post->post_excerpt){
					$description = $post->post_excerpt;
				}else{
					$description = mb_strimwidth(strip_tags($post->post_content),0,200,'');
				}
			}
		}elseif (is_page()){
			$keywords = get_post_meta($post->ID, "keywords", true);
			$description = get_post_meta($post->ID, "description", true);
		}elseif (is_category()){
			$keywords = single_cat_title('', false);
			$description = category_description();
		}elseif (is_tag()){
			$keywords = single_tag_title('', false);
			$description = tag_description();
		}
		$keywords = trim(strip_tags($keywords));
		$description = trim(strip_tags($description));
		?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="author" content="Jecvay">
    <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />
    
		<?php wp_head();?>
	<?php 
	}

	function ms_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment;
	?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body">
				<div class="comment-author">
					<?php echo get_avatar( $comment, $size = '32'); ?>
					<cite class="fn"><?php printf(__('%s'), get_comment_author_link()) ?></cite>
    			</div>
    			<div class="comment-meta">
					<?php printf(__('%s'), get_comment_date("Y/m/d") ) ?>
            	</div>
    			<div class="comment-content">
    				<p><?php comment_text() ?></p>
    			</div>
    			<div class="comment-reply">
    				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('回复')))) ?>
    			</div>
			</div>
	<?php
	}	

/* WordPress關閉Google Open Sans字體開始（由AREFLY.COM製作） */
function remove_open_sans() {
	wp_deregister_style('open-sans');
	wp_register_style('open-sans', false);
	wp_enqueue_style('open-sans', '');
}
add_action('init', 'remove_open_sans');
/* WordPress關閉Google Open Sans字體結束（由AREFLY.COM製作） */

?>
