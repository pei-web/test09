<?php

require("listModel.php");

$sID = (int)$_GET['sID'];
$id = (int)$_GET['id'];

if ($id == 0) { //if opinion is not empty
    principalReturn($sID);
	$msg="Case Returned";
} else {
    principalClose($sID);
	$msg= "Case Closed";
}
header("Location: todoListView.php?m=$msg");
?>