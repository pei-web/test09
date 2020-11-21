<?php
session_start();
if (! isset($_SESSION['uID']) or $_SESSION['uID']<="") {
	header("Location: loginForm.php");
} 

require("listModel.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}

$name = $_SESSION['uID'];
$result=getUserStatus($name);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>申請資料</title>
</head>

<body>

<p>你的申請資料 !! </p>
<hr />
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
    echo "</tr>";
}
?>
</table>
<a href = "userListView.php">Back</a>
</body>
</html>
