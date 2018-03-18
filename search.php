<?php get_header(); ?>
<div class="col-8" id="main">
	<div class="res-cons">
        <h3 class="archive-title">包含关键字 <?php the_search_query();?> 的文章</h3>
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <h2 class="post-title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>
                <ul class="post-meta">
                    <li><?php the_time('F j, Y'); ?></li>
                    <li class="comment-count"><?php comments_popup_link('0 条评论', ' 1 条评论', '% 条评论'); ?></li>
                </ul>
                <div class="post-content">
                    <?php the_content('阅读剩余部分 -'); ?>
                </div>
            </article>
		<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        <?php pagenavi();?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
