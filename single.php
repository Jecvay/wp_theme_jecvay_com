<?php get_header(); ?>
  <div class="row">
    <div class="col-md-12">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="panel panel-default panel-body" style="padding-bottom: 50px;">
          <div class="row"><div class="col-md-12">
            <h2 style="margin: 30px 0;"><?php the_title() ?></h2>
          </div></div>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <h4><span class="label label-info"><?php the_time('F j, Y | H:i'); ?></span></h4>
            </div>
          </div>
        </div>
        <p><?php the_content(); ?></p>
      <?php endwhile; endif;?>
      <?php comments_template(); ?>
    </div>
  </div>
<?php get_footer(); ?>
