

<?PHP
include "config.php";
include "functions.php";
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	User Name:<input type="text" name="email"><br>
	Password: <input type="text" name="password"><br>
	Retype Password: <input type="text" name="password2"><br>
	<input type="submit">
<?PHP	
	$email = $pass = $pass2 = "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$email = input($_POST["email"]);
	$pass = input($_POST["password"]);
	$pass2 = input($_POST["password2"]);
	
		if($pass != $pass2)
		{
			echo '<script language="javascript">';
			echo 'alert("Passwords do not match")';
			echo '</script>';
		}
		else
		{
				newUser($con,$email,$pass,$sDb);
		}
	}
?>
</form>