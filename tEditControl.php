<?php

require("listModel.php");

$opinion=mysqli_real_escape_string($conn,$_POST['opinion']);
$sID=mysqli_real_escape_string($conn,$_POST['id']);

if ($opinion) { //if opinion is not empty
    teacherOpi($sID, $opinion);
	$msg="Review Completed";
} else {
	$msg= "Message opinion cannot be empty";
}
header("Location: todoListView.php?m=$msg");
?>