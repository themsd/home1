<?php

 $targetfolder = "Upload/";
 
 $name = $_FILES['filename']['name'];//get the name of the file that will be uploaded

 $targetfolder = $targetfolder . basename( $_FILES['filename']['name']) ;

if(move_uploaded_file($_FILES['filename']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['filename']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }


 ?>