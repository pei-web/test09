<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
$uID = $_SESSION['uID'];
require("listModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}

$jobStatus = array('未完成','已完成','已結案','已取消');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<div><?php echo "hello $uID"; ?></div><hr>
<p>申請補助選單 !! </p>
<div><?php echo $msg; ?></div><hr>
<a href = "loginForm.php">login</a> 
<a href = "apply.php">apply</a>
<a href = "CheckStatus.php">CheckStatus</a>
</body>
</html>
