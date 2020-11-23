<?php 
    if (isset($_GET['m'])){
        $msg="<font color='red'>" . $_GET['m'] . "</font>";
    } else {
        $msg="Good morning";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊</title>
</head>
<body>
<h1>註冊</h1>
<div><?php echo $msg; ?></div><hr>
<form method="post" action="registerControl.php">

	  name : <input name="name" type="text" id="name"/> <br>

	  Student ID : <input name="studentID" type="text" id="studentID"/> <br>

      Password: <input name="password" type="text" id="password"/> <br>

	  <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
<a href = "loginForm.php">Back</a>
</body>
</html>

