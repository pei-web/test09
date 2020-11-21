<?php
session_start();
// if (! isset($_SESSION['uID']) or $_SESSION['uID']!="boss") {
// 	header("Location: loginForm.php");
// } 
require("listModel.php");

$sID = (int)$_GET['sID'];

$rs = getDataDetail($sID);

// if (! $rs) {
// 	echo "no data found";
// 	exit(0);
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基本資料</title>
</head>
<body>
<h1>基本資料</h1>
<form method="post" action="tEditControl.php">

	  <input type='hidden' name='id' value='<?php echo $sID ?>'>
	  name : <?php echo ($rs['name'])?> <br>

	  Student ID : <?php echo ($rs['sID']);?> <br>

      Student family: <?php echo ($rs['family']);?> <br>

	  Student class: <?php echo ($rs['class']);?> <br>

      Teacher opinion : <input name="opinion" type="text" id="opinion"/> <br>
      <input type="submit" name="Submit" value="送出" />
	</form>
<a href = "todoListView.php">Back</a>
</body>
</html>

