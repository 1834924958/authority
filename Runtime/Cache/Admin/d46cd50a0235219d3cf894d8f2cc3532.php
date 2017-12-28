<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>锁屏休息</title>
<link href="/TP3jc/Public/Admin/Login/images/as.jpg" type="image/x-icon" rel="shortcut icon">
	<script type="text/javascript" src="/TP3jc/Public/Admin/Login/js/jquery.min.js"></script>
	<script type="text/javascript" src="/TP3jc/Public/layer/layer.js"></script>
	<link href="/TP3jc/Public/Admin/Login/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
		a{
			font-size: 12px;
			color: white;
		}
		a:hover{
			color: white!important;
		}
		.copy{
			font-size: 12px;
			color: white;
		}
		/*lock screen*/

		.lock-screen {
			background:#02bac6 url("/TP3jc/Public/Admin/Login/imgs/lock-bg.jpg");
			background-size: cover;
			background-repeat: repeat;
		}

		.lock-wrapper {
			margin: 10% auto;
			max-width: 330px;
		}

		.lock-box {
			background: rgba(255,255,255,.3);
			padding: 20px;
			border-radius: 10px;
			-webkit-border-radius: 10px;
			position: relative;
			height: 200px;
		}

		.lock-wrapper img {
			position: absolute;
			left: 40%;
			top: -40px;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			border: 5px solid #fff;
		}

		.lock-wrapper h1 {
			text-align: center;
			color: #fff;
			font-size: 18px;
			text-transform: uppercase;
			padding: 20px 0 0 0;
		}

		.lock-wrapper .locked {
			margin-bottom: 20px;
			display: inline-block;
			color: #026f7a;
		}

		.btn-lock,.btn-lock:hover {
			background: #02b5c2;
			color: #fff;
		}

		.lock-input {
			width: 83%;
			border: none;
			float: left;
			margin-right: 3px;
		}

		#time {
			width: 100%;
			color: #fff;
			font-size: 60px;
			margin-bottom: 80px;
			display: inline-block;
			text-align: center;
			font-family: 'Open Sans', sans-serif;
			font-weight: 300;
		}
	</style>
</head>

<body class="lock-screen" onload="startTime()">
<div class="lock-wrapper">
	<div id="time"></div>
	<div class="lock-box text-center">
		<img src="/TP3jc/Public/Admin/Login/imgs/dsc.jpg" alt="lock avatar" style="width:80px;height:80px;"/>
		<h1>后台系统</h1>
		<span class="locked">锁屏保护中...</span>
			<div class="form-group col-lg-12">
				<input type="password" placeholder="输入密码" id="unlock_pass" name="pass"
					   class="form-control lock-input">
				<button class="btn btn-lock" type="button" onclick="unlocka();">
					<i class="glyphicon glyphicon-arrow-right"></i>
				</button>
			</div>
	</div>

	<nav class="navbar navbar-fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center copy">
						<a href="#" target="_blank">服务平台</a>
						版权所有 Copyright © 2016-2018  Corporation, All Rights Reserved
					</p>
				</div>
			</div>
		</div>
	</nav>
</div>
<script>
	$(document).ready(
			function() {
				$("#unlock_pass").keydown(function(event) {
					if (event.keyCode == 13) {
						unlocka();
					}
				})
			}
	);

	function unlocka(){
			var pass = $('#unlock_pass').val();
			if(!pass){
				layer.tips('输入解锁密码或者登录密码', '#unlock_pass', {
					tips: [1, '#02b5c2']
				});
				return;
			}

			$.post("<?php echo U('Login/unlock');?>",{pass:pass},function(data){
				layer.msg(data.info);
				if(data.url){
					window.location.href = data.url;
				}
			},'json');
	}

	function startTime()
	{
		var today=new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		// add a zero in front of numbers<10
		m=checkTime(m);
		s=checkTime(s);
		document.getElementById('time').innerHTML=h+":"+m+":"+s;
		t=setTimeout(function(){startTime()},500);
	}

	function checkTime(i)
	{
		if (i<10)
		{
			i="0" + i;
		}
		return i;
	}
</script>
</body>
</html>