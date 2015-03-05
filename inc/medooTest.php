<?php
include 'dbconfig.php';
include 'medoo.php';

$db = new medoo ( [ 
		// required
		'database_type' => $database_type,
		'database_name' => $database_name,
		'server' => $server,
		'username' => $server_username,
		'password' => $server_userpassword,
		'charset' => 'utf8' 
	] );
//select * from users
$datas=$db->select("users", "*");
foreach ($datas as $data){
	echo $data['username']."<br/>";
	echo $data['email']."<br/>";
	echo $data['tel']."<br/>";
	echo $data['sex']."<br/>";
	echo "<br/>";
}


?>