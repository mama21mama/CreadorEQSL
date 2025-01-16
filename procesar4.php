<?php
if (!isset($_GET["miqra"]) || !isset($_GET["qra"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "LiberationSerif-Bold.ttf";
$nombreImagen = "imagen5.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$color2 = imagecolorallocate($imagen, 249, 117, 14);
$color3 = imagecolorallocate($imagen, 225, 227, 227);
$color4 = imagecolorallocate($imagen, 210, 213, 212);
$color5 = imagecolorallocate($imagen, 233, 206, 103);

$rutaImagenOriginal = "imagen5.png";
$rutaMarcaDeAgua = "qr.png";
$imagen = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);
# En dónde poner la marca de agua sobre la original
$xOriginal = 485; //ancho
$yOriginal = 250;  //alto
# Desde dónde comenzar a cortar la marca de agua (si son 0, se comienza desde el inicio)
$xMarcaDeAgua = 0;
$yMarcaDeAgua = 0;
# Hasta dónde poner la marca de agua sobre la original
$alturaMarcaDeAgua = imagesy($marcaDeAgua) - $yMarcaDeAgua;
$anchuraMarcaDeAgua = imagesx($marcaDeAgua) - $xMarcaDeAgua;
imagecopy($imagen, $marcaDeAgua, $xOriginal, $yOriginal, $xMarcaDeAgua, $yMarcaDeAgua, $anchuraMarcaDeAgua, $alturaMarcaDeAgua);

$miqra = $_GET["miqra"];
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
$x = 25;
$y = 332;
$x2 = 13;
$y2 = 345;
$x3 = 124;
$y3 = 342;
$x4 = 220;
$y4 = 342;
$x5 = 332;
$y5 = 342;
$x6 = 418;
$y6 = 342;
$x7 = 499;
$y7 = 342;
$x8 = 10;
$y8 = 29;
$x9 = 15;
$y9 = 290;
//*$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $qra);
imagettftext($imagen, 7, $angulo, $x2, $y2, $color, $rutaFuente, $nombre);
imagettftext($imagen, $tamanio, $angulo, $x3, $y3, $color, $rutaFuente, $fecha);
imagettftext($imagen, $tamanio, $angulo, $x4, $y4, $color, $rutaFuente, $hora);
imagettftext($imagen, $tamanio, $angulo, $x5, $y5, $color, $rutaFuente, $mhz);
imagettftext($imagen, $tamanio, $angulo, $x6, $y6, $color, $rutaFuente, $modo);
imagettftext($imagen, $tamanio, $angulo, $x7, $y7, $color, $rutaFuente, $rst);
imagettftext($imagen, 30, $angulo, $x8, $y8, $color5, $rutaFuente, $miqra);
imagettftext($imagen, 17, $angulo, $x9, $y9, $color5, $rutaFuente, "Confirma QSO");
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
imagedestroy($marcaDeAgua);
