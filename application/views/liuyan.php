<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>雁过留影--到心灵的孤僻</title>
	<script src="<?php echo base_url('static/js/public.js')?>"></script>
</head>
<body>
<div class="bg-box"></div>
<?php require_once('public/header.php');?>
<div class="uk-container uk-container-center uk-margin">
	<div class="uk-article">
		<h1 class="uk-text-center uk-text-muted">雁过留影</h1>
		<hr class="uk-article-divider">
		<p style="text-align: center;"><font color="#808080" size="4">
花径不曾扫</font></p><p style="text-align: center; "><font color="#808080" size="4">蓬门今始开</font></p><p style="text-align: center; "><font color="#808080" size="4">来者皆是客</font></p><p style="text-align: center; "><font color="#808080" size="4">洗耳恭听无</font></p>
	</div>
	<div class="uk-margin xb-comment-form-box">
		<form class="uk-form xb-comment-form">
		    <fieldset>
		        <div class="uk-form-row uk-grid">
		        	<div class="uk-width-1-4"><input type="text" placeholder="用户名" class=""></div>
		        	<div class="uk-width-1-4"><input type="password" placeholder="密码" class=""></div>
		        	<div class="uk-width-1-4"><input type="text" placeholder="邮箱" class=""></div>
		        	<div class="uk-width-1-4"><button type="submit" class="uk-button uk-button-primary uk-icon-send-o">提交</button></div>
		        </div>
		        <div class="uk-form-row">
		        	<textarea placeholder=""></textarea>
		        </div>
		    </fieldset>
		</form>	
	</div>
	
		<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="friendship" data-title="文章标题-洛神赋" data-url="http://blog.xlgp.me/friendship"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"xlgp"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
</div>
<?php require_once('public/footer.php'); ?>
</body>

<script type="text/javascript">
</script>
</html>
