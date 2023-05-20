<?php
if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
  $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
  $name = $_FILES["fileToUpload"]["name"];
  move_uploaded_file($tmp_name, "uploads/$name");
  echo "File uploaded successfully.";
} else {
  echo "File upload failed.";
}
// header("Location:gallery.php"); ie index.php
?>
<a href="admin.php">Click here to go the admin page</a>
<a href="index.php">Click here to open the gallery</a>