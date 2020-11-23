<?php
require_once("dbconnect.php");

// 註冊
function register($name,$studentID,$password) {
	global $conn;
	$sql = "insert into user (loginID, sID, password) values ('$name','$studentID', '$password');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

// 老師評論
function teacherOpi($sID, $tOpi) {
	global $conn;
	$sql = "update allowance set teacherOpinion='$tOpi', teacher=1 where sID='$sID';";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

// 秘書評論、補助金額
function secretaryOpi($sID, $sOp, $result) {
	global $conn;
	$sql = "update allowance set secretaryOpinion='$sOp', secretary=1, result='$result' where sID='$sID';";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function principalReturn($sID) {
	global $conn;
	$sql = "update allowance set teacher=0, teacherOpinion='', secretary=0, result='', secretaryOpinion='', principal=0 where sID='$sID';";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}

function principalClose($sID) {
	global $conn;
	$sql = "update allowance set principal=1 where sID='$sID';";
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
		$sql = 'select * from allowance where teacher = 1 and secretary = 1 and principal = 0;';
	} else {
		return;
	}
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

// 查看此user的申請狀態
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
	$sql = "select * from user where loginID='$name';";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	$rs=mysqli_fetch_assoc($result);
	return $rs;
}

function getDataDetail($sID) {
	global $conn;
	$sql = "select * from allowance where sID='$sID';";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	$rs=mysqli_fetch_assoc($result);
	return $rs;
}

// 新增資料到sql
function addJob($name,$sID,$family,$class) {
	global $conn;
	$sql = "insert into allowance (sID, name, family, class, teacher, teacherOpinion, secretary, result, secretaryOpinion, principal) values ('$sID','$name', '$family', '$class', 0, '', 0, '', '', 0);";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL	
}
?>



