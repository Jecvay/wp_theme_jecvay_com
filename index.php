<!DOCTYPE html>
<html>
  <head>
    <?php ms_head(); /* 生成 keyword 和 description icon 等等信息.*/ ?>
    <link href='<?php echo get_template_directory_uri()."/bs/css/bootstrap.min.css";?>' rel="stylesheet">
    <link href='<?php echo get_template_directory_uri()."/style.css";?>' rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      p {
        line-height: 30px;
        padding: 5px;
      }
    </style>
    <script>
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?1652508549bc531681d6e07c46680834";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
      })();
    </script>
  </head>
<body>
<div class="container" id="top-top" style="margin-top: 30px">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body" style="padding: 30px;">
          <?php if (have_posts()) : the_post();?>
            <div class="page-header"  style="margin: 0px; ">
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            </div>
            <p>
              <?php the_content(''); ?>
              <h4><a href="<?php the_permalink() ?>"><strong>阅读全文 >></strong></a></h4>
            </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-body"  style="padding-left: 30px; min-height: 250px;">
          <h4 style="margin-top: 0px;"><span class="label label-default">最新文章</span><h3>
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h5 style="padding-left: 10px;"><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br /></h5>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
    
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-body" style="min-height: 250px;">
          <div class="row">
            <div class="col-md-8" style="padding-left: 30px;">
              <h2 style="font-family: cursive;"> <?php bloginfo('name'); ?> </h2>
              <ul class="list-unstyled" style="padding-left: 20px;">
                <li><a href="/about-me">关于我</a></li>
                <li><a href="/archive">文章: <?php echo wp_count_posts()->publish; ?> 篇</a></li>
                <li>评论: <?php echo $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments");?> 条 </li>
                <li><a href="/about-site">运行: <?php echo floor((time()-strtotime("2014-07-20"))/86400); ?> 天 </a></li>
              </ul>
              <h5 class="text-right" style="font-family: cursive;"><?php bloginfo('description'); ?></h5>
              
            </div>
            <div class="col-md-4">
              <img src="/tools/self.jpg" class="img-circle" style="width: 80px; height: 80px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src='<?php echo get_template_directory_uri()."/bs/jquery/jquery-1.11.2.min.js";?>'></script>
    <script src='<?php echo get_template_directory_uri()."/bs/js/bootstrap.min.js";?>'></script>
    <script src='<?php echo get_template_directory_uri()."/bs/js/ie10-viewport-bug-workaround.js";?>'></script>
 <?php wp_footer();?>

  <script>
    var setMarginTop = function() {
      if ($(window).height() < 676) {
        $("#top-top").attr("style", "margin-top: 10px;");
      } else {
        var style_str = "margin-top: " + ($(window).height() - 666) * 0.4 + "px;";
        $("#top-top").attr("style", style_str);
      }
    };

    $(function() {
      setMarginTop();
      $(window).resize(setMarginTop);
    });
  </script>

</body>

</html>
