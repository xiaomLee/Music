<?php 
session_start();
if(!isset($_SESSION[login_user]))
	header("location:error.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
#Layer4 {
	position:absolute;
	width:360px;
	height:40px;
	z-index:8;
	left: 67px;
	top: -10px;
}
#Layer5 {
	position:absolute;
	width:83px;
	height:28px;
	z-index:3;
	left: 75px;
	top: 80px;
}
#Layer21 {
	position:absolute;
	width:299px;
	height:219px;
	z-index:15;
	left: 598px;
	top: 130px;
}
#Layer22 {
	position:absolute;
	width:200px;
	height:33px;
	z-index:16;
	left: 786px;
	top: 350px;
}
.STYLE3 {font-size: 20px}
.STYLE5 {
	font-family: "新宋体";
	font-size: 20px;
}
.STYLE6 {font-family: "方正舒体"}
.STYLE7 {font-size: 50px; font-family: "方正舒体"; }
.STYLE9 {
	font-family: "宋体";
	font-size: 20px;
}
.STYLE12 {font-size: 30px}
.STYLE13 {font-size: 20px}
<!--
</style></head>

<body background="image/13.jpg">
<?php 
include '../dbutil/medoo.php';
include '../dbutil/dbconfig.php';
$db = new medoo ( $link_url );
$datas=$db->select("vol", "*")
?>
<div id="Layer4">
  <p><span class="STYLE5">欢迎加入</span><span class="STYLE7"> v</span><span class="STYLE6"><span class="STYLE3">oice音乐</span></span></p>
  <div class="STYLE9" id="Layer5">添加音乐</div>
</div>
  <form name="addmusic" action="insertMusic.php" method="post" enctype="multipart/form-data">

<table align="left" width="360" border="0" cellspacing="0" cellpadding="0" height="317">
  
  <tr align="left">
  <td>&nbsp;</td>
  </tr>
  <tr align="left">
  <td>&nbsp;</td>
  </tr>
  <tr align="left">
  <td>&nbsp;</td>
  </tr>
  <tr align="left">
  <td>&nbsp;</td>
  </tr>
  <tr align="left">
  <td>&nbsp;</td>
  </tr>
  <tr align="left">
  <td>&nbsp;</td>
  </tr>

  <tr>
    <td align="left"><font size="1">选择主题:</font> 
    <select name="vol" style="width: 170px ">
    <option>&nbsp;</option>
    <?php foreach ($datas as $data){?>
    <option value=<?php echo $data[id] ;?>>&nbsp;&nbsp;vol.<?php echo $data[vol];?>&nbsp;<?php echo $data[theme];?>&nbsp;</option>
    <?php } ?>
    </select></td>
    </tr>
    <tr> <td>&nbsp;</td></tr>
    <tr>
    <td align="left"><font size="1">音乐名称：</font><input type="text" name="music"/>
    </td>
    </tr>
    <tr> <td>&nbsp;</td></tr>
    <tr>
    <td align="left"><font size="1">歌手名称：</font><input type="text" name="singer"/>
    </td>
    </tr>
    <tr> <td>&nbsp;</td></tr>
    <tr>
    <td align="left"><font size="1">所属专辑：</font><input type="text" name="cdname"/>
    </td>
    </tr>
    <tr> <td>&nbsp;</td></tr>
       <tr>
    <td align="left"><font size="1">专辑封面：</font><input type="file" name="cdimage"/>
    </td>
    </tr>
    <tr> <td>&nbsp;</td></tr>
      <tr>
    <td align="left"><font size="1">上传音乐：</font><input type="file" name="url"/>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td align="left"><input type="hidden" value="1" name="flag"/><input type="submit" value="添加"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"/></td>
    </tr>
    </table>
    <div id="Layer21"><img src="images/r.jpg" width="307" height="222" /></div>
    <div id="Layer22"><span class="STYLE6"><span class="STYLE12">v</span><span class="STYLE13">oice</span></span><span class="STYLE13"></span></div>
    </form>
    </body>
    </html>