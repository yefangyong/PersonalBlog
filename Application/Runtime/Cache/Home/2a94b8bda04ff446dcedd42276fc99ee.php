<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo ($webkey[0]['word']); ?>" />
    <meta name="description" content="<?php echo ($webkey[0]['description']); ?>" />
    <meta name="baidu-site-verification" content="8RGa3lawHP" />
    <link rel="shortcut icon" type="image/ico" href="/guest2/Public/home/images/favicon.ico">
    <title><?php echo ($web[0]['webname']); ?></title>
    <link href="/guest2/Public/home/css/base.css" rel="stylesheet">
    <link href="/guest2/Public/home/css/index.css" rel="stylesheet">
    <link href="/guest2/Public/home/css/media.css" rel="stylesheet">
    <link rel="stylesheet" href="/guest2/Public/admin/css/page.css">
    <script src="/guest2/Public/home/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
    <script src="/guest2/Public/home/js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
    <!--Include flickerplate-->
    <link href="/guest2/Public/home/css/flickerplate.css"  type="text/css" rel="stylesheet">

    <style>
        a{color:#769B09;}
    </style>

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="js/modernizr.js"></script>
    <![endif]-->
</head>
<body>
<div class="ibody">
    <header>
        <h1><?php echo ($web[0]['webname']); ?></h1>
        <h2><?php echo ($web[0]['depict']); ?></h2>
        <div class="logo" style="background: url('<?php echo ($logo[0]['pic']); ?>') no-repeat scroll center center #000;">
            <a href="<?php echo ($web[0]['website']); ?>" src="<?php echo ($logo[0]['pic']); ?>" class="jase"></a>
        </div>
        <nav id="topnav">
            <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["linkaddress"]); ?>"><?php echo ($nav["designation"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </nav>
    </header>
  <article>
    <div class="flicker-example" data-block-text="true">
  <ul>
    <?php if(is_array($solid)): $i = 0; $__LIST__ = $solid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$solid): $mod = ($i % 2 );++$i;?><li data-background="/guest2/Uploads/solid/<?php echo ($solid["pic"]); ?>">
      <div class="flick-title"><?php echo ($solid["title"]); ?></div>
      <div class="flick-sub-text"><?php echo ($solid["character"]); ?></div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php if(is_array($essay)): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay): $mod = ($i % 2 );++$i;?><div class="blogs">
          <h3><a href="<?php echo U(Home.'/News/index',array('id'=>$essay['id']));?>"><?php echo ($essay["title"]); ?></a></h3>
          <figure><img src="<?php echo ($essay["pic"]); ?>" ></figure>
          <ul>
            <p><?php echo (msubstr($essay["content"],0,100)); ?></p>
            <a href="<?php echo U(Home.'/News/index',array('id'=>$essay['id']));?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
          </ul>
          <p class="autor"><span>作者：<?php echo ($essay["zuozhe"]); ?></span><span>分类：【<a href="<?php echo U(GROUP_NAME.'/Section/index',array('id'=>$essay['cat_id']));?>"><?php echo ($essay["fenl"]); ?></a>】</span><span>浏览（<a href="javascript:;"><?php echo ($essay["browse"]); ?></a>）</span></p>
          <div class="dateview"><?php echo (date("Y-m-d",$essay["time"])); ?></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

      <div class="pagination"><?php echo ($page); ?></div>

    </div>
  </article>
  <aside>
    <div class="avatar">
      <a href="<?php echo ($web[0]['website']); ?>/index.php/About" style="background: url('<?php echo ($about[0]['pic']); ?>') no-repeat scroll 0 0 / 160px 160px rgba(0, 0, 0, 0);">
        <span><?php echo ($about[0]['names']); ?></span>
      </a>
    </div>
    <div class="topspaceinfo">
      <h1><?php echo ($about[0]['depict']); ?></h1>
      <p><?php echo ($about[0]['ydepict']); ?></p>
    </div>
    <div class="about_c">
      <p>网名：<?php echo ($about[0]['names']); ?></p>
      <p>职业：<?php echo ($about[0]['occupation']); ?> </p>
      <p>籍贯：<?php echo ($about[0]['place']); ?></p>
      <p>电话：<?php echo ($about[0]['tel']); ?></p>
      <p>邮箱：<?php echo ($about[0]['email']); ?></p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php if(is_array($newessay)): $i = 0; $__LIST__ = $newessay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newessay): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U(Home.'/News/index',array('id'=>$newessay['id']));?>"><?php echo ($newessay["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
        <?php if(is_array($groom)): $i = 0; $__LIST__ = $groom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$groom): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U(Home.'/News/index',array('id'=>$groom['id']));?>"><?php echo ($groom["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <?php if(is_array($copy)): $i = 0; $__LIST__ = $copy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$copy): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($copy["linkaddress"]); ?>"><?php echo ($copy["designation"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p><?php echo ($web[0]['copyright']); ?></p>
        <p><?php echo ($web[0]['number']); ?></p>
        </p>
      </ul>
    </div>
  </aside>

  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script src="/guest2/Public/home/js/flickerplate.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $('.flicker-example').flicker();
  });
</script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
<script>
  $(function(){
      $('.jase').mouseenter(function(){
        $('.logo').css({"background":"url('/guest2/Public/home/images/home.png') no-repeat scroll center center #000"});
      })
      $('.jase').mouseleave(function(){
        var pic = $(this).attr('s');
        $('.logo').css({"background":"url('/guest2/Uploads/logo/"+pic+"') no-repeat scroll center center #000"});

      })
  })

$(document).ready(function(){  
    $(document).bind("contextmenu",function(e){   
          return false;   
    });
});


</script>

</html>