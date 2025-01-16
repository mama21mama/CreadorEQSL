<?php
require 'qsl2.php';

if (!isset($_GET["miqra"]) || !isset($_GET["qra"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "LiberationSerif-Bold.ttf";
$nombreImagen = "qsl2.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$color2 = imagecolorallocate($imagen, 255, 57, 51);
$color3 = imagecolorallocate($imagen, 51, 255, 236);
$color4 = imagecolorallocate($imagen, 255, 255, 255);
$color5 = imagecolorallocate($imagen, 158, 198, 250);

$rutaImagenOriginal = "qsl2.png";
$rutaMarcaDeAgua = "qr.png";
$imagen = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);
# En dónde poner la marca de agua sobre la original
$xOriginal = 740; //ancho
$yOriginal = 540;  //alto
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
$x = 52;
$y = 450;
$x2 = 130;
$y2 = 450;
$x3 = 52; //largo
$y3 = 480; //alto
$x4 = 130;
$y4 = 480;
$x5 = 140;
$y5 = 510;
$x6 = 52;
$y6 = 510;
$x7 = 245;
$y7 = 510;
$x8 = 30;
$y8 = 45;
$x9 = 52; //largo
$y9 = 422; //alto
$x10 = 590;
$y10 = 480;
$x11 = 590;
$y11 = 510;
//*$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, 12, $angulo, $x, $y, $color2, $rutaFuente, $qra);
imagettftext($imagen, 12, $angulo, $x2, $y2, $color2, $rutaFuente, $nombre);
imagettftext($imagen, 12, $angulo, $x3, $y3, $color4, $rutaFuente, $fecha);
imagettftext($imagen, 12, $angulo, $x4, $y4, $color4, $rutaFuente, $hora);
imagettftext($imagen, 12, $angulo, $x5, $y5, $color4, $rutaFuente, "Mhz $mhz");
imagettftext($imagen, 12, $angulo, $x6, $y6, $color4, $rutaFuente, "Mode $modo");
imagettftext($imagen, 12, $angulo, $x7, $y7, $color4, $rutaFuente, "RST $rst");
imagettftext($imagen, 45, $angulo, $x8, $y8, $color2, $rutaFuente, $miqra);
imagettftext($imagen, 13, $angulo, $x9, $y9, $color4, $rutaFuente, "Confirm QSO with:");
imagettftext($imagen, 12, $angulo, $x10, $y10, $color4, $rutaFuente, "You will appreciate Q.S.L.");
imagettftext($imagen, 12, $angulo, $x11, $y11, $color4, $rutaFuente, "Thank you 73s&DXs");
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
imagedestroy($marcaDeAgua);
