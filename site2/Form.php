<body background=eight_horns.png>
</body>
<?php

if (isset($_POST['submitted']))
{
	$targetfolder = "uploaded/";
	$targetfolder = $targetfolder . basename( $_FILES['file_uploaded']['name']) ;
	$connect = mysql_connect("localhost", "root", "") or die("Database Error!");
	mysql_select_db('search');
	$file_type=$_FILES['file_uploaded']['type'];
	if ($file_type=="application/pdf" ) 
	{
		if(move_uploaded_file($_FILES['file_uploaded']['tmp_name'], $targetfolder))
		{
			echo "The book ". basename( $_FILES['file_uploaded']['name']). " is uploaded";
 
		} else {
			echo "Problem uploading file";
		}
	} else {
		header("Location: Form.php");
	}
	$Title = $_POST['Title'];
	$Author = $_POST['Author'];
	$Subject = $_POST['Subject'];
	$Pages = $_POST['Pages'];
	$sqlinsert= "INSERT INTO searchengine (Title, location, Author, Subject, Pages) VALUES ('$Title','$targetfolder' ,'$Author', '$Subject', '$Pages')";
	$query=mysql_query($sqlinsert, $connect) or die ('Unable to run query:'.mysql_error());
	echo $newrecord= "1 new book added to the database";
}
?>
<html>
<head>
<title>Insert Data into DB</title>
</head>
<body>
<h1>Insert Data into DB</h1>
<form method="post" action="Form.php" enctype="multipart/form-data">
<input type="hidden" name="submitted" value="true" />
<fieldset>
	<legend> New Book</legend>
	<label>Title:<input type="text" name="Title" /></label>
	<label>Author:<input type="text" name="Author" /></label>
	<label>Subject:<input type="text" name="Subject" /></label>
	<label>Pages:<input type="text" name="Pages" /></label>
	<label>Select PDF: </label><input name="file_uploaded" type="file" />
</fieldset>
<br />
<input type="submit" value="add new book" />
</form>
</body>
</html>
	