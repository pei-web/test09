<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
if ($_SESSION['uID']=='student'){
	$Mode = 1;
}
if ($_SESSION['uID']=='teacher'){
	$Mode = 2;
}
if ($_SESSION['uID']=='secretary'){
	$Mode = 3;
} else {
	$Mode = 4;
}
require("listModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}



$result=getJobList($Mode);
$jobStatus = array('未完成','已完成','已結案','已取消');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>my Todo List !! </p>
<hr />
<div><?php echo $msg; ?></div><hr>
<a href="loginForm.php">login</a> | <a href="todoEditForm.php?id=-1">Add Task</a> <br>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>sID</td>
    <td>name</td>
	<td>family</td>
    <td>class</td>
	<td>teacher</td>
	<td>teacher opinion</td>
	<td>secretary</td>
	<td>result</td>
	<td>secretary opinion</td>
	<td>principal</td>
  </tr>
<?php

while (	$rs=mysqli_fetch_assoc($result)) {
	// switch($rs['urgent']) {
	// 	case '緊急':
	// 		$bgColor="#ff9999";
	// 		$timeLimit = 60;
	// 		break;
	// 	case '重要':
	// 		$bgColor="#99ff99";
	// 		$timeLimit = 120;
	// 		break;
	// 	default:
	// 		$bgColor="#ffffff";
	// 		$timeLimit = 180;
	// 		break;
	// }

	// if ($rs['diff']>$timeLimit) {
	// 	$fontColor="red";
	// } else {
	// 	$fontColor="black";		
	// }

	echo "<tr><td>" . $rs['id'] . "</td>";
	echo "<td>{$rs['sID']}</td>";
	echo "<td>{$rs['name']}</td>";
	echo "<td>{$rs['family']}</td>";
	echo "<td>{$rs['class']}</td>";
	echo "<td>{$rs['teacher']}</td>";
	echo "<td>{$rs['teacher opinion']}</td>";
	echo "<td>{$rs['secretary']}</td>";
	echo "<td>{$rs['result']}</td>";
	echo "<td>{$rs['secretary opinion']}</td>";
	echo "<td>{$rs['principal']}</td>";
	// echo "<td>" , htmlspecialchars($rs['urgent']), "</td>";
	// echo "<td>{$jobStatus[$rs['status']]}</td>" ;
	// echo "<td><font color='$fontColor'>{$rs['diff']}</font></td><td>";
	// switch($rs['status']) {
	// 	case 0:
	// 		if ($bossMode) {
	// 			echo "<a href='todoEditForm.php?id={$rs['id']}'>Edit</a>  ";	
	// 			echo "<a href='todoSetControl.php?act=cancel&id={$rs['id']}'>Cancel</a>  " ;
	// 		} else {
	// 			echo "<a href='todoSetControl.php?act=finish&id={$rs['id']}'>Finish</a>  ";
	// 		}

	// 		break;
	// 	case 1:
	// 		echo "<a href='todoSetControl.php?act=reject&id={$rs['id']}'>Reject</a>  ";
	// 		echo "<a href='todoSetControl.php?act=close&id={$rs['id']}'>Close</a>  ";
	// 		break;
	// 	default:
	// 		break;
	// }
	echo "</tr>";
}
?>
</table>
<a href = "apply.php">apply</a>
</body>
</html>
