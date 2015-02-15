<div id="secondary">
	<section class="widget">
        <form id="search" method="get" action="<?php bloginfo('url'); ?>">
			<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
			<button type="submit" class="submit"><?php _e('搜索'); ?></button>
        </form>
    </section>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) :?><?php endif;?>    
</div>