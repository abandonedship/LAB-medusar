<?php
//File upload with extension-control-and-mime-type (burpsuite required proxy to intercept and change)
echo 'FILE UPLOAD WITH EXTENSION CONTROL AND MIME TYPE (Burpsuite need)';
echo '<form action="extension-control-and-mime-type.php" method="post" enctype="multipart/form-data">' .
'<input type="file" name="uploadfile">' .
'<input type="submit" value="Upload Image" name="submit">' .
'</form>';

// CREATE DIR IF DOESNT EXIST
$target_dir = "./tmp/";



  $uploaded_type = $_FILES[ 'uploadfile' ][ 'type' ]; 
  if ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" )
   {
      if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_dir.$_FILES['uploadfile']['name']))
        {
          echo "Correct upload";
         }
      else echo "Error while uploading";
   }
 else
   {
     echo "Invalid type of file";
   }
?>
