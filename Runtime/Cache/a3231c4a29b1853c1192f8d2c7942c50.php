<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo ($webTitle); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/login.css" rel="stylesheet" type="text/css"/>
    <link href="/media/css/socket/socket.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="/media/image/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY --><body class="page-header-fixed" style="background:#fff !important;"><div class="container-fluid" style="background:#fff">    <div class="row-fluid">        <div class="span12">            <!-- BEGIN PAGE TITLE & BREADCRUMB-->            <h3 class="page-title">Msg <small>general ui components</small></h3>        </div>    </div>    <div class="row-fluid">        <div class="span12">            <div class="portlet ">                <div class="portlet-title">                    <div class="caption"><i class="icon-cogs"></i>Alerts</div>                </div>                <div class="alert alert-block alert-success fade in">                    <button data-dismiss="alert" class="close" type="button"></button>                    <h4 class="alert-heading">Success!</h4>                    <p>                        Duis mollis, est non commodo luctus,                        nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.                    </p>                    <p><a href="#" class="btn green">Do this</a> <a href="#" class="btn black">Or do this</a></p>                </div>            </div>        </div>    </div></div><script type="text/javascript">    setTimeout(function(){        window.location = "<?php echo U('main/index');?>";    },2000);</script></body></html>