<?php
require_once("dbconnect.php");
function addList($family,$class, $teacher) {
	global $conn;
	$sql = "insert into allowance (family,class, teacher) values ('$family','$class', 0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}
function teacherOpi($tOpi) {
	global $conn;
	$sql = "insert into allowance (teacher opinion) values ('$tOpi');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function teacherSig($sID) {
	global $conn;
	$sql = "update allowance set teacher = 1 where id=$sID and teacher <> 0;";
	mysqli_query($conn,$sql);
	//return T/F
}

function result($result) {
	global $conn;
	$sql = "insert into allowance (result) values ('$result');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function secretaryOpi($sOp) {
	global $conn;
	$sql = "insert into allowance (secretary opinion) values ('$sOp');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function secretarySig($sID) {
	global $conn;
	$sql = "update allowance set secretary = 1 where id=$sID and secretay <> 0;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function getJobList($Mode) {
	global $conn;
	if ($Mode == 2) {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from allowance where teacher = 0;";
	}
	if ($Mode == 3) {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from allowance where teacher = 1 and secretary = 0;";
	} 
	if ($Mode == 4) {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from allowance where teacher = 1 and secretary = 1;";
	} else {
		return;
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}
?>