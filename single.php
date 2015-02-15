<?php get_header(); ?>
  <div class="row">
    <div class="col-md-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2 style="margin: 30px 0;"><?php the_title() ?></h1>
        <span class="label label-info"><?php the_time('F j, Y | H:i'); ?></span>
        <!--<li class="comment-count"><?php  comments_popup_link('0 条评论', ' 1 条评论', '% 条评论');  ?></li>-->
        <p><?php the_content(); ?></p>
      <?php endwhile; endif;?>
      <?php comments_template(); ?>
    </div>
  </div>
<?php get_footer(); ?>
