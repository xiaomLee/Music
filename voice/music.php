
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel='stylesheet' id='login-css'  href='style.css' type='text/css' media='all' />
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <title>Vocie 音乐</title>
 </head>
 <body>

 <?php ?>
 
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
           <td width="44" height="25" ><span class="STYLE5 STYLE6"><a href="home.php">首页</a></span></td>
            <td width="44"><span class="STYLE5"><a href="music.php">音乐</a></span></td>
            <td width="44"><span class="STYLE5"><a href="vol.php">心情</span><br /></td>
            <td width="44"><span class="STYLE5"><a href="about.php">关于</a></span></td>
            <td width="563">&nbsp;</td>
            <td width="170">
              <input type="text" name="textfield" />
            </td>
            <td width="59"><span class="STYLE5"><a href="http://www.hao123.com/">搜索</a></span></td>
          </tr>
       </table>
     </div>
   </div>
 </div>
 <div id="left">
 <table width="663" border="0">
  <tr>
    <th width="600" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
<?php for ($i=0;$i<10;$i++){?>
 <table width="661" height="320" border="0" bgcolor=#FFFFFF>
   <tr>
     <td width="378" rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  src="../pic_sys/head1.png" width="321" height="282" alt="" /></td>
     <td height="109">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <div align="left">
       <p>名称：1</p>
       <p>专辑：2</p>
       <p>表演者：3</p>
       </div>
       </td> 
   </tr>
   <tr>
     <td width="267" height="91">
	 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="245" height="24">
     <param name="movie" value="03.swf?soundFile=<?php echo "../pic_sys/songbie.mp3"?>&bg=0xb6deed&leftbg=0x06acee&lefticon=0xF2F2F2&rightbg=0x06acee&rightbghover=0x00b5e9&righticon=0xF2F2F2&righticonhover=0xFFFFFF&text=0x06acee&slider=0x06acee&track=0xFFFFFF&border=0xFFFFFF&loader=0x00b5e9&autostart=no&loop=yes" />
     <param name="quality" value="high" />
     <param value="transparent" name="wmode" />
     <embed src="http://www.51119.com/play/swf/03.swf?soundFile=http://f1.xiami.net/23282/168877/07%202085229_67278.mp3&bg=0xb6deed&leftbg=0x06acee&lefticon=0xF2F2F2&rightbg=0x06acee&rightbghover=0x00b5e9&righticon=0xF2F2F2&righticonhover=0xFFFFFF&text=0x06acee&slider=0x06acee&track=0xFFFFFF&border=0xFFFFFF&loader=0x00b5e9&autostart=no&loop=yes" width="245" height="24" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>
  </object>
  </td>
   </tr>
 </table>
 <hr    width="660"  align="left"/>
 <?php } ;?>

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

 </body>
</html>