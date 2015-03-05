<?php
session_start ();
include 'dbutil/dbconfig.php';
include 'dbutil/medoo.php';

$db = new medoo ( $link_url );
$query = "select * from vol t1 where t1.id=(select max(id) from vol) ";
$maxVol = $db->query ( $query )->fetchAll ();
if (isset ($_GET[vol] ))
	$_SESSION [volId] = $_GET[vol];
else
	$_SESSION [volId] = $maxVol [0] [id];
header("location:home.php");

?>