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

// 選擇身份印出
function getJobList($Mode) {
	global $conn;
	if ($Mode == 1) {
		$sql = 'select * from allowance where teacher = 0;';
	}
	else if ($Mode == 2) {
		$sql = 'select * from allowance where teacher = 1 and secretary = 0;';
	} 
	else if ($Mode == 3) {
		$sql = 'select * from allowance where teacher = 1 and secretary = 1;';
	} else {
		return;
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function getUserStatus($name) {
	global $conn;
	$sql = "select * from allowance where name='$name';";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

// 從allowance取得資料
function getJobDetail($name) {
	global $conn;
	if ($name == -1) { //-1 stands for adding a new record
		$rs=[
			"id" => -1,
			"title" => "new title",
			"content" => "job description",
			"urgent" => "一般"
		];
	} else {
		$sql = "select * from allowance where name='$name';";
		$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
		$rs=mysqli_fetch_assoc($result);
	}
	return $rs;
}
// 從user取得資料
function getUserDetail($name) {
	global $conn;
	if ($name == -1) { //-1 stands for adding a new record
		$rs=[
			"id" => -1,
			"title" => "new title",
			"content" => "job description",
			"urgent" => "一般"
		];
	} else {
		$sql = "select * from user where loginID='$name';";
		$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
		$rs=mysqli_fetch_assoc($result);
	}
	return $rs;
}

// 新增資料到sql
function addJob($name,$sID,$family,$class) {
	global $conn;
	$sql = "insert into allowance (sID, name, family, class, teacher, teacherOpinion, secretary, result, secretaryOpinion, principal) values ('$sID','$name', '$family', '$class', 0, '', 0, '', '', 0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}
?>



