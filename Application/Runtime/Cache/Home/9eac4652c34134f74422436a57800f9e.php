<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($webkey[0]['word']); ?>" />
<meta name="description" content="<?php echo ($webkey[0]['description']); ?>" />
<meta name="baidu-site-verification" content="8RGa3lawHP" />
<title><?php echo ($web[0]['webname']); ?> - <?php echo ($Powered); ?></title>
<link href="/guest2/Public/home/css/base.css" rel="stylesheet">
<link href="/guest2/Public/home/css/style.css" rel="stylesheet">
<link href="/guest2/Public/home/css/index.css" rel="stylesheet">
<link href="/guest2/Public/home/css/media.css" rel="stylesheet">
<link rel="stylesheet" href="/guest2/Public/admin/css/page.css">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<style>
  a{color:#769B09;}
</style>
</head>
<body>
<div class="ibody">
  <header>
    <h1><?php echo ($web[0]['webname']); ?></h1>
    <h2><?php echo ($web[0]['depict']); ?></h2>
    <div class="logo" style="background: url('<?php echo ($logo[0]['pic']); ?>') no-repeat scroll center center #000;position: absolute;z-index: 100;">
      <a href="<?php echo ($web[0]['website']); ?>" s="<?php echo ($logo[0]['pic']); ?>" class="jase"></a>
    </div>
    <nav id="topnav">
      <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><a href="<?php echo ($nav["linkaddress"]); ?>"><?php echo ($nav["designation"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="<?php echo ($web[0]['website']); ?>">首页</a>><a href="<?php echo U(Home.'/Section/index',array('id'=>$navname[0]['id']));?>"><?php echo ($navname[0]['designation']); ?></a></h2>
    <div class="bloglist">
        <?php if(is_array($essay)): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay): $mod = ($i % 2 );++$i;?><div class="blogs">
                <h3><a href="<?php echo U(Home.'/News/index',array('id'=>$essay['id']));?>"><?php echo ($essay["title"]); ?></a></h3>
                <figure><img src="<?php echo ($essay["pic"]); ?>" /></figure>
                <ul>
                    <p><?php echo (msubstr($essay["content"],0,100)); ?></p>
                    <a href="<?php echo U(Home.'/News/index',array('id'=>$essay['id']));?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                </ul>
                <p class="autor"><span>作者：<?php echo ($essay["zuozhe"]); ?></span><span>分类：【<a href="<?php echo U(Home.'/Section/index',array('id'=>$essay['cat_id']));?>"><?php echo ($essay["fenl"]); ?></a>】</span><span>浏览（<a href="javascript:;"><?php echo ($essay["browse"]); ?></a>）</span></p>
                <div class="dateview"><?php echo (date("Y-m-d",$essay["time"])); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    
      <div class="pagination"><?php echo ($page); ?></div>
   
  </article>
  <aside>
    <div class="rnav">
      <?php if(is_array($fenlie)): $j = 0; $__LIST__ = $fenlie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlie): $mod = ($j % 2 );++$j;?><li class="<?php echo ($fenlie["yanse"]); ?>"><a href="<?php echo U(Home.'/Section/index',array('id'=>$fenlie['id']));?>"><?php echo ($fenlie["designation"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <?php if(is_array($Clicks)): $l = 0; $__LIST__ = $Clicks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Clicks): $mod = ($l % 2 );++$l;?><li><span <?php if($l == 1): ?>class="num1"<?php elseif($l == 2): ?>class="num2"<?php elseif($l == 3): ?>class="num3"<?php else: endif; ?> ><?php echo ($l); ?></span><a href="<?php echo U(Home.'/News/index',array('id'=>$Clicks['id']));?>"><?php echo ($Clicks["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
        <p>推荐文章</p>
      </h2>
      <ul>
         <?php if(is_array($groom)): $i = 0; $__LIST__ = $groom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$groom): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U(Home.'/News/index',array('id'=>$groom['id']));?>"><?php echo ($groom["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      
      
      
    </div>
    <div class="copyright">
      <ul>
        <p> <?php echo ($web[0]['copyright']); ?></a></p>
        <p><?php echo ($web[0]['number']); ?></p>
        </p>
      </ul>
    </div>
  </aside>
   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
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