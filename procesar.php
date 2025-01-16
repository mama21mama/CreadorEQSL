<?php
if (!isset($_GET["qra"]) || !isset($_GET["nombre"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "LiberationSerif-Regular.ttf";
$nombreImagen = "imagen.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);


$rutaImagenOriginal = "imagen.png";
$rutaMarcaDeAgua = "qr.png";
$imagen = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);
# En dónde poner la marca de agua sobre la original
$xOriginal = 485; //ancho
$yOriginal = 300;  //alto
# Desde dónde comenzar a cortar la marca de agua (si son 0, se comienza desde el inicio)
$xMarcaDeAgua = 0;
$yMarcaDeAgua = 0;
# Hasta dónde poner la marca de agua sobre la original
$alturaMarcaDeAgua = imagesy($marcaDeAgua) - $yMarcaDeAgua;
$anchuraMarcaDeAgua = imagesx($marcaDeAgua) - $xMarcaDeAgua;
imagecopy($imagen, $marcaDeAgua, $xOriginal, $yOriginal, $xMarcaDeAgua, $yMarcaDeAgua, $anchuraMarcaDeAgua, $alturaMarcaDeAgua);

$qra = $_GET["qra"];
$nombre = $_GET["nombre"];
$fecha = $_GET["fecha"];
$hora = $_GET["hora"];
$mhz = $_GET["mhz"];
$modo = $_GET["modo"];
$rst = $_GET["rst"];
$tamanio = 9;
$angulo = 0;
$espacio = 10;
$x = 135;
$y = 160;
$x2 = 300;
$y2 = 160;
$x3 = 60;
$y3 = 182;
$x4 = 159;
$y4 = 182;
$x5 = 53;
$y5 = 221;
$x6 = 59;
$y6 = 198;
$x7 = 154;
$y7 = 198;
//*$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $qra);
imagettftext($imagen, $tamanio, $angulo, $x2, $y2, $color, $rutaFuente, $nombre);
imagettftext($imagen, $tamanio, $angulo, $x3, $y3, $color, $rutaFuente, $fecha);
imagettftext($imagen, $tamanio, $angulo, $x4, $y4, $color, $rutaFuente, $hora);
imagettftext($imagen, $tamanio, $angulo, $x5, $y5, $color, $rutaFuente, $mhz);
imagettftext($imagen, $tamanio, $angulo, $x6, $y6, $color, $rutaFuente, $modo);
imagettftext($imagen, $tamanio, $angulo, $x7, $y7, $color, $rutaFuente, $rst);
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
imagedestroy($marcaDeAgua);
