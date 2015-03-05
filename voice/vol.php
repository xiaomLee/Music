<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel='stylesheet' id='style-css'  href='style.css' type='text/css' media='all' />
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Vocie 音乐</title>
 </head>
 <body>
<?php 
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$query="select * from user_info";
$rst=$aa->excu($query);


?>
 <div class="main">
 <div class="top">
   <table width="927" height="87" border="0">
     <tr>
       <td><div align="right" class="STYLE4">voice音乐</div>                                                                                                                               </td>
     </tr>
   </table>
 </div>
 <div id="center" >
 <div id="menu">
   <div id="Layer3">
     <div align="left">
       <table width="998" border="0" height="15">
         <tr>
           <td width="44" height="25" ><span class="STYLE5 STYLE6"><a href=home.php>首页</a></span></td>
            <td width="44"><span class="STYLE5"><a href="music.jsp">音乐</a></span></td>
            <td width="44"><span class="STYLE5"><a href="vol.jsp">心情</span><br /></td>
            <td width="44"><span class="STYLE5"><a href="about.jsp">关于</a></span></td>
            <td width="563">&nbsp;</td>
            <td width="170">
              <input type="text" name="textfield" />
            </td>
            <td width="59"><span class="STYLE5"><a href="#">搜索</a></span></td>
          </tr>
       </table>
     </div>
   </div>
 </div>
 <div id="left">
   <form id="form1" name="form1" method="post" action="">
     <label></label>
   </form>
   <form id="form2" name="form2" method="post" action="">
     <label></label>
     <table width="346" border="0">
       <tr>
         <td>&nbsp;</td>
       </tr>
     </table>
   </form>
   <table width="300" border="0" align="center"  >
     <tr>
       <td><?php 
       while ($user = $rst->fetch_assoc()){
			echo $user["user_name"];
		
        ?></td>
     </tr>
   </table>
   <br />
   <p align="left">
   <?php 
   		echo $user["user_pw"] ."<br/>";
   }
   ?></p
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

 </body>
</html>