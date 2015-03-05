<?php 
session_start();
if($_SESSION['manage_tag']!=1){
	header("location:login.php");
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>音乐网站管理后台</title>
</head>
<frameset rows="85,*,9" frameborder="no" border="0" framespacing="0">
	<frame src="top.php" name="topFrame" noresize scrolling="no" id="topFrame"></frame>
	<frame src="center.php" name="mainFrame" noresize scrolling="no" id="mainFrame"></frame>
	<frame src="down.php" name="bottomFrame" noresize scrolling="no" id="bottomFrame"></frame>
</frameset>
<noframes>
<body>
</body>
</noframes>
</html>