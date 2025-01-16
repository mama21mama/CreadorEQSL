<?php
unlink('/qsl/uploads/qsl_custom.png');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";


    $uploadOk = 1;


// cambio de nombre
$newname = "qsl_custom.".png;
$target = 'uploads/'.$newname;
move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target);


require 'index_test.php';


  } else {
    echo "El archivo no es una imagen.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
echo "<br>";
echo "<br>";
  //echo "Lo sentimos, el archivo ya existe.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
  echo "Lo sentimos, su archivo es demasiado grande. max 1.5Mb";
  echo "<br>";
  echo "Use el convertidor de imagen";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "png" && $imageFileType != "png" && $imageFileType != "png"
&& $imageFileType != "png" ) {
  echo "Lo sentimos, sólo se permiten archivos PNG.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

echo "<br>";
  //echo "Lo sentimos, su archivo no fue subido.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "<br>";
echo "<br>";
echo "<br>";
echo "El Archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se subio.";
  } else {
echo "</br>";
   // echo "Lo sentimos, hubo un error al cargar su archivo.";
  }
}
?>

