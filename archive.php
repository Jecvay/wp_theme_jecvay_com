<?php get_header(); ?>
<div class="profile">
  <section id="wrapper">
    <header id="header">
      <h1>Jecvay Notes</h1>
    </header>
  </section>
</div>
<div class="list-title">
    <?php the_post(); ?>
    <?php if ( is_month() ) : ?>
        <h2><?php printf('%s', get_the_time('Y年F月')); ?></h2>
    <?php elseif ( is_year() ) : ?>
        <h2><?php printf('%s', get_the_time('Y年')); ?></h2>
    <?php elseif ( is_category() ) : ?>
        <h2><?php printf('%s',single_cat_title('',false)); ?></h2>
    <?php elseif ( is_tag() ) : ?>
        <h2><?php printf('%s',single_tag_title('',false)); ?></h2>
    <?php endif; ?>
    <?php rewind_posts(); ?>
</div>
<section id="wrapper" class="home">
    <div class="archive">
    <?php 
        global $wp_query;
        $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 20 ] );
        query_posts( $args );
        $day_check = '';
    ?>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php
        if ($day_check == '') {
            $day_check = $day = get_the_date('Y');
            echo '<h2>' . $day . '</h2>';
        }
        $day = get_the_date('Y');
        if ($day != $day_check) {
            echo '</div> <div class="archive"><h2>';
            echo $day;
            echo '</h2>';
            $day_check = $day;
        }
    ?>
    <ul>
        <div class="post-item">
            <a href="<?php the_permalink() ?>" class="post-link">
                <?php the_title() ?>
            </a>
            <div class="post-time"><?php the_time('Y-m-d'); ?></div>
        </div>
    </ul>
    <?php endwhile; ?>


    </div>
    <?php endif; ?>
    <?php pagenavi();?>
</section>


<?php get_footer(); ?>
