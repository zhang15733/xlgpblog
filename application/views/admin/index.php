<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>心灵的孤僻的博客之后花园</title>
	<link rel="stylesheet" type="text/css" href="/static/wangEditor-2.1.22/css/wangEditor.min.css">
</head>
<body>
<h1>后花园</h1>
<div id="div1" style="height: 400px;">
花径不曾扫

蓬门今始开

来者皆是客

洗耳恭听哉
</div>
</body>
<script type="text/javascript" src="/static/wangEditor-2.1.22/js/lib/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/static/wangEditor-2.1.22/js/wangEditor.min.js"></script>
<!--这里引用jquery和wangEditor.js-->
<script type="text/javascript">
    var editor = new wangEditor('div1');
    editor.create();
</script>
</html>