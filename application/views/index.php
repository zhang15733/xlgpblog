<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('public/header.php');?>
<div class="uk-container uk-container-center uk-margin">
	<!-- 主体 -->
	<div class="uk-grid uk-margin">
	    <div class="uk-width-3-4">
	    	<?php for($i = 0; $i < 10; $i++){?>
	    	<div class="uk-article xb-box-shadow">
                <h1 class="uk-article-title"><a href="/article/<?php echo $i ?>">文章标题-洛神赋</a></h1>
                <p class="uk-article-meta">
                <span>时间:2016-11-26</span>|作者:心灵的孤僻|浏览:0|评论：0
                </p>
                <div class="uk-article-summary"><p>余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”</p></div>
                <div class="uk-article-info">
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
                	<div class="uk-float-right">
                		<a href="/">阅读全文</a>
                	</div>
                </div>
            </div>
            <?php }?>
            <ul class="uk-pagination">
                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                <li class="uk-active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><span>...</span></li>
                <li><a href="#">20</a></li>
                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
            </ul>
	    </div>
	    <div class="uk-width-1-4">
	    	<div class="uk-panel uk-panel-box uk-text-center uk-panel-box-secondary xb-box-shadow">
	    		<a href="/aboutme"><img class="uk-border-circle" width="120" height="120" src="/static/img/me.jpg" alt="" style="height: 120px"></a>
	    		<h3>心灵的孤僻</h3>
	    		<p>平心静气，尔之所需，岁月给予</p>
	    	</div>
	    	<div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-header xb-box-shadow">
	    		<h3 class="uk-panel-title">最新评论</h3>
	    		<dl class="uk-description-list-line">
                    <dt class="uk-text-truncate">描述列表</dt>
                    <dd>描述列表用于定义术语和相应的描述。</dd>
                    <dt>Lorem ipsum</dt>
                    <dd>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
                    <dt>Ut enim</dt>
                    <dd>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                </dl>
	    	</div>
	    	<div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-header xb-box-shadow">
	    		<h3 class="uk-panel-title">标签云</h3>
	    		<div class="uk-panel-body">
	    			<a class="uk-button xb-btn xb-btn-tag" href="#linux">Linux</a>
	    			<a class="uk-button xb-btn xb-btn-tag" href="#php">PHP</a>
	    			<a class="uk-button xb-btn xb-btn-tag" href="#java">Java</a>
	    			<a class="uk-button xb-btn xb-btn-tag" href="#sxyb">随心一笔</a>
	    		</div>
	    	</div>
	    	<div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-header xb-box-shadow">
	    		<h3 class="uk-panel-title">谈笑鸿儒</h3>
	    		<div class="uk-panel-body">
	    			<ul class="uk-list uk-list-line">
					    <li><a href="/">心灵的孤僻</a></li>
					    <li><a href="/">心灵的孤僻</a></li>
					    <li><a href="/">心灵的孤僻</a></li>
					</ul>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
<?php require_once('public/footer.php'); ?>
</body>
</html>
