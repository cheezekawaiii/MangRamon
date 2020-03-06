<?php
include('conn.php');
session_start();
//login variables
$lname = $_POST['name'];
$lpass = $_POST['pass'];
//login
if (isset($lname)&&isset($lpass)) {
	$newpass = md5($lpass);
	$sql = mysqli_query($conn,"SELECT * FROM signup Where username='$lname' AND password='$newpass'");
	$count =  mysqli_num_rows($sql);
	if ($count == 1) {
		while($row = mysqli_fetch_array($sql)) {
		$_SESSION["user"] = $row['username'];
		$_SESSION["pass"] = $row['password'];
		echo json_encode("success");
		}
	}else{
		echo json_encode("failed");
	}
}
?>
