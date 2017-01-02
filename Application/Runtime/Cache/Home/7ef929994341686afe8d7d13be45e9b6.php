<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($list[0]['keyword']); ?>" />
<meta name="description" content="<?php echo ($list[0]['description']); ?>" />
<meta name="baidu-site-verification" content="8RGa3lawHP" />
<link rel="shortcut icon" type="image/ico" href="/guest2/Public/home/images/favicon.ico">
<title><?php echo ($web[0]['webname']); ?> - <?php echo ($Powered); ?></title>
<link href="/guest2/Public/home/css/base.css" rel="stylesheet">
<link href="/guest2/Public/home/css/about.css" rel="stylesheet">
<link href="/guest2/Public/home/css/style.css" rel="stylesheet">
<link href="/guest2/Public/home/css/media.css" rel="stylesheet">
<link rel="stylesheet" href="/guest2/Public/admin/css/page.css">
<link rel="stylesheet" href="/guest2/Public/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">
<script src="/guest2/Public/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
<script>
  SyntaxHighlighter.all();
</script>
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
<link href="/guest2/Public/home/css/style1.css" rel="stylesheet" type="text/css" />
  <article>
    <h2 class="about_h">您现在的位置是： <a href="<?php echo ($web[0]['website']); ?>">首页</a>><a href="">The Time Axis</a></h2>
    <div class="content">
  <div class="wrapper">
    <div class="light"><i></i></div>
    <hr class="line-left">
    <hr class="line-right">
    <div class="main">
      <h1 class="title"><?php echo ($web[0]['webname']); ?>日志</h1>
      <?php if(is_array($year)): $i = 0; $__LIST__ = $year;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$year): $mod = ($i % 2 );++$i;?><div class="year">
        <h2><a href="#" name="<?php echo ($year["id"]); ?>" id="<?php echo ($year["id"]); ?>"><?php echo ($year["year"]); ?>年<i></i></a></h2>
        <div class="list">
          <ul>
            <?php if(is_array($year["son"])): $i = 0; $__LIST__ = $year["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yearson): $mod = ($i % 2 );++$i;?><li <?php if($yearson['style'] == 0): ?>class="cls highlight"<?php else: ?>class="cls"<?php endif; ?>>
              <p class="date"><?php echo (date("m月d日",$yearson["time"])); ?></p>
              <p class="intro"><?php echo ($yearson["title"]); ?></p>
              <p class="version">&nbsp;</p>
              <div class="more">
                <?php echo ($yearson["content"]); ?>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      
      
    
      
    </div>
  </div>
</div>
  </article>
  <aside>
    <div class="rnav">
      <?php if(is_array($fenlie)): $j = 0; $__LIST__ = $fenlie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlie): $mod = ($j % 2 );++$j;?><li class="<?php echo ($fenlie["yanse"]); ?>"><a href="#<?php echo ($fenlie["id"]); ?>"><?php echo ($fenlie["year"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
        <p> <?php echo ($web[0]['copyright']); ?></p>
        <p><?php echo ($web[0]['number']); ?></p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="/guest2/Public/home/js/silder.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(".main .year .list").each(function(e, target){
  var $target=  $(target),
  $ul = $target.find("ul");
  $target.height($ul.outerHeight()), $ul.css("position", "absolute");
}); 
$(".main .year>h2>a").click(function(e){
  e.preventDefault();
  $(this).parents(".year").toggleClass("close");
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