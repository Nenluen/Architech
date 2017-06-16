<?php
#Stuff you need to play with:

#MySQL Server location:
$server = "localhost:3306";
#server Login credentials:
$sName = "root";
$sPass = "12345";



#Stuff to leave alone

#database schema name
$sDb = "architech";
#DB connection constant
$con=mysqli_connect($server,$sName,$sPass,$sDb);
#DB Failure output, to help debug DB connections
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error() . mysqli_connect_errno();
	if(mysqli_connect_errno()==1049)
	{
		$con=mysqli_connect($server,$sName,$sPass);
		$sql="CREATE DATABASE " . $sDb;
		mysqli_query($con,$sql);
		echo "<p>Database is being created, refresh the page";
	}
}

?>