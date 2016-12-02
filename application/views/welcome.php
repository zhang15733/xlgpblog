<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>欢迎来到心灵的孤僻的博客</title>
	<script src="<?php echo base_url('static/js/public.js')?>"></script>

	<link rel = "stylesheet" href="/static/uikit-2.25.0/css/components/slideshow.css"/>

</head>
<body>
<div id="banner-box" class="banner-box" style="">
	<ul class="uk-slideshow" data-uk-slideshow="{kenburns:true, pauseOnHover:false, autoplayInterval:5000, autoplay:true}">
	    <li>
	    <div class="uk-cover-background uk-position-cover" style='background-image: url("/static/img/Screenshot_20161126_131614.png");'></div>
	    <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
	    </li>
	    <li>
	    <div class="uk-cover-background uk-position-cover" style='background-image: url("/static/img/Screenshot_20161126_131124.png");'></div>
	    <canvas width="800" height="400" style="width: 100%; height: auto; opacity: 0;"></canvas>
	    </li>
	</ul>
</div>

<div class="container">
	<div class="uk-panel uk-panel-header">
	    <h2 class="uk-text-center"><a href="/">心灵的孤僻的博客</a></h2>
	    <div class="uk-text-center">
			    <a href="/main">蓬门今开</a>
			    <a href="/aboutme">博主自序</a>
			    <a href="/liuyan">雁过留影</a>
			    <a href="/friendship">谈笑鸿儒</a>
	    </div>
	</div>
</div>

<footer style="position: absolute;bottom: 10px;text-align: center;width: 100%;">
	<p>Copyright © 2016 心灵的孤僻博客 All Rights Reserved</p>
</footer>
</body>
<script  language="javascript" src="/static/uikit-2.25.0/js/components/slideshow.js"></script>
<script type="text/javascript">
	 var szImg = ['Screenshot_20161126_131124.png','Screenshot_20161126_131614.png','Screenshot_20161126_131921.png','Screenshot_20161126_131614.png'];
</script>
</html>
