<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/ico" href="/guest2/Public/home/images/favicon.ico">
    <title><?php echo ($web[0]['webname']); ?> - 后台管理</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/guest2/Public/admin/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/guest2/Public/admin/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span style="font-size:18px"><?php echo ($web[0]['webname']); ?></span></a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="点击菜单栏隐藏">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    <!--
                     <li class="dropdown messages">
                        <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>您有
                                    <strong>5</strong>新的 消息</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/guest2/Public/admin/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">James Bagian</span>
                                        <span class="time">30 mins</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/guest2/Public/admin/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Jeffrey Ashby</span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/guest2/Public/admin/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">John Douey</span>
                                        <span class="time">3 hours</span>
                                        <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/guest2/Public/admin/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ellen Baker</span>
                                        <span class="time">7 hours</span>
                                        <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/guest2/Public/admin/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ivan Bella</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </li>-->
                    <li class="profile-photo">
                        <img src="/guest2/Public/admin/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <?php echo ($usrname); ?> <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <!-- <li>
                                <a href="#"><i class="fa fa-user"></i> 收益</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i> 日历</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> 消息 <span class="badge badge-danager" id="user-inbox">5</span></a>
                            </li> -->
                            <li>
                                <a href="index.php?m=admin&c=login&a=loginOut"><i class="fa fa-power-off"></i> 推出</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="<?php echo U(GROUP_NAME.'/Index/index');?>"><i class="fa fa-dashboard"></i><span>后台首页</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>全局设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>

                            <li><a href="<?php echo U(admin.'/Website/index');?>" target="right">网站信息设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Nav/index');?>" target="right">导航设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Logo/index');?>" target="right">网站logo设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Aboutus/index');?>" target="right">关于我设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Slide/index');?>" target="right">幻灯片设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Keywords/index');?>" target="right">关键字设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Cache/index');?>" target="right">全站缓存</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>文章设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U(admin.'/Essay/index');?>" target="right">文章分类</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Essays/index');?>" target="right">文章列表</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>友情连接设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U(admin.'/CafeCopy/index');?>" target="right">友情连接</a>
                            </li>
                            
                            <!-- <li><a href="forms-multiple-file.html">Multiple File Upload</a>
                            </li>
                            <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>相册设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U(admin.'/Classification/index');?>" target="right">相册分类设置</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Photo/index');?>" target="right">相片列表</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Server设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U(admin.'/Webclose/index');?>" target="right">网站关闭</a>
                            </li>
                            <li><a href="<?php echo U(admin.'/Mysql/index');?>" target="right">数据库链接</a>
                            </li>
                            <!-- <li><a href="<?php echo U('Admin/Advertisement/index');?>" target="right">广告设置</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>时间轴设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U(GROUP_NAME.'/Year/index');?>" target="right">年份</a>
                            </li>
                            <li><a href="<?php echo U(GROUP_NAME.'/Axis/index');?>" target="right">时间轴</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>网站公告/广告设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/Notice/index');?>" target="right">公告所属</a>
                            </li>
                            <li><a href="<?php echo U('Admin/Notices/index');?>" target="right">公告列表</a>
                            </li>
                            <li><a href="<?php echo U('Admin/Advertisement/index');?>" target="right">广告设置</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>便民服务设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/Convenience/index');?>" target="right">便民服务</a>
                            </li>
                            
                        </ul>
                    </li> -->
                   <!--  <li class="sub-menu">
                        <a href="JavaScript:;"><i class="fa fa-text-height"></i><span>手机站</span></a>
                    </li> -->
                    <!-- <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>优惠活动设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/Special/index');?>" target="right">优惠活动</a>
                            </li> -->
                            <!-- <li><a href="<?php echo U('Admin/HoneNavs/index');?>" target="right">手机二级导航</a>
                            </li>
                            <li><a href="<?php echo U('Admin/HoneSlide/index');?>" target="right">手机幻灯片</a>
                            </li> -->
                            
                     <!--    </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>意见建议设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/View/index');?>" target="right">意见建议</a>
                            </li> -->
                            <!-- <li><a href="<?php echo U('Admin/HoneShopMessage/index');?>" target="right">手机商品详情添加（2）</a>
                            </li> -->
                     <!--    </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>爱在赤峰设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/Lovein/index');?>" target="right">爱在赤峰</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>订单设置</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="<?php echo U('Admin/Goodorder/index');?>" target="right">订单列表</a>
                            </li>
                            <li><a href="<?php echo U('Admin/Goodorder/change');?>" target="right">兑换订单列表</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>

        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <!--tiles start-->
                <!--right start-->
                <iframe src="<?php echo U(admin.'/Index/main');?>" id="iframepage" name="right" frameBorder=0 scrolling=yes width="100%" onLoad="iFrameHeight()" ></iframe>
                <!--right end-->
                <div class="footer" style="text-align:center">
                    <p>Powered by <span id="xx" style="color:green;cursor: pointer">23℃</span> Administration Interface</p>
                </div>
                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
        <!--sidebar right end-->
    </section>
    <!--Global JS-->
    <script src="/guest2/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script src="/guest2/Public/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/guest2/Public/admin/plugins/waypoints/waypoints.min.js"></script>
    <script src="/guest2/Public/admin/js/application.js"></script>
    <!--Page Level JS-->
    <script src="/guest2/Public/admin/plugins/countTo/jquery.countTo.js"></script>
    <script src="/guest2/Public/admin/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.example.js"></script>
    <!-- Morris  -->
    <script src="/guest2/Public/admin/plugins/morris/js/morris.min.js"></script>
    <script src="/guest2/Public/admin/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="/guest2/Public/admin/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/guest2/Public/admin/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="/guest2/Public/admin/plugins/todo/js/todos.js"></script>
    <!--Load these page level functions-->
    <script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();
    });
    </script>   
<script type="text/javascript" language="javascript">
function iFrameHeight() {
var ifm= document.getElementById("iframepage");
var subWeb = document.frames ? document.frames["right"].document : ifm.contentDocument;
if(ifm != null && subWeb != null) {
ifm.height = subWeb.body.scrollHeight;
}
}
</script> 
</body>

</html>