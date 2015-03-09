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
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
-->
</style>
</head>

<body>
<?php 
include '../dbutil/dbconfig.php';
include '../dbutil/medoo.php';

$db=new medoo($link_url);
$vols=$db->select("vol", "*");
$volId=$_GET['vol'];
$musics;
if(empty($volId)||$volId=='all'){
	$musics=$db->select("music",["[>]vol"=>["volid"=>"id"]], "*");
	$selectedVol="全部歌曲";
}
else {
	$musics=$db->select("music", ["[>]vol"=>["volid"=>"id"]],"*",["volid"=>$volId]);
	$selecteds=$db->select("vol", "*",["id"=>$volId]);
	$selectedVol="Vol.".$selecteds[0][vol].$selecteds[0][theme];
}
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="788" border="0" cellspacing="0" cellpadding="0" height="50">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="images/16.jpg" width="38" height="20"/></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 所有音乐信息</span></td>
              </tr>
            <tr>
              <td><font size="1" color="#ffffff">请选择主题：</font></td> 
           <td>
           <select name="vol" onchange="javascript:window.location.href='showMusic.php?vol='+this.value;">
           
           <option value="all" <?php if($vol[id]==$volId) echo "selected"; ?> >&nbsp;&nbsp;全部歌曲</option>
            <?php foreach ($vols as $vol){?>
            <option value=<?php echo $vol[id]." "; if($vol[id]==$volId) echo "selected"; ?>>&nbsp;&nbsp;Vol.<?php echo $vol[vol];?>&nbsp;<?php echo $vol[theme];?>&nbsp;</option>
            <?php }?>
             </select>
           </td>
           </tr>
            </table></td>
           </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
<tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <div align="center">   
        </div>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10"><font size="1">音乐名称</font></span></div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10"><font size="1">所属专辑</font></span></div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10"><font size="1">歌手名</font></span></div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10"><font size="1">所属期号</font></span></div></td>
        <td width="12%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10"><font size="1">操作</font></span></div></td>  
      </tr>
      <?php foreach ($musics as $music){ ?>
      <tr>
      <div align="center">     
        </div>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><font size="1"><?php echo  $music[music]?></font></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><font size="1">《<?php echo  $music[cdname] ?>》</font></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><font size="1"><?php echo  $music[cdname] ?></font></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><font size="1">Vol.<?php echo $music[vol].$music[theme]  ?></font></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"> <font size="1"><a href="showMusicinfo.jsp?id=<?php echo  $music[id] ?>">查看</a></font> <font size="1"><a href="delMusic?id=<?php echo  $music[id] ?>">删除</a></font></div> </td>
      </tr>
      <?php }?>
    </table>
    </tr>
    </table>      
</body>
</html>
       