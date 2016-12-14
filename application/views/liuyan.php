<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('public/header.php');?>
<div class="uk-container uk-container-center uk-margin">
	<div class="uk-article">
		<h1 class="uk-text-center uk-text-muted">雁过留影</h1>
		<h4 class="uk-text-center uk-text-muted">花径不曾扫，蓬门今始开</h4>
		<hr class="uk-article-divider">
	</div>
	<div class="uk-margin xb-comment-form-box">
		<form class="uk-form xb-comment-form">
		    <fieldset>
		        <div class="uk-form-row uk-grid">
		        	<div class="uk-width-1-5"><input type="text" placeholder="用户名（必填）" class=""></div>
		        	<div class="uk-width-1-5"><input type="password" placeholder="密码（必填）" class=""></div>
		        	<div class="uk-width-1-5"><input type="text" placeholder="邮箱" class=""></div>
		        	<div class="uk-width-1-5"><input type="text" placeholder="网址" class=""></div>
		        	<div class="uk-width-1-5"><button type="button" class="uk-button uk-button-primary uk-icon-send-o" data-uk-tooltip title="请稍候...">提交</button></div>
		        </div>
		        <div class="uk-form-row">
		        	<textarea placeholder="留言功能暂未完善..."></textarea>
		        </div>
		    </fieldset>
		</form>	
	</div>
		<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="liuyan" data-title="雁过留影" data-url="<?php echo base_url('/liuyan')?>"></div>
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
