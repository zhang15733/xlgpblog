<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('public/header.php');?>
<div class="bg-box"></div>
<div class="uk-container uk-container-center uk-margin">
	<div class="uk-article">
		<h1 class="uk-text-center">友谊长存</h1>
		<h4 class="uk-text-center uk-text-muted">谈笑有鸿儒，往来皆客人</h4>
		<hr class="uk-article-divider">
		<div class="">
			<?php 
			foreach ($friends as $value) {
				echo '<a class="xb-btn" href="'.$value['link_href'].'" target="_blank">'.$value['link_name'].'</a>';
			}?>
		</div>
		<hr class="uk-article-divider">
		<div class="">
		</div>
	</div>
	<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="friendship" data-title="谈笑鸿儒" data-url="http://blog.xlgp.me/friendship"></div>
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