<?php
session_start ();
if(!isset($_SESSION[login_user]))
	header("location:error.php");

$loginUser = $_SESSION [loginuser];
$userid=$_GET[id];
include '../dbutil/medoo.php';
include '../dbutil/dbconfig.php';

$db = new medoo ( $link_url );
if ($db->delete( "users", ["userid"=>$userid] )){
	echo "success...3秒后跳转到查询页";
	?>
<meta http-equiv="refresh" content="3;URL=right.php">
<?php }?>
