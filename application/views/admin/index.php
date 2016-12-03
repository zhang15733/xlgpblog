<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>心灵的孤僻的博客之后花园</title>
	
</head>
<body>
<h1>后花园</h1>
</body>
<!-- 加载编辑器的容器 -->
<script id="container" name="content" type="text/plain"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/ueditor-1.4.3.3/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/ueditor-1.4.3.3/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{
    	initialFrameHeight:600,
    });
</script>
</html>