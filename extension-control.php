<?php
//File upload with extension control
echo 'FILE UPLOAD WITH EXTENSION CONTROL';
echo '<form action="extension-control.php" method="post" enctype="multipart/form-data">' .
'<input type="file" name="uploadfile">' .
'<input type="submit" value="Upload Image" name="submit">' .
'</form>';


$target_dir = "./tmp/";


//ew



   $valid_file_extensions = array(".jpg", ".jpeg", ".gif", ".png");
   $flag=False;
   foreach($valid_file_extensions as $cad)
    {      
     if (strpos($_FILES["uploadfile"]["name"], $cad) !== false) 
        {
          $flag=True;
          break;
        }
    }
  if ( $flag)
     {
     if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir.$_FILES['uploadfile']['name'])){
         echo "Correct upload";
       }
     else echo "Error while uploading";
     }
  else
     {
      echo "Invalid type of file";
     }
?>
