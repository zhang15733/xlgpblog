<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>--心灵的孤僻</title>
	<script src="<?php echo base_url('static/js/public.js')?>"></script>
</head>
<body>
<?php require_once('public/header.php');?>
<div class="bg-box"></div>
<div class="uk-container uk-container-center uk-margin">
	<div class="uk-article">
		<h1 class="uk-text-center">友谊长存</h1>
		<h4 class="uk-text-center uk-text-muted">谈笑有鸿儒，往来皆客人</h4>
		<hr class="uk-article-divider">
		<div class="">
			<?php for($i = 0; $i < 20; $i++){?>
			<a class="xb-btn" href="/">心灵的孤僻</a>
			<?php }?>
		</div>
		<hr class="uk-article-divider">
		<div class="">
		</div>
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
</html>