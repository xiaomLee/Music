<?php
$vols = $db->select ( "vol", "*" );
?>
<div id="right">
	<table width="237" height="309" border="0">
		<tr>
			<td width="206"><p>
					音乐是一种态度<br /> 不 论是作者还是聆听者<br /> 它流经心灵<br /> 纵然期待影响现实的力量是种奢望<br />
					如果刚巧有些声音<br /> 会叫你记得一段往事<br /> 伤痛或是甜蜜<br /> 那记忆便有了厚厚的壳<br /> 恒久的
					温暖有如初生
				</p></td>
		</tr>
	</table>
	<table width="265" border="0" cellpadding="2" cellspacing="0"
		align="center">
		<tbody>
			<tr>
				<td><a target="_blank" href="http://jzpd.taobao.com/"><img
						src="http://www.luoo.net/ad/jzpd.jpg" alt="" width="239"
						height="81" /></a></td>
			</tr>

			<tr>
				<td><a target="_blank" href="http://ywsoap.taobao.com/"><img
						src="http://www.luoo.net/ad/yw.jpg" alt="" width="239" height="77" /></a></td>
			</tr>


			<tr>
				<td><a target="_blank"
					href="http://www.nuandao.com/?utm_campaign=campaign1&utm_medium=banner&utm_source=luo&utm_content=265x84"><img
						src="http://www.luoo.net/ad/nd.jpg" alt="暖岛" width="239"
						height="84" /></a></td>
			</tr>

			<tr>

				<td><a target="_blank" href="http://bensherman.taobao.com/"><img
						src="http://www.luoo.net/ad/ylgs.jpg" alt="英伦故事" width="239"
						height="83" /></a></td>
			</tr>
			<tr>
				<td><a target="_blank"
					href="http://item.taobao.com/item.htm?spm=2013.1.w797257032.4.ETUZ8u&id=18020297053"><img
						src="http://www.luoo.net/ad/muji.gif" alt="" width="239"
						height="78" /></a></td>
			</tr>
		</tbody>
	</table>
	<table width="268" border="0">
		<tr>
			<td width="258">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td height="25">&nbsp;</td>
		</tr>
	</table>
	<table width="240" border="0" align="center">
<?php foreach ($vols as $vol){?>
     <tr>
			<td width="240"><div align="left">
					<a href="index.php?vol=<?php echo $vol[id];?>"><font size="2.8">vol.<?php echo $vol[vol]. $vol[theme] ;?></a>
				</div></td>
		</tr>
 <?php }?>
   </table>
	<p>&nbsp;</p>
</div>

