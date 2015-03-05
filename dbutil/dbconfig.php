<?php
// MySQL -> mysql
$db_type = "mysql";
$db_name = "voice";
$server_url = "localhost";
$server_username = "xiaom";
$server_userpassword = "xiaom";
$link_url = [ 
		// required
		'database_type' => $db_type,
		'database_name' => $db_name,
		'server' => $server,
		'username' => $server_username,
		'password' => $server_userpassword,
		'charset' => 'gb2312',
		// optional
		'port' => 3306,
		// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
		'option' => [ 
				PDO::ATTR_CASE => PDO::CASE_NATURAL 
		] 
];
?>