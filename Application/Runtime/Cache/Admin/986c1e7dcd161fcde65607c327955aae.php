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
    <title></title>
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
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/uploadify/uploadify.css">
    <script src="/guest2/Public/jquery.js"></script>
    <script src="/guest2/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script src="/guest2/Public/admin/js/image.js"></script>
    <script src="/guest2/Public/admin/plugins/uploadify/jquery.uploadify.js"></script>
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/guest2/Public/admin/js/modernizr-2.6.2.min.js"></script>
    <script src="/guest2/Public/admin/js/colorpicker.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        <!--sidebar left start-->
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper" style="margin-left:0px;min-height:600px">
            <section id="main-content">
                <!--tiles start-->
                <!--tiles end-->
                <!--dashboard charts and map start-->
                
                <!--dashboard charts and map end-->
                <!--ToDo start-->
              <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">关于我添加</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal form-border" id="yfycms-form" method="post" enctype="multipart/form-data">



                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label">LOGO图片</label>
                                        <div class="col-sm-6">
                                            <input id="file_upload"  type="file" multiple="true" >
                                            <img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
                                            <input id="file_upload_image" name="pic" type="hidden" multiple="true" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">描述</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="depict" placeholder="描述">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-sm-3 control-label">英文描述</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="ydepict" placeholder="英文描述">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">网名</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="names" placeholder="网名">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">职业</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="occupation" placeholder="职业">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">籍贯</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="place" placeholder="籍贯">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">电话</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="tel" placeholder="电话">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">邮箱</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" placeholder="邮箱">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">详情</label>
                                        <div class="col-sm-6">
                                            <textarea id="editor_id" name="content"style="width:600px;height:400px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="button" id="yfycms-button-submit" class="btn btn-primary" >提交</button>
                                        </div>
                                    </div>
                            
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                        
                  
                   
                    
                </div>
                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
        <!--sidebar right end-->
        <!--Global JS-->
        <script src="/guest2/Public/dialog.js"></script>
        <script src="/guest2/Public/admin/js/common.js"></script>
        <script src="/guest2/Public/admin/dialog/layer.js"></script>


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
    <script charset="utf-8" src="/guest2/Public/kindeditor/kindeditor-all.js"></script>
    <script  charset="utf-8" src="/guest2/Public/kindeditor/lang/zh_CN.js"></script>
    <!--Load these page level functions-->
    <script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();
    });
    </script>
        <script>
            // 6.2
            KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id',{
                    //富文本编辑器上传图片的链接地址
                    uploadJson : 'admin.php?c=aboutus&a=kindupload',
                    //关键代码，表示当焦点离开后，把数据赋值给textarea
                    afterBlur : function(){this.sync();}, //
                });
            });
        </script>
    <script>
        $('#color').ColorPicker({
          color: '#0000ff',
          onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
          },
          onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
          },
          onChange: function (hsb, hex, rgb) {
            $('#color').css('backgroundColor', '#' + hex);
            $("#color").val(hex);
          }
        });
    </script>
        <script>
            var SCOPE={
                'save_url':'admin.php?c=aboutus&a=add',
                'jump_url':'admin.php?c=aboutus',
                'ajax_upload_image_url' : 'admin.php?c=aboutus&a=ajaxuploadimage',
                'ajax_upload_swf' : '/guest2/Public/admin/plugins/uploadify/uploadify.swf',
            }
        </script>
</body>

</html>