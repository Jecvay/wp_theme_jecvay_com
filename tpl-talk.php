<?php 
/*
Template Name: 说说 页面
*/
get_header();
?> 

<div class="row">
  <div class="col-md-12" style="padding: 0px;">
      <div class="panel panel-default panel-body article">
        <?php $the_query = new WP_Query( 'posts_per_page=-1&ignore_sticky_posts=1' ); 
            $year=0; $mon=0; $i=0; $j=0;   
            $output = '<div id="archives">';   
            while ( $the_query->have_posts() ) : $the_query->the_post();
								if (!in_category("说说")) {
										// 筛选出说说分类的文章
								    continue;
								}
                $year_tmp = get_the_time('Y');  
                $mon_tmp = get_the_time('n'); 
                 //var_dump($year_tmp);   
                 $y=$year; $m=$mon;   
                 if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
                 if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
                 if ($year != $year_tmp) {   
                     $year = $year_tmp;   
                     $output .= '<h3 style="margin: 50px 0 30px 0"><span class="label label-default">'. $year .' 年</span></h3>'; //输出年份   
                 }   
                 $output .= '<ul class="al_mon_list" style="margin: 10px 0 10px 0;"><li style="padding: 2px;"><a href="'. get_permalink() .'">'.get_the_time('n-d H:i').'</a> &nbsp &nbsp'. get_the_content('') .'</li></ul>'; //输出文章日期和标题   
            endwhile;
            wp_reset_postdata();
            $output .= '</ul></li></ul></div>';   
						$output .= '<div style="margin: 0 0 100px 0;"></div>';
            echo $output;   
          ?>
      </div>
  </div>
</div>

<?php get_footer(); ?>
