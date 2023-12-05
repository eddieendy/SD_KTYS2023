<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
    if ($fileType != "pdf") {
      echo '<script>alert("Sorry, only PDF files are allowed.")</script>';
      $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo '<script>alert("Sorry, file already exists.")</script>';

  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo '<script>alert("Sorry, your file is too large.")</script>';
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo '<script>alert("Sorry, your file was not uploaded.")</script>';

// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo '<script>alert("The file '. htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). ' has been uploaded.")</script>';
    header('Location: HOMEPAGE.php');
  } else {
    echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
    header('Location: HOMEPAGE.php');
  }
}

?>
