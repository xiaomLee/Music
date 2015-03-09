<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.dimensions.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script language="javascript">
	jQuery().ready(function(){
		jQuery('#navigation').accordion({
			header: '.head',
			navigation1: true, 
			event: 'click',
			fillSpace: false,
			animated: 'bounceslide'
		});
	});
</script>
<style type="text/css">
<!--
body {
	margin:0px;
	padding:0px;
	font-size: 12px;
}
#navigation {
	margin:0px;
	padding:0px;
	width:147px;
}
#navigation a.head {
	cursor:pointer;
	background:url(images/1.jpg) no-repeat scroll;
	display:block;
	font-weight:bold;
	margin:0px;
	padding:5px 0 5px;
	text-align:center;
	font-size:12px;
	text-decoration:none;
}
#navigation ul {
	border-width:0px;
	margin:0px;
	padding:0px;
	text-indent:0px;
}
#navigation li {
	list-style:none; display:inline;
}
#navigation li li a {
	display:block;
	font-size:12px;
	text-decoration: none;
	text-align:center;
	padding:3px;
}
#navigation li li a:hover {
	background:url(images/r.jpg) repeat-x;
		border:solid 1px #adb9c2;
}
-->
</style>
</head>
<body>
<div  style="height:100%;">
  <ul id="navigation">
    <li> <a class="head">管理员管理</a>
      <ul>
        <li><a href="addAdmin.php" target="rightFrame">添加管理员</a></li>
        <li><a href="right.php" target="rightFrame">查看/删除管理员</a></li>
      </ul>
    </li>
    <li> <a class="head">主题管理</a>
      <ul>
        <li><a href="addVol.php" target="rightFrame">添加主题</a></li>
         <li><a href="showVol.php" target="rightFrame">查看/删除主题</a></li>
      </ul>
    </li>
    <li> <a class="head">音乐管理</a>
      <ul>
        <li><a href="addMusic.php" target="rightFrame">添加音乐</a></li>
        <li><a href="showMusic.php" target="rightFrame">查看/删除音乐</a></li>
      </ul>
    </li>
   </ul>
</div>
</body>
</html>
