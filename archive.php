<?php get_header(); ?>
<div class="col-8" id="main">
	<div class="res-cons">
        <h3 class="archive-title">
        <?php the_post(); ?>
            <?php if ( is_month() ) : ?>
                <?php printf('%s 发布的文章', get_the_time('Y年F月')); ?>
            <?php elseif ( is_year() ) : ?>
                <?php printf('%s 发布的文章', get_the_time('Y年')); ?>
            <?php elseif ( is_category() ) : ?>
                <?php printf('分类 %s 下的文章',single_cat_title('',false)); ?>
            <?php elseif ( is_tag() ) : ?>
                <?php printf('标签 %s 下的文章',single_tag_title('',false)); ?>
            <?php endif; ?>
        <?php rewind_posts(); ?>
        </h3>
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="post-title">
                      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  </h2>

                      <span class="label label-info" style="margin: 20px;"><?php the_time('F j, Y'); ?></span>
                      <!--<li class="comment-count"><?php /*comments_popup_link('0 条评论', ' 1 条评论', '% 条评论'); */?></li>-->

                  <div class="post-content">
                      <?php the_content('<br>阅读剩余部分 >>'); ?>
                  </div>
                </div>
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

<?php get_footer(); ?>
