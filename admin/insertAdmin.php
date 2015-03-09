<?php
session_start ();
if(!isset($_SESSION[login_user]))
	header("location:error.php");

$loginUser = $_SESSION [loginuser];
$datas = [ 
		"username" => $_POST[username],
		"password"=>$_POST[pw],
		"email" => $_POST[email],
		"tel" => $_POST[tel],
		"sex" => $_POST[sex],
		"created_by"=>$loginUser[userid],
		"creation_date" => $_server['server_time']
];
include '../dbutil/medoo.php';
include '../dbutil/dbconfig.php';

$db = new medoo ( $link_url );
if ($db->insert( "users", $datas )){
	echo "success...3秒后跳转到查询页";
?>
<meta http-equiv="refresh" content="3;URL=right.php">
<?php }?>