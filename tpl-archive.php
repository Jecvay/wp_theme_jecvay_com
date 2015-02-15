<?php 
/*
Template Name: 归档 页面
*/
get_header();
?> 
<div class="col-8" id="main">
	<div class="res-cons">
            <article class="post">
                <div class="post-content-pages">
        			<?php $the_query = new WP_Query( 'posts_per_page=-1&ignore_sticky_posts=1' ); 
                        $year=0; $mon=0; $i=0; $j=0;   
                        $output = '<div id="archives">';   
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                            $year_tmp = get_the_time('Y');  
                            $mon_tmp = get_the_time('n'); 
                             //var_dump($year_tmp);   
                             $y=$year; $m=$mon;   
                             if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
                             if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
                             if ($year != $year_tmp) {   
                                 $year = $year_tmp;   
                                 $output .= '<span class="label label-default">'. $year .' 年</span><ul class="al_mon_list" style="margin: 10px 0 40px 0;">'; //输出年份   
                             }   
                             $output .= '<li>'.get_the_time('n-d').'<a href="'. get_permalink() .'"> '. get_the_title() .'</a> </li>'; //输出文章日期和标题   
                        endwhile;
                        wp_reset_postdata();
                        $output .= '</ul></li></ul></div>';   
                        echo $output;   
                    ?>
                </div>
    		</article>
	</div>
</div>
<?php get_footer(); ?>
