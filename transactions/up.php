<?php
include('conn.php');
// insert variables
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
// check and insert
if (isset($name)&&isset($email)&&isset($pass)){
	$sql = mysqli_query($conn,"SELECT * FROM signup Where username='$name'");
	$count =  mysqli_num_rows($sql);
	if($count == 0){
		$sql = mysqli_query($conn,"SELECT * FROM signup Where email='$email'");
		$count =  mysqli_num_rows($sql);
		if($count == 0){
			$sql = mysqli_query($conn,"INSERT INTO signup SET username = '$name', email = '$email', password = '".md5($_POST['pass'])."'");
			echo json_encode("Sign Up successfully!");
		}else{
			echo json_encode("email already been taken!");
		}
	}else{
		echo json_encode("User already been registered!");
	}
}



?>