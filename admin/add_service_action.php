<?php
	require_once "../config.php";
	$header_text = $_POST['header_text'];
	$description = $_POST['description'];
	$barcode=strtotime(date('Y-m-d H:i:s'));
	$up = "../service/".$barcode.".jpg";
	$path = "service/".$barcode.".jpg";
	if($_REQUEST['update']==1){
		$id = $_REQUEST['id'];
		$sql = "select * from service where id='$id'";
		$result = $db->query($sql);
		$data = mysqli_fetch_array($result);
		$file = "../".$data[1];
		if(file_exists($file)){
			unlink($file);
		}
		if(is_uploaded_file($_FILES['photo']['tmp_name'])){
			move_uploaded_file($_FILES['photo']['tmp_name'],$up);
		}
		$db->query("UPDATE `service` SET `img_path`='$path',`header`='$header_text',`text`='$description' WHERE id='$id'");
		header("LOCATION:service.php");
	}
	else{
		if(is_uploaded_file($_FILES['photo']['tmp_name'])){
			move_uploaded_file($_FILES['photo']['tmp_name'],$up);
		}
		$db->query("INSERT INTO `service`(`id`, `img_path`, `header`, `text`) VALUES ('','$path','$header_text','$description')");
		header("LOCATION:service.php");
	}
?>