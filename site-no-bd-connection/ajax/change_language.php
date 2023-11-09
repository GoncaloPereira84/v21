<?php
	require_once "../config/start.php";
    $response = array();
	global $conn;
	if(isset($_POST["langid"])){
		$langid = $conn->real_escape_string($_POST["langid"]);
		$_SESSION["language_id"]=$langid;
	}else{
		exit;
	}

	echo json_encode(true);
?>