<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8" />
	<title>后台管理系统</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="/TP3jc/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/TP3jc/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="/TP3jc/Public/Admin/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="/TP3jc/Public/Admin/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="shortcut icon" href="/TP3jc/Public/Admin/image/favicon.ico" />
	<!-- 开始核心插件-->
	<script src="/TP3jc/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/TP3jc/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="/TP3jc/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/TP3jc/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- 结束核心插件-->
	<!-- 开始页面级插件 -->
	<script src="/TP3jc/Public/Admin/js/jquery.flot.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/date.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/daterangepicker.js" type="text/javascript"></script>     
	<script src="/TP3jc/Public/Admin/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/fullcalendar.min.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- 结束页面级插件 -->
	<!-- 开始页面级脚本 -->
	<script src="/TP3jc/Public/Admin/js/app.js" type="text/javascript"></script>
	<script src="/TP3jc/Public/Admin/js/index.js" type="text/javascript"></script>        
	<!-- 结束页面级脚本-->  
</head>
<body class="page-header-fixed">
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="index.html">
				<img src="/TP3jc/Public/Admin/image/logo.png" alt="logo"/>
				</a>
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="/TP3jc/Public/Admin/image/menu-toggler.png" alt="" />
				</a>                  
				<ul class="nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="/TP3jc/Public/Admin/image/avatar1_small.jpg" />
						<span class="username">Bob Nilson</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
							<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
							<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
							<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
							<li class="divider"></li>
							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
							<li><a href="<?php echo U('Admin/Login/loginout');?>"><i class="icon-key"></i>&nbsp;&nbsp;退出后台</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="page-sidebar nav-collapse collapse">
			<ul class="page-sidebar-menu">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>
				<li>
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="搜索..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
				</li>
				<li class="start active ">
					<a href="index.html">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i>
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="ui_general.html"><i class="icon-bell"></i>General</a>
						</li>
						<li >
							<a href="ui_buttons.html"><i class="icon-bell"></i>Buttons</a>
						</li>
					</ul>
				</li>
				<!--<li>-->
					<!--<a class="active" href="javascript:;">-->
						<!--<i class="icon-sitemap"></i>-->
						<!--<span class="title">3 Level Menu</span>-->
						<!--<span class="arrow "></span>-->
					<!--</a>-->
					<!--<ul class="sub-menu">-->
						<!--<li>-->
							<!--<a href="javascript:;">-->
								<!--<i class="icon-user"></i>-->
								<!--Item 1-->
								<!--<span class="arrow"></span>-->
							<!--</a>-->
							<!--<ul class="sub-menu">-->
								<!--<li><a href="#">Sample Link 1</a></li>-->
								<!--<li><a href="#">Sample Link 2</a></li>-->
								<!--<li><a href="#">Sample Link 3</a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a href="javascript:;">-->
								<!--Item 1-->
								<!--<span class="arrow"></span>-->
							<!--</a>-->
							<!--<ul class="sub-menu">-->
								<!--<li><a href="#">Sample Link 1</a></li>-->
								<!--<li><a href="#">Sample Link 1</a></li>-->
								<!--<li><a href="#">Sample Link 1</a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a href="#">-->
								<!--Item 3-->
							<!--</a>-->
						<!--</li>-->
					<!--</ul>-->
				<!--</li>-->
				<!--<li>-->
					<!--<a href="javascript:;">-->
						<!--<i class="icon-folder-open"></i>-->
						<!--<span class="title">4 Level Menu</span>-->
						<!--<span class="arrow "></span>-->
					<!--</a>-->
					<!--<ul class="sub-menu">-->
						<!--<li>-->
							<!--<a href="javascript:;">-->
								<!--<i class="icon-cogs"></i>-->
								<!--Item 1-->
								<!--<span class="arrow"></span>-->
							<!--</a>-->
							<!--<ul class="sub-menu">-->
								<!--<li>-->
									<!--<a href="javascript:;">-->
										<!--<i class="icon-user"></i>-->
										<!--Sample Link 1-->
										<!--<span class="arrow"></span>-->
									<!--</a>-->
									<!--<ul class="sub-menu">-->
										<!--<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>-->
										<!--<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>-->
										<!--<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>-->
									<!--</ul>-->
								<!--</li>-->
								<!--<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>-->
								<!--<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>-->
								<!--<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a href="javascript:;">-->
								<!--<i class="icon-globe"></i>-->
								<!--Item 2-->
								<!--<span class="arrow"></span>-->
							<!--</a>-->
							<!--<ul class="sub-menu">-->
								<!--<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>-->
								<!--<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>-->
								<!--<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a href="#">-->
								<!--<i class="icon-folder-open"></i>-->
								<!--Item 3-->
							<!--</a>-->
						<!--</li>-->
					<!--</ul>-->
				<!--</li>-->
			</ul>
		</div>

		<div class="page-content">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<h3 class="page-title">
							欢迎&nbsp;<small>进入后台管理系统</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
						</ul>
					</div>
				</div>
				<div id="dashboard">


TP框架版本:<?php echo (THINK_VERSION); ?>
	
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.Collect from 
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		});
	</script>
</body>
</html>