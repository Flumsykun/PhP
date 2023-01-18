<?php
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 30000)
// $file_type = $_FILES["file"]["type"];
// if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

//   if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
//   {
 
//   echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 
//  }
&& in_array($extension, $allowedExts))
  {
    list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
    if($width > "180" || $height > "70") {
      echo "Error : image size must be 180 x 70 pixels.";
      exit;
  }
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }else{
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
    }else{
        move_uploaded_file(
            $_FILES["file"]["tmp_name"],
            $_SERVER['DOCUMENT_ROOT'] . 'upload/' . $_FILES["file"]["name"]
          );
        }
      }
    }else{
        echo "Invalid file";
    }
?>
