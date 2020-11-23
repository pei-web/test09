<?php

require("listModel.php");

$name=mysqli_real_escape_string($conn,$_POST['name']);
$studentID=mysqli_real_escape_string($conn,$_POST['studentID']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

if ($name && $studentID && $password) { 
	register($name,$studentID,$password);
    $msg="register success!";
    header("Location: loginForm.php?m=$msg");
} else {
    $msg= "Message cannot be empty";
    header("Location: register.php?m=$msg");
}
?>