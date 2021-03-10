<?php get_header(); ?>


    <?php the_post(); ?>
      <section id="wrapper" class="post">
    <article>
      <header>
          <h1 style="margin: 30px 0;"><?php the_title() ?></h2>

      
       <section id="post-body">
          <?php the_content(); ?>
       </section>
    <?php ?>

    </article>
      <?php comments_template(); ?>

</section>
<?php get_footer(); ?>
