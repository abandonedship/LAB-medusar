<?php
//File upload with getimagesize
echo 'FILE UPLOAD WITH GETIMAGESIZE()';
echo '<form action="getimagesize.php" method="post" enctype="multipart/form-data">' .
'<input type="file" name="uploadfile">' .
'<input type="submit" value="Upload Image" name="submit">' .
'</form>';

// CREATE DIR IF DOESNT EXIST
$target_dir = "./tmp/";


  if (@getimagesize($_FILES["uploadfile"]["tmp_name"]) !== false)
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
