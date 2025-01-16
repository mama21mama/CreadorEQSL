<?php
if (!isset($_GET["miqra"]) || !isset($_GET["qra"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "LiberationSerif-Bold.ttf";
$nombreImagen = "P2_A5.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$color2 = imagecolorallocate($imagen, 251, 249, 239);
$color3 = imagecolorallocate($imagen, 214, 33, 11);

$rutaImagenOriginal = "P2_A5.png";
$rutaMarcaDeAgua = "qr.png";
$imagen = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);
# En dónde poner la marca de agua sobre la original
$xOriginal = 758; //ancho
$yOriginal = 352;  //alto
# Desde dónde comenzar a cortar la marca de agua (si son 0, se comienza desde el inicio)
$xMarcaDeAgua = 0;
$yMarcaDeAgua = 0;
# Hasta dónde poner la marca de agua sobre la original
$alturaMarcaDeAgua = imagesy($marcaDeAgua) - $yMarcaDeAgua;
$anchuraMarcaDeAgua = imagesx($marcaDeAgua) - $xMarcaDeAgua;
imagecopy($imagen, $marcaDeAgua, $xOriginal, $yOriginal, $xMarcaDeAgua, $yMarcaDeAgua, $anchuraMarcaDeAgua, $alturaMarcaDeAgua);

$nota = $_GET["nota"];
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
$x = 614;
$y = 75;
$x2 = 670;
$y2 = 75;
$x3 = 634;
$y3 = 115;
$x4 = 754;
$y4 = 115;
$x5 = 758;
$y5 = 157;
$x6 = 624;
$y6 = 157;
$x7 = 700;
$y7 = 157;
$x8 = 614;
$y8 = 32; //alto
$x8a = 35;
$y8a = 43; //alto
$x9 = 614;
$y9 = 200; //alto

//*$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, 10, $angulo, $x, $y, $color, $rutaFuente, $qra);
imagettftext($imagen, 10, $angulo, $x2, $y2, $color, $rutaFuente, $nombre);
imagettftext($imagen, 10, $angulo, $x3, $y3, $color, $rutaFuente, $fecha);
imagettftext($imagen, 10, $angulo, $x4, $y4, $color, $rutaFuente, $hora);
imagettftext($imagen, 10, $angulo, $x5, $y5, $color, $rutaFuente, $mhz);
imagettftext($imagen, 10, $angulo, $x6, $y6, $color, $rutaFuente, $modo);
imagettftext($imagen, 10, $angulo, $x7, $y7, $color, $rutaFuente, $rst);
imagettftext($imagen, 10, $angulo, $x8, $y8, $color, $rutaFuente, $miqra);
imagettftext($imagen, 38, $angulo, $x8a, $y8a, $color, $rutaFuente, $miqra);
imagettftext($imagen, 10, $angulo, $x9, $y9, $color, $rutaFuente, $nota);
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
imagedestroy($marcaDeAgua);
