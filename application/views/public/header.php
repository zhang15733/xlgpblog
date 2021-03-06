<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/uikit/2.25.0/css/uikit.min.css" />
    <link rel = "stylesheet" href="/static/uikit-2.25.0/css/components/tooltip.css"/>
    <link rel = "stylesheet" href="/static/css/uikit-blog.css"/>
    <link rel = "stylesheet" href="/static/css/xlgpblog-base.css"/>
    <script  language="javascript" src="/static/js/jquery-2.1.4.js"></script>
    <script  language="javascript" src="/static/uikit-2.25.0/js/uikit.min.js"></script>
    <script  language="javascript" src="/static/uikit-2.25.0/js/components/tooltip.js"></script>
</head>
<body>
<div class="bg-box"></div>
<div class="xb-header-box">
	<div class="uk-container uk-container-center xb-header uk-text-center">
		<a href="/">
        <img src="/static/img/logo.png" alt="心灵的孤僻">
        <!-- <img src="/static/img/sublogo.png" alt="平心静气，尔之所需，岁月给予"> -->
        </a>
        <!-- <span class="uk-text-muted uk-text-bottom" style="font-size: medium;">平心静气，尔之所需，岁月给予</span> -->
		<!-- <h2 class="uk-margin"><?php echo $head['title'];?></h2> -->
        <!-- <a class="uk-icon-search"></a> -->
	</div>
    <!-- 导航栏 -->
<div class="xb-nav-box">
    <div class="uk-container uk-container-center">
        <nav class="uk-navbar xb-navbar">
            <ul id="xb-navbar-nav" class="uk-navbar-nav xb-navbar-nav">
                <!-- <li><a href="/">首页</a></li> -->
                <li class="uk-active"><a href="/study">学无止境</a></li>
                <li><a href="/sxxt">随心闲谈</a></li>
                <li><a href="/liuyan">雁过留影</a></li>
                <li><a href="/aboutme">博主自序</a></li>
                <li><a href="/friendship">谈笑鸿儒</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- 导航栏 end-->
</div>

<script type="text/javascript">
    var urls = ['/study','/sxxt', '/liuyan', '/aboutme', '/friendship'];
    $(function () {
        var pathname = window.location.pathname;
        urls.forEach(function(value, index){
            if (pathname.search(value) != -1) {
                $('.uk-active').removeClass('uk-active');
                $('#xb-navbar-nav li').eq(index).addClass('uk-active');
            }
        });
    })

    function setBackImg(argument) {
        // body...
    }

</script>