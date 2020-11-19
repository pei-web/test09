<?php
session_start();
// if (! isset($_SESSION['uID']) or $_SESSION['uID']!="boss") {
// 	header("Location: loginForm.php");
// } 

require("listModel.php");

$id = (int)$_GET['id'];
$rs = getJobDetail($id);
if (! $rs) {
	echo "no data found";
	exit(0);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>基本資料</h1>
<form method="post" action="todoApplydControl.php">

	  <input type='hidden' name='id' value='<?php echo $id ?>'>

      Student family: <input name="family" type="text" id="family" value="<?php echo htmlspecialchars($rs['family']);?>" /> <br>

      task description: <input name="msg" type="text" id="msg" value="<?php echo htmlspecialchars($rs['content']);?>" /> <br>

	  Student class: <select  name="class" type="select" id="class" /> 
				<?php
					echo "<option value='{$rs['class']}'>{$rs['class']}</option>";
				?>
					<option value='低收入戶'>低收入戶</option>
					<option value='中低收入戶'>中低收入戶</option>
					<option value='家庭突發狀況'>家庭突發狀況</option>
					</select>
	  <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>

