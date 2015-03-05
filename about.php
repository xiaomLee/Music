<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel='stylesheet' id='login-css' href='style.css' type='text/css'
	media='all' />
<title>听·音乐</title>
</head>
<body>
<?php 
include 'dbutil/dbconfig.php';
include 'dbutil/medoo.php';

$db=new medoo($link_url);
?>
	<div class="main">
		<div class="top">
			<table width="927" height="87" border="0">
				<tr>
					<td><div align="right" class="STYLE4">听·音乐</div></td>
			</table>
		</div>
		<div id="center">
			<div id="menu">
				<div id="Layer3">
					<div align="left">
						<table width="998" border="0" height="15">
							<tr>
								<td width="44" height="25"><span class="STYLE5 STYLE6"><a
										href="home.php">首页</a></span></td>
								<td width="44"><span class="STYLE5"><a href="music.php">音乐</a></span></td>
								<td width="44"><span class="STYLE5"><a href="vol.php">心情</a></span></td>
								<td width="44"><span class="STYLE5"><a href="about.php">关于</a></span></td>
								<td width="563">&nbsp;</td>
								<td width="170"><input type="text" name="textfield" /></td>
								<td width="59"><span class="STYLE5"><a href="##">搜索</a></span></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="left">

				<table width="626" height="320" border="0">
					<tr>
						<td width="620" height="91">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<h1>&nbsp;</h1>
							<h1>关于我们</h1>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>
								&nbsp;[<span class="STYLE47">听·音乐</span><span class="STYLE39">是一片干净的心灵栖息地，它属于来到这里的每个人</span>]
							</p>
							<p class="STYLE39">
								&nbsp; 在这个金钱至上的社会里，在这个娱乐至死的时代中，却有些人不甘堕落，不耻沉沦<br /> &nbsp;
								他们在一起互诉衷肠，相濡以沫，用音乐传递内心的声音，坚持着他们的理想和原则<br /> &nbsp; 这就是<span
									class="STYLE47">听·音乐</span>，理想主义者最后的精神家园<br /> &nbsp;
								有观点的聆听，有真实的情感，有独立的判断<br /> &nbsp; 倾听彼此的心灵音乐，温暖你我的内心，唤醒沉睡的梦想<br />
								&nbsp; <span class="STYLE47">听·音乐</span>，欢迎每一个理想不死的人。
							</p> <img src="uploads/images/d.jpg" alt="a" width="262"
							height="262" />
							<p class="STYLE39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</p>
					
					</tr>
				</table>
				<br />
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
 <?php  include 'right.php'; ?>
</div>
 <?php  include 'copyright.php'; ?>
 <script type="text/javascript">
 document.getElementById("right").style.height=document.getElementById("center").scrollHeight+"px";
 document.getElementById("left").style.height=document.getElementById("center").scrollHeight-30+"px";
 </script>
	</div>
</body>
</html>