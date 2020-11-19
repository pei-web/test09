<?php
require_once("dbconnect.php");

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

?>