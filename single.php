<?php 
  get_header(); 
  global $wp;
  $current_url = home_url(add_query_arg(array(),$wp->request));
?>
  <div class="row">
    <div class="col-md-12" style="padding: 0px;">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="panel panel-default panel-body" style="padding: 50px; padding-top: 30px;">
          <div class="row"><div class="col-md-12">
            <h2 style="margin: 30px 0;"><?php the_title() ?></h2>
          </div></div>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <h4><span class="label label-info"><?php the_time('F j, Y | H:i'); ?></span></h4>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default panel-body article" style="padding: 50px;">
          <p>
            <?php the_content(); ?>
            <p>( 转载请注明: <a href=<?php echo "$current_url"?>>Jecvay Notes</a> )</p>
          </p>
        </div>
      <?php endwhile; endif;?>
      <div class="panel panel-default panel-body" style="padding: 50px;">
        <?php comments_template(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
