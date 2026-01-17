<?php
  get_header();
  global $wp;
  $current_url = home_url(add_query_arg(array(),$wp->request));
?>


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section id="wrapper" class="post">
    <article>
      <header>
        <h1><?php the_title() ?></h1>
      </header>
      <section id="post-body">
        <?php the_content(); ?>
        <hr>
        <div class="this-post"><a href=<?php echo "$current_url"?>>本文链接</a></div>
      </section>
    </article>
    <?php comments_template(); ?>
  </section>
  <?php endwhile; endif;?>
<?php get_footer(); ?>
