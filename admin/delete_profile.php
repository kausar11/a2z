<?php

include_once "config.php";

	$id =$_REQUEST['id'];
	$sql = "select * from profile where id='$id'";
	$result = $db->query($sql);
	$data = mysqli_fetch_array($result);
	$filename ="$data[1]";
	    if(file_exists($filename)) {
		unlink($filename);
		}
$db->query("DELETE FROM `profile` WHERE id='$id'");
header("LOCATION:profile.php");

?>