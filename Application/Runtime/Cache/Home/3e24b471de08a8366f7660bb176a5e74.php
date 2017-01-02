<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
<link rel="stylesheet" href="/guest2/Public/kindeditor/plugins/code/prettify.css">

  <article>
    <h2 class="about_h">您现在的位置是：<a href="<?php echo ($web[0]['website']); ?>">首页</a>><a href="<?php echo U(Home.'/Section/index',array('id'=>$list[0]['cat_id']));?>"><?php echo ($list[0]['fenl']); ?></a>><a href=""><?php echo ($list[0]['title']); ?></a></h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo ($list[0]['title']); ?></h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo (date("Y-m-d",$list[0]['time'])); ?></span><span>编辑：<?php echo ($list[0]['zuozhe']); ?></span><span>浏览（<?php echo ($list[0]['browse']); ?>）</span></p>
      <ul class="infos" style="width: 700px;word-break: break-word;">
        <?php echo ($list[0]['content']); ?>
      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：<?php echo ($list[0]['keyword']); ?></p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a <?php if($prev[0]['id'] == ''): ?>href=""<?php else: ?> href="<?php echo U(Home.'/News/index',array('id'=>$prev[0]['id']));?>"<?php endif; ?>><?php if($prev[0]['title'] == ''): ?>没有了<?php else: echo ($prev[0]['title']); endif; ?></a></p>
        <p>下一篇：<a <?php if($next[0]['id'] == ''): ?>href=""<?php else: ?> href="<?php echo U(Home.'/News/index',array('id'=>$next[0]['id']));?>"<?php endif; ?>><?php if($next[0]['title'] == ''): ?>没有了<?php else: echo ($next[0]['title']); endif; ?></a></p>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <?php if(is_array($interfix)): $i = 0; $__LIST__ = $interfix;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$interfix): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U(Home.'/News/index',array('id'=>$interfix['id']));?>" title="<?php echo ($interfix["title"]); ?>"><?php echo ($interfix["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
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
        <p> <?php echo ($web[0]['copyright']); ?></p>
        <p><?php echo ($web[0]['number']); ?></p>
      </ul>
    </div>
  </aside>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script src="/guest2/Public/kindeditor/plugins/code/prettify.js"></script>

  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
<script>
  prettyPrint();
</script>
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