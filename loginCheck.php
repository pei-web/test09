<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];

if (checkUserIDPwd($userName, $passWord)) {
    if ($userName == "teacher" | "secretary" | "principal") {
        $_SESSION['uID'] = $userName;
        header("Location: todoListView.php");
	}
	else {
		$_SESSION['uID'] = $userName;
		header("Location: userListView.php");
	}
} else {
	$_SESSION['uID']="";
	header("Location: loginForm.php");
}
?>
