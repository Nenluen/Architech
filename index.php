<!DOCTYPE html>
<html>
<body>
<?php
include "config.php";
include "functions.php";
checkTable($con, $sDb);


?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	User Name:<input type="text" name="user"><br>
	Password: <input type="text" name="password"><br>
	<input type="submit">
	<br><a href="createuser.php">Need to create an account?</a>
</form>
	
<?php
$email = $pass = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$user = input($_POST["user"]);
	$pass = input($_POST["password"]);
	login($con,$user,$pass);
}



?>

</body>
</html>