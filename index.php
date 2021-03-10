<?php
  get_header();
  global $wp;
  $current_url = home_url(add_query_arg(array(),$wp->request));
?>

<div class="profile">
  <section id="wrapper">
    <header id="header">
      <h1>Jecvay Notes</h1>
    </header>
  </section>
</div>

<?php while (have_posts()) : the_post(); if (in_category("说说")) : continue; endif;?>

  <div class="summary">
    <div class="summary-title">
      <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
    </div>
    <div class="summary-content">
      <?php the_content(''); ?>
    </div>
    <div class="summary-read-more">
      <span><a href="<?php the_permalink() ?>">- Read More -</a></span>
    </div>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>