<?php
//File upload with extensions blacklist
echo 'FILE UPLOAD WITH EXTENSION BLACKLIST';
echo '<form action="extension-blacklist.php" method="post" enctype="multipart/form-data">' .
'<input type="file" name="uploadfile">' .
'<input type="submit" value="Upload Image" name="submit">' .
'</form>';

// CREATE DIR IF DOESNT EXIST
$target_dir = "./tmp/";
if (!file_exists($target_dir)) {
mkdir($target_dir);
}





  $uploaded_type = $_FILES[ 'uploadfile' ][ 'type' ]; 
  if ( $uploaded_type != "text/plain" && $uploaded_type != "application/x-php" && $uploaded_type != "application/vnd.microsoft.portable-executable" )
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
