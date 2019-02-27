
<!DOCTYPE html>
<html>
<head>
	<title>The e-Library Login Page</title>
	
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php

if (!isset($_POST['submit']))
{ ?>
	<section class="loginform cf">
		<form name="login" action="index.php" method="post" >
			<ul>
				<li>
					<label for="username">Email</label>
					<input type="text" name="username" placeholder="username"/>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" name = "submit" value="Login">
				</li>
			</ul>
		</form>
	</section>
	<?php
}
else
{
 $username = $_POST['username'];
 $password = $_POST['password'];
 if ($username && $password)
 {
  $connect = mysql_connect("localhost", "root", "") or die("Login Error!");
  mysql_select_db("secure_login") or die("Could not find db!");
  $sql = "SELECT * FROM `login` WHERE Name='$username'";
  $query = mysql_query($sql, $connect) or die('Unable to run query:' . mysql_error());
  $numrows = mysql_num_rows($query);
  if ($numrows != 0)
  {
   while ($row = mysql_fetch_assoc($query))
   {
    $dbName = $row['Name'];
    $dbPass = $row['Pass'];
    if ($username == $dbName && $password == $dbPass)
    {
     
	 
	 echo "<a href=\"welcome.php\">Enter Site</a><br/><br/><br/>";
	 
	 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><p align=center><font size=10> <a href=\"welcome.php\">Enter Site</a></font></p><br/><br/><br/>";
    }
    else echo "<h1>Incorrect Password<h1>";
   }
  }
 }
 else die("<h1>Please enter user name and password!<h1>");
}

?>
</body>
</html>