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
    <title><?php echo ($web['webname']); ?> - 登录</title>
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
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            登陆
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>登录进入您的帐户.</p>
                        <form class="form-horizontal" role="form" action="index.php?m=admin&c=login&a=check" method="post">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="username" class="form-control" id="email" placeholder="用户名">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="密码">
                                    <i class="fa fa-lock"></i>
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1281074511&site=qq&menu=yes" class="help-block">忘了你的密码吗？</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="button"  onclick="login.check()" class="btn btn-primary btn-block">登录</button>
                                    <hr />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="/guest2/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script src="/guest2/Public/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/guest2/Public/admin/plugins/waypoints/waypoints.min.js"></script>
    <script src="/guest2/Public/admin/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/guest2/Public/admin/js/application.js"></script>
    <script src="/guest2/Public/admin/js/login.js"></script>
    <script src="/guest2/Public/jquery.js"></script>
    <script src="/guest2/Public/admin/dialog/layer.js"></script>
    <script src="/guest2/Public/dialog.js"></script>

</body>

</html>