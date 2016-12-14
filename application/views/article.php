<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('public/header.php');?>
<div class="uk-container uk-container-center uk-margin">
	<ul class="uk-breadcrumb">
	    <li><a href="/">首页</a></li>
	    <li><a href="/study">学无止境</a></li>
	    <li><a href="/cato/linux">Linux</a></li>
	</ul>
	<div class="uk-article xb-box-shadow xb-article">
        <h1 class="uk-article-title uk-text-center"><a href="/article/">文章标题-洛神赋</a></h1>
        <p class="uk-article-meta xb-article-meta">
        <span>时间:2016-11-26</span>|作者:心灵的孤僻|浏览:0|评论：0
        </p>
        <hr class="uk-article-divider">
        <div class="uk-article-content">
        <?php for($i = 0; $i < 10; $i++){?>
        	<p>余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”</p>
        	<?php };?>
        </div>
        <div class="uk-article-info xb-article-info">
        	<div class="uk-float-left">
        		<div class="uk-article-cato uk-float-left">
        			<span class="uk-article-item">分类1</span>
        			<span class="uk-article-item">分类1</span>
        		</div>
        		<div class="uk-article-tag uk-float-left">
        			<span class="uk-article-item">标签</span>
        			<span class="uk-article-item">标签</span>
        		</div>
        	</div>
        </div>
        <div class="xb-article-dianzan uk-text-center">
        	<button class="uk-button uk-button-primary uk-button-large uk-icon-thumbs-o-up">赞一下</button>
        </div>
    </div>
    <div class="uk-article-prenext xb-box-shadow">
    	<div class="uk-width-1-2 uk-float-left uk-panel uk-panel-box uk-panel-box-secondary ">
			<p class="uk-text-left uk-text-truncate"><a href = "pre" >上一篇标题</a></p>
		</div>
		<div class="uk-width-1-2 uk-float-left uk-panel uk-panel-box uk-panel-box-secondary ">
			<p class="uk-text-right uk-text-truncate"><a href="next" >下一篇标题</a></p>
		</div>
    </div>
    <!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="0" data-title="文章标题-洛神赋" data-url="http://blog.xlgp.me/article/0"></div>
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