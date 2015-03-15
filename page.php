<?php get_header(); ?>

<div class="row">
  <div class="col-md-12" style="padding: 0px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="panel panel-default panel-body" style="padding: 50px; padding-top: 30px;">
        <div class="row"><div class="col-md-12 text-center">
          <h1 style="margin: 30px 0;"><?php the_title() ?></h2>
        </div></div>
        <div class="row">
          <div class="col-md-12 text-right">
          </div>
        </div>
      </div>
      
      <div class="panel panel-default panel-body article">
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    <?php endwhile; endif;?>
    <div class="panel panel-default panel-body comments">
      <?php comments_template(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
