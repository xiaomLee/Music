<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN">
<head>
<title>登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel='stylesheet' id='login-css' href='login.css' type='text/css'
	media='all' />
</head>
<body class="login">

	<div id="login">
		<h1>管理员登录</h1>

		<form name="loginform" id="loginform" action="logincheck.php"
			method="post">
			<p>
				<label>用户名<br /> <input type="text" name="name" id="user_login"
					class="input" value="<?php 
					 if(isset($_SESSION['manage_name']))
					    echo $_SESSION['manage_name']?>" size="20" tabindex="10" />
				</label>
			</p>
			<p>
				<label>密码<br /> <input type="password" name="pw" id="user_pass"
					class="input" value="" size="20" tabindex="20" />
				</label>
			</p>
			<p class="submit">
				<?php
				if (isset ( $_SESSION ["login_msg"] )) {
					echo $_SESSION ["login_msg"];
				}
				?>
				<input type="submit" name="login" id="wp-submit"
					class="button-primary" value="login" tabindex="100" />
			</p>
		</form>
	</div>

	<script type="text/javascript">
		try {
			document.getElementById('user_login').focus();
		} catch (e) {
		}
	</script>
</body>
</html>

