<?php get_header(); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post">
				<h1 class="post-title"><?php the_title() ?></h1>

					<span class="label label-info"><?php /*the_time('F j, Y H:i');*/ ?></span>

				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif;?>
		<?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>
