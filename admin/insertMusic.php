<?php
session_start ();
if(!isset($_SESSION[login_user]))
	header("location:error.php");
include '../dbutil/dbconfig.php';
include '../dbutil/medoo.php';
if ($_FILES ["cdimage"] ["error"] > 0 || $_FILES ["url"] ["error"] > 0) {
	echo "Return Code: " . $_FILES ["cdimage"] ["error"] . "<br />" . $_FILES ["url"] ["error"] . "<br/>";
} else {
	$vol = $_POST [vol];
	$music = $_POST [music];
	$singer = $_POST [singer];
	$cdname = $_POST [cdname];
	$cdimage = "uploads/images/" . $_FILES ["cdimage"] ["name"];
	$url = "uploads/music/" . $_FILES ["url"] ["name"];
	$data = [ 
			"volid" => $vol,
			"music" => $music,
			"singer" => $singer,
			"cdname" => $cdname,
			"cdimage" => $cdimage,
			"url" => $url 
	];
	
	// 连接数据库
	$db = new medoo ( $link_url );
	if (file_exists ( "../uploads/images/" . $_FILES ["cdimage"] ["name"] ) || file_exists ( "../uploads/music/" . $_FILES ["url"] ["name"] )) {
		echo $_FILES ["cdimage"] ["name"] . " or " . $_FILES ["url"] ["name"] . " already exists. ";
	} else {
		move_uploaded_file ( $_FILES ["cdimage"] ["tmp_name"], "../uploads/images/" . $_FILES ["cdimage"] ["name"] );
		move_uploaded_file ( $_FILES ["url"] ["tmp_name"], "../uploads/music/" . $_FILES ["url"] ["name"] );
		if ($db->insert ( "music", $data )){
			echo "添加成功,3秒后跳转到查询页";
		?>
			<meta http-equiv="refresh" content="3;URL=showMusic.php">
			<?php }
			else{
				echo "添加失败，3秒后返回添加页";
			?>
			<meta http-equiv="refresh" content="3;URL=addMusic.php">
		<?php }
	}
}
?>