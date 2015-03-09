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
			<tr height="200px">
				<td/>
			</tr>
		<?php foreach ($vols as $vol){?>
			<tr>
				<td><a target="" href="index.php?vol=<?php echo $vol[id];?>"><img
						src="<?php echo $vol[image];?>" alt="" width="239"
						height="81" /><br/>vol.<?php echo $vol[vol]. $vol[theme] ;?></a></td>
			</tr>
		<?php }?>	
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
	<p>&nbsp;</p>
</div>

