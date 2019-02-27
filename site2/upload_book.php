<?php
 
 $targetfolder = "uploaded/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
 

 
$file_type=$_FILES['file']['type'];
 
if ($file_type=="application/pdf" ) 
{
 
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 echo "The book ". basename( $_FILES['file']['name']). " is uploaded";
 
 echo "</br></br><a href=form.php>Enter Book into Database</a>";
 
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
}
 
else {
 
 echo "You may only upload PDFs.<br>";
 
}
 
?>