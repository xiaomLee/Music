<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
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

.STYLE6 {
	color: #000000;
	font-size: 12;
}

.STYLE10 {
	color: #000000;
	font-size: 12px;
}

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
</style>
</head>
<body>
<?php
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$loginUser = $_SESSION ['login_user'];
$aa = new mysql ();
$query = "select * from users";
$rst = $aa->excu ( $query );
// echo $rst;
?>
<?php if($loginUser[username]=="xiaom"){?>
<table width="100%" border="0" align="center" cellpadding="0"
		cellspacing="0">
		<tr>
			<td height="30"><table width="100%" border="0" cellspacing="0"
					cellpadding="0">
					<tr>
						<td height="24" bgcolor="#353c44"><table width="100%" border="0"
								cellspacing="0" cellpadding="0">
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td width="6%" height="19" valign="bottom"><div
														align="center">
														<img src="image/4.jpg" width="14" height="14" />
													</div></td>
												<td width="94%" valign="bottom"><span class="STYLE1">
														管理人员基本信息列表</span></td>
											</tr>
										</table>
									</td>
									<td><div align="right">
											<span class="STYLE1">
										
										</div></td>
								</tr>
							</table></td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td><table width="100%" border="0" cellpadding="0" cellspacing="1"
					bgcolor="#a8c7ce">
					<tr>
						<div align="center"></div>
						<td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">用户名</span>
							</div></td>
						<td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">邮箱</span>
							</div></td>
						<td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">电话</span>
							</div></td>
						<td width="16%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">用户性别</span>
							</div></td>
						<td width="27%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">地址</span>
							</div></td>
						<td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div
								align="center">
								<span class="STYLE10">基本操作</span>
							</div></td>
					</tr>
					<?php while ( $user = $rst->fetch_assoc () ){ ?>
					<tr>
						<div align="center"></div>
						<td height="20" bgcolor="#00CCFF" class="STYLE19"><div
								align="center"><?php echo $user[username] ?></div></td>
						<td height="20" bgcolor="#00CCFF" class="STYLE19"><div
								align="center"><?php echo $user[email] ?></div></td>
						<td height="20" bgcolor="#00CCFF" class="STYLE19"><div
								align="center"><?php echo $user[tel] ?></div></td>
						<td height="20" bgcolor="#00CCFF" class="STYLE19"><div
								align="center"><?php echo $user[sex] ?></div></td>
						<td height="20" bgcolor="#00CCFF" class="STYLE19"><div
								align="center"><?php echo $user[address] ?></div></td>
						<td height="20" bgcolor="#00CCFF"><div align="center">
								<span class="STYLE21"><a
									href="showInfo.php?userid=<?php echo $user[userid] ?>">查看</a>&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="delAdmin?id=<?php echo $user[userid] ?>">删除</a></span>
							</div></td>
					</tr>
					<?php } ?> 
				
				</table></td> <?php

} else
	echo "您无权查看所有人员信息！";?>


</body>
</html>

