<html>
<body background=eight_horns.png>



<?php

mysql_connect('localhost','root','');

mysql_select_db('search');

$sql="SELECT * FROM searchengine";

$records=mysql_query($sql);


?>


<html>
<head>


<title>Book DataBAse</title>

</head>

<body>

<table width="600" border="1" cellpaddin="1">
<tr>

<th>S.No.</th>
<th>Title</th>
<th>Author</th>
<th>Subject</th>
<th>No. of Pages</th>
<th>Book Download</th>
<tr>

<?php

while($searchengine=mysql_fetch_assoc($records))
{
echo "<tr>";

echo "<td>".$searchengine['Id']."</td>";

echo "<td>".$searchengine['Title']."</td>";

echo "<td>".$searchengine['Author']."</td>";

echo "<td>".$searchengine['Subject']."</td>";

echo "<td>".$searchengine['Pages']."</td>";

echo "<td><a href=".$searchengine['location'].">Open Book</a></td>";


echo "</tr>";

}

?>

</table>
</body>
</html>



