
<?php

session_start();
$upload_flag=0;

$con=mysql_connect("localhost","root","");
mysql_select_db("mycharity");



//pdf upload
 $targetfolder = "Upload/";
 
 $upload = $_FILES['filename']['name'];//get the name of the file that will be uploaded

 $targetfolder = $targetfolder . basename( $_FILES['filename']['name']) ;

move_uploaded_file($_FILES['filename']['tmp_name'], $targetfolder);

?>



