<?php
session_start ();
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
	echo'<meta http-equiv=\"refresh\" content="5;URL=main.php">';
	echo "success";
}
	?>