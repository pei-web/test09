<?php
session_start();
//set the login mark to empty
$_SESSION['uID'] = "";
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}
?>
<h1>Login Form</h1><hr />
<div><?php echo $msg; ?></div><hr>
<form method="post" action="loginCheck.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>
<a href='register.php'>register</a> <br>
<a href='getUserPassword.php'>Tell me passwords</A>