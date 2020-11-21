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

<p>申請補助選單 !! </p>
<div><font color="blue" size="5pt"><?php echo "hello $uID"; ?></font></div>
<div><?php echo $msg; ?></div><hr>
<a href = "loginForm.php">logout</a> 
<a href = "apply.php">apply</a>
<a href = "CheckStatus.php">CheckStatus</a>
</body>
</html>
