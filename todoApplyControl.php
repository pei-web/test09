<?php
session_start();

require("listModel.php");
$name = $_SESSION['uID'];
$sID = $_SESSION['sID'];
$family=mysqli_real_escape_string($conn,$_POST['family']);
$class=mysqli_real_escape_string($conn,$_POST['class']);

if ($family) { //if title is not empty
	addJob($name,$sID,$family, $class);
	$msg="Message added";
} else {
	$msg= "Message family cannot be empty";
}
header("Location: userListView.php?m=$msg");
?>