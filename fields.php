<?php

$username = $_POST['username'];
$password = $_POST['password'];




if($username && $password)
{

$connect = mysql_connect("localhost","root","") or die("Login Error!");

mysql_select_db("secure_login") or die("Could not find db!");



$sql="SELECT * FROM `login` WHERE Name='$username'";
$query=mysql_query($sql, $connect) or die ('Unable to run query:'.mysql_error());
$numrows = mysql_num_rows($query);

if($numrows!=0)
{
   while ($row = mysql_fetch_assoc($query))
	{
	$dbName = $row['Name'];
	$dbPass = $row['Pass'];

if ($username==$dbName&&$password==$dbPass)
{
	echo "Welcome Successful Login!";
}

else
	echo "Incorrect Password";

}
}



}

else
	die("Please enter user name and password!");

?>
