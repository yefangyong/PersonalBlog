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
  <article>
    <h3 class="about_h">您现在的位置是：<a href="<?php echo ($web[0]['website']); ?>">首页</a>><a href="">About Us</a></h3>
    <div class="about">
      <?php echo ($abouts[0]['content']); ?>
    </div>
  </article>
  <aside>
    <div class="avatar">
      <a href="javascript:;" style="background: url('<?php echo ($about[0]['pic']); ?>') no-repeat scroll 0 0 / 160px 160px rgba(0, 0, 0, 0);">
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
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=cQYGBl9JQ0RGQEdISEQxAABfEh4c" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="<?php echo ($web[0]['webname']); ?> - <?php echo ($Powered); ?>"></a></p>
      <!-- <p>  -->
        <!--以下是QQ邮件列表订阅嵌入代码-->
        <!-- <a target="_blank" href="http://list.qq.com/cgi-bin/qf_invite?id=65fb9b3618916f162973471ebc5b97ff786efae0ec9a863e"><img border="0" alt="填写您的邮件地址，订阅我们的精彩内容：" src="http://rescdn.list.qq.com/zh_CN/htmledition/images/qunfa/manage/picMode_light_m.png" /></a> </p> -->
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