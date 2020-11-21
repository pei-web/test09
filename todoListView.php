<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 
else if ($_SESSION['uID'] =='teacher'){
	$Mode = 1;
}
else if ($_SESSION['uID'] =='secretary'){
	$Mode = 2;
} 
else if ($_SESSION['uID'] =='principal') {
	$Mode = 3;
}

require("listModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}



$result=getJobList($Mode);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>補助申請清單</title>
</head>

<body>

<p>補助申請清單 !! </p>
<hr />
<div><font color="blue" size="5pt"><?php echo "Hello {$_SESSION['uID']}"; ?></font></div>
<div><?php echo $msg; ?></div><hr>
<table width="200" border="1">
  <tr>
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
  <td>Review/Return/Close</td>
  </tr>
<?php
while ($rs=mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$rs['sID']}</td>";
    echo "<td>{$rs['name']}</td>";
    echo "<td>{$rs['family']}</td>";
    echo "<td>{$rs['class']}</td>";
    echo "<td>{$rs['teacher']}</td>";
    echo "<td>{$rs['teacherOpinion']}</td>";
    echo "<td>{$rs['secretary']}</td>";
    echo "<td>{$rs['result']}</td>";
    echo "<td>{$rs['secretaryOpinion']}</td>";
    echo "<td>{$rs['principal']}</td>";
    if ($Mode == 1) {
      echo "<td><a href = 'tEdit.php?sID={$rs['sID']}'>Review</a></td>";
    }
    else if ($Mode == 2) {
      echo "<td><a href = 'sEdit.php?sID={$rs['sID']}'>Review</a></td>";
    } else {
      echo "<td><a href = 'pEdit.php?sID={$rs['sID']}&id=0'>Return</a><br>";
      echo "<a href = 'pEdit.php?sID={$rs['sID']}&id=1'>Case Close</a></td>";
    }
    echo "</tr>";
}
?>
</table>
<a href="loginForm.php">logout</a>
</body>
</html>
