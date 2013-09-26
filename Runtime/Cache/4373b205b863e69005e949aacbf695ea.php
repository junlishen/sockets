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
<!-- BEGIN BODY -->
<body class="page-header-fixed"  id="chatIn">
<div class="header navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="index.html"><img src="/media/image/logo.png" alt="logo"/></a><a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"><img src="/media/image/menu-toggler.png" alt=""/></a>
            <ul class="nav pull-right">
                <li class="dropdown" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-warning-sign"></i><span class="badge">6</span></a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>You have 14 new notifications</p>
                        </li>
                        <li><a href="#"><span class="label label-success"><i class="icon-plus"></i></span>New user registered.<span class="time">Just now</span></a></li>
                        <li><a href="#"><span class="label label-important"><i class="icon-bolt"></i></span>Server #12 overloaded.<span class="time">15 mins</span></a></li>
                        <li><a href="#"><span class="label label-warning"><i class="icon-bell"></i></span>Server #2 not respoding.<span class="time">22 mins</span></a></li>
                        <li><a href="#"><span class="label label-info"><i class="icon-bullhorn"></i></span>Application error.<span class="time">40 mins</span></a></li>
                        <li><a href="#"><span class="label label-important"><i class="icon-bolt"></i></span>Database overloaded 68%.<span class="time">2 hrs</span></a></li>
                        <li><a href="#"><span class="label label-important"><i class="icon-bolt"></i></span>2 user IP blocked.<span class="time">5 hrs</span></a></li>
                        <li class="external"><a href="#">See all notifications <i class="m-icon-swapright"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown" id="header_inbox_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope"></i><span class="badge">5</span></a>
                    <ul class="dropdown-menu extended inbox">
                        <li><p>You have 12 new messages</p></li>
                        <li><a href="inbox.html?a=view"><span class="photo"><img src="/media/image/avatar2.jpg" alt=""/></span><span class="subject"><span class="from">Lisa Wong</span><span class="time">Just Now</span></span><span class="message">Vivamus sed auctor nibh congue nibh. auctor nibhauctor nibh...</span></a></li>
                        <li><a href="inbox.html?a=view"><span class="photo"><img src="/media/image/avatar3.jpg" alt=""/></span><span class="subject"><span class="from">Richard Doe</span><span class="time">16 mins</span></span><span class="message">Vivamus sed congue nibh auctor nibh congue nibh. auctor nibhauctor nibh...</span></a></li>
                        <li><a href="inbox.html?a=view"><span class="photo"><img src="/media/image/avatar1.jpg" alt=""/></span><span class="subject"><span class="from">Bob Nilson</span><span class="time">2 hrs</span></span><span class="message">Vivamus sed nibh auctor nibh congue nibh. auctor nibhauctor nibh...</span></a></li>
                        <li class="external"><a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown" id="header_task_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i><span class="badge">5</span></a>
                    <ul class="dropdown-menu extended tasks">
                        <li><p>You have 12 pending tasks</p></li>
                        <li><a href="#"><span class="task"><span class="desc">New release v1.2</span><span class="percent">30%</span></span><span class="progress progress-success "><span style="width: 30%;" class="bar"></span></span></a></li>
                        <li><a href="#"><span class="task"><span class="desc">Application deployment</span><span class="percent">65%</span></span><span class="progress progress-danger progress-striped active"><span style="width: 65%;" class="bar"></span></span></a></li>
                        <li><a href="#"><span class="task"><span class="desc">Mobile app release</span><span class="percent">98%</span></span><span class="progress progress-success"><span style="width: 98%;" class="bar"></span></span></a></li>
                        <li><a href="#"><span class="task"><span class="desc">Database migration</span><span class="percent">10%</span></span><span class="progress progress-warning progress-striped"><span style="width: 10%;" class="bar"></span></span></a></li>
                        <li><a href="#"><span class="task"><span class="desc">Web server upgrade</span><span class="percent">58%</span></span><span class="progress progress-info"><span style="width: 58%;" class="bar"></span></span></a></li>
                        <li><a href="#"><span class="task"><span class="desc">Mobile development</span><span class="percent">85%</span></span><span class="progress progress-success"><span style="width: 85%;" class="bar"></span></span></a></li>
                        <li class="external"><a href="#">See all tasks <i class="m-icon-swapright"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown user"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="" src="/media/image/avatar1_small.jpg"/><span class="username"><?php echo ($_SESSION['usrinfo']['username']); ?></span><i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-container">
    <div class="page-sidebar nav-collapse collapse">
    <ul class="page-sidebar-menu">
        <li><div class="sidebar-toggler hidden-phone"></div></li>
        <li>
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..."/><input type="button" class="submit" value=" "/>
                </div>
            </form>
        </li>
        <li class="start active ">
            <a href="<?php echo U("main/index");?>"><i class="icon-home"></i><span class="title">首页</span><span class="selected"></span></a>
        </li>
        <li>
            <a href="javascript:;"><i class=" icon-comments-alt"></i><span class="title">聊天室</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="<?php echo U("chat/in");?>"><i class="icon-group"></i> 进入聊天室</a></li>
                <li><a href="layout_horizontal_menu1.html">Horzontal Menu 1</a></li>
                <li><a href="layout_horizontal_menu2.html">Horzontal Menu 2</a></li>
                <li><a href="layout_promo.html">Promo Page</a></li>
                <li><a href="layout_email.html">Email Templates</a></li>
                <li><a href="layout_ajax.html">Content Loading via Ajax</a></li>
                <li><a href="layout_sidebar_closed.html">Sidebar Closed Page</a></li>
                <li><a href="layout_blank_page.html">Blank Page</a></li>
                <li><a href="layout_boxed_page.html">Boxed Page</a></li>
                <li><a href="layout_boxed_not_responsive.html">Non-Responsive Boxed Layout</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-cogs"></i><span class="title">Layouts</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="layout_horizontal_sidebar_menu.html">Horzontal & Sidebar Menu</a></li>
                <li><a href="layout_horizontal_menu1.html">Horzontal Menu 1</a></li>
                <li><a href="layout_horizontal_menu2.html">Horzontal Menu 2</a></li>
                <li><a href="layout_promo.html">Promo Page</a></li>
                <li><a href="layout_email.html">Email Templates</a></li>
                <li><a href="layout_ajax.html">Content Loading via Ajax</a></li>
                <li><a href="layout_sidebar_closed.html">Sidebar Closed Page</a></li>
                <li><a href="layout_blank_page.html">Blank Page</a></li>
                <li><a href="layout_boxed_page.html">Boxed Page</a></li>
                <li><a href="layout_boxed_not_responsive.html">Non-Responsive Boxed Layout</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-bookmark-empty"></i><span class="title">UI Features</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="ui_general.html">General</a></li>
                <li><a href="ui_buttons.html">Buttons</a></li>
                <li><a href="ui_modals.html">Enhanced Modals</a></li>
                <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                <li><a href="ui_jqueryui.html">jQuery UI Components</a></li>
                <li><a href="ui_sliders.html">Sliders</a></li>
                <li><a href="ui_tiles.html">Tiles</a></li>
                <li><a href="ui_typography.html">Typography</a></li>
                <li><a href="ui_tree.html">Tree View</a></li>
                <li><a href="ui_nestable.html">Nestable List</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-table"></i><span class="title">Form Stuff</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="form_layout.html">Form Layouts</a></li>
                <li><a href="form_samples.html">Advance Form Samples</a></li>
                <li><a href="form_component.html">Form Components</a></li>
                <li><a href="form_wizard.html">Form Wizard</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_fileupload.html">Multiple File Upload</a></li>
                <li><a href="form_dropzone.html">Dropzone File Upload</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-briefcase"></i><span class="title">Pages</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="page_timeline.html"><i class="icon-time"></i>Timeline</a></li>
                <li><a href="page_coming_soon.html"><i class="icon-cogs"></i>Coming Soon</a></li>
                <li><a href="page_blog.html"><i class="icon-comments"></i>Blog</a></li>
                <li><a href="page_blog_item.html"><i class="icon-font"></i>Blog Post</a></li>
                <li><a href="page_news.html"><i class="icon-coffee"></i>News</a></li>
                <li><a href="page_news_item.html"><i class="icon-bell"></i>News View</a></li>
                <li><a href="page_about.html"><i class="icon-group"></i>About Us</a></li>
                <li><a href="page_contact.html"><i class="icon-envelope-alt"></i>Contact Us</a></li>
                <li><a href="page_calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-gift"></i><span class="title">Extra</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="extra_profile.html">User Profile</a></li>
                <li><a href="extra_lock.html">Lock Screen</a></li>
                <li><a href="extra_faq.html">FAQ</a></li>
                <li><a href="inbox.html">Inbox</a></li>
                <li><a href="extra_search.html">Search Results</a></li>
                <li><a href="extra_invoice.html">Invoice</a></li>
                <li><a href="extra_pricing_table.html">Pricing Tables</a></li>
                <li><a href="extra_image_manager.html">Image Manager</a></li>
                <li><a href="extra_404_option1.html">404 Page Option 1</a></li>
                <li><a href="extra_404_option2.html">404 Page Option 2</a></li>
                <li><a href="extra_404_option3.html">404 Page Option 3</a></li>
                <li><a href="extra_500_option1.html">500 Page Option 1</a></li>
                <li><a href="extra_500_option2.html">500 Page Option 2</a></li>
            </ul>
        </li>
        <li>
            <a class="active" href="javascript:;"><i class="icon-sitemap"></i><span class="title">3 Level Menu</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="javascript:;">Item 1<span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 2</a></li>
                        <li><a href="#">Sample Link 3</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Item 1<span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                    </ul>
                </li>
                <li><a href="#">Item 3</a></li>
            </ul>
        </li>
        <li><a href="javascript:;"><i class="icon-folder-open"></i><span class="title">4 Level Menu</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="javascript:;"><i class="icon-cogs"></i>Item 1<span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="javascript:;"><i class="icon-user"></i>Sample Link 1<span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
                                <li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
                                <li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-external-link"></i> Sample Link 2</a></li>
                        <li><a href="#"><i class="icon-bell"></i> Sample Link 3</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="icon-globe"></i>Item 2<span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-user"></i> Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-external-link"></i> Sample Link 1</a></li>
                        <li><a href="#"><i class="icon-bell"></i> Sample Link 1</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="icon-folder-open"></i>Item 3</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-user"></i><span class="title">Login Options</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="login.html">Login Form 1</a></li>
                <li><a href="login_soft.html">Login Form 2</a></li>
            </ul>
        </li>
        <li><a href="javascript:;"><i class="icon-th"></i><span class="title">Data Tables</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="table_basic.html">Basic Tables</a></li>
                <li><a href="table_responsive.html">Responsive Tables</a></li>
                <li><a href="table_managed.html">Managed Tables</a></li>
                <li><a href="table_editable.html">Editable Tables</a></li>
                <li><a href="table_advanced.html">Advanced Tables</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-file-text"></i><span class="title">Portlets</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="portlet_general.html">General Portlets</a></li>
                <li><a href="portlet_draggable.html">Draggable Portlets</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="icon-map-marker"></i><span class="title">Maps</span><span class="arrow "></span></a>
            <ul class="sub-menu">
                <li><a href="maps_google.html">Google Maps</a></li>
                <li><a href="maps_vector.html">Vector Maps</a></li>
            </ul>
        </li>
        <li class="last "><a href="charts.html"><i class="icon-bar-chart"></i><span class="title">Visual Charts</span></a></li>
    </ul>
</div>
    <div class="page-content">
        <div class="container-fluid">
        <div class="row-fluid">
    <div class="span12">
        <div class="color-panel hidden-phone">
            <div class="color-mode-icons icon-color"></div>
            <div class="color-mode-icons icon-color-close"></div>
            <div class="color-mode">
                <p>
                    THEME COLOR
                </p>
                <ul class="inline">
                    <li class="color-black current color-default" data-style="default"></li>
                    <li class="color-blue" data-style="blue"></li>
                    <li class="color-brown" data-style="brown"></li>
                    <li class="color-purple" data-style="purple"></li>
                    <li class="color-grey" data-style="grey"></li>
                    <li class="color-white color-light" data-style="light"></li>
                </ul>
                <label><span>Layout</span>
                    <select class="layout-option m-wrap small">
                        <option value="fluid" selected>Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </label><label><span>Header</span>
                <select class="header-option m-wrap small">
                    <option value="fixed" selected>Fixed</option>
                    <option value="default">Default</option>
                </select>
            </label><label><span>Sidebar</span>
                <select class="sidebar-option m-wrap small">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected>Default</option>
                </select>
            </label><label><span>Footer</span>
                <select class="footer-option m-wrap small">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected>Default</option>
                </select>
            </label>
            </div>
        </div>
        <h3 class="page-title">Dashboard
            <small>statistics and more</small>
        </h3>
        <ul class="breadcrumb">
            <li><i class="icon-home"></i><a href="index.html">Home</a><i class="icon-angle-right"></i></li>
            <li><a href="#">Dashboard</a></li>
            <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" style="display:block;">
                    <i class="icon-calendar"></i><span><?php echo date("Y-m-d H:i"); ?></span><!--<i class="icon-angle-down"></i>-->
                </div>
            </li>
        </ul>
    </div>
</div>
        <div class="row-fluid">
            <div class="span8">
                <div class="portlet box green chat-list-comments">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-comments"></i>聊天内容</div>
                    </div>
                    <div class="portlet-body">

                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="portlet box blue chat-list-users">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-group"></i>聊天用户组</div>
                    </div>
                    <div class="portlet-body">

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-tools">
        <span class="go-top"><i class="icon-angle-up"></i></span>
    </div>
    <div class="footer-inner" style="display:block;float:none;color:#fff;text-align:center"><?php echo date("Y"); ?> - <?php echo date("Y")+1; ?> &copy; Socket by Junli.</div>
</div>
<script src="/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/media/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/media/js/app.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        App.init();
    });
</script>
</body>
</html>