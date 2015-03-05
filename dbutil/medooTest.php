<?php
include 'dbconfig.php';
include 'medoo.php';

$db = new medoo ($link_url); 

// select方法

  $datas=$db->select("users", "*"); 
  foreach ($datas as $data){ 
  	echo $data['username']."<br/>"; 
  	echo $data['email']."<br/>"; 
  	echo $data['tel']."<br/>"; 
  	echo $data['sex']."<br/>"; 
  	echo "<br/>"; 
  }


echo  "query方法 查询"."<br/>";
 $datas = $db->query ( "SELECT * FROM users" )->fetchAll ();
foreach ( $datas as $data ) {
	echo $data ['username'] . "<br/>";
	echo $data ['email'] . "<br/>";
	echo $data ['tel'] . "<br/>";
	echo $data ['sex'] . "<br/>";
	echo "<br/>";
} 

echo "query 方法 插入"."<br/>";
// query 方法 插入
$db->query ( "create tabel medooTest(
		c1 INT ,
		c2 INT 
		) ;" );

// print sql log
var_dump ( $db->log () );

// insert
/* $db->insert ( "users", [ 
		"username" => "medoo",
		"email" => "medoo@123.com",
		"tel" => "123",
		"sex" => "F" ,
		"creation_date"=>"2015-3-3"
	] );
var_dump ( $db->log () );

//delete
$db->delete("users", [
	"AND"=>[
		"userid"=>9,
		"email"=>"medoo@123.com"
	]	
]) ; */

?>


