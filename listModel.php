<?php
require_once("dbconnect.php");

function addlist($family,$class,$teacher) {
	global $conn;
	$sql = "insert into allowance (family, class, teacher) values ('$family','$class',0);";
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
function getJobList($Mode) {
	global $conn;
	if ($bossMode) {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo order by status, urgent desc;";
	} else {
		$sql = "select *, TIME_TO_SEC(TIMEDIFF(NOW(), addTime)) diff from todo where status = 0;";
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
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
function checkStudentList($id) {
	global $conn;
	$sql = "select id, sID, name, class,teacher,teacher opinion, secretary,secretary opinion,result from allowance where id=$id;";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	$rs=mysqli_fetch_assoc($result);
	return $rs;
}
?>