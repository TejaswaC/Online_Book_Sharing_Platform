<html>
<body background=eight_horns.png>

<br><br><br><br><br>
<?php
mysql_connect("localhost", "root", "") or die ("Login Error!");
mysql_select_db("search") or die ("Could not find in DB");

$sql = mysql_query("SELECT * FROM searchengine WHERE Author LIKE '%$_GET[term]%' LIMIT 0,$_GET[results]");

while($ser = mysql_fetch_array($sql)) 



{ 
?><div align="center">
<?php
echo "<h2>TITLE:$ser[Title]</a></h2>";
echo "<h2>AUTHOR:$ser[Author]</a></h2>";
echo "<h2>No.of Pages:$ser[Pages]</a></h2>"; 
echo "<h2><a href='$ser[location]'>Open Book</a></h2>";
} ?>
</div>




<hr>
<a href="./index.php">Go Back</a>


