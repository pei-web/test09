<?php
require_once("dbconnect.php");

function checkUserIDPwd($userName, $passWord) {
	global $conn;
$userName = mysqli_real_escape_string($conn,$userName);
$isValid = false;

$sql = "SELECT sID FROM allowance WHERE name ='$userName'";
if ($result = mysqli_query($conn,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['sID'] == $passWord) {
			//keep the user ID in session as a mark of login
			//$_SESSION['uID'] = $row['id'];
			//provide a link to the message list UI
			$isValid = true;
		}
	}
}
return $isValid;
}



function getUserPwd() {
	global $conn;
	$sql = "select * from user;";
	$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
	return $result;
}

function setUserPassword($userName){
		return false;
}

?>









