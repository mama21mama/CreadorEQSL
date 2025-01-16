<?php
if (!isset($_GET["miqra"]) || !isset($_GET["qra"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "LiberationSerif-Bold.ttf";
$nombreImagen = "imagen7.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$color2 = imagecolorallocate($imagen, 255, 57, 51);
$color3 = imagecolorallocate($imagen, 51, 255, 236);

$rutaImagenOriginal = "imagen7.png";
$rutaMarcaDeAgua = "qr.png";
$imagen = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);
# En dónde poner la marca de agua sobre la original
$xOriginal = 10; //ancho
$yOriginal = 300;  //alto
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
$x = 355;
$y = 304;
$x2 = 405;
$y2 = 304;
$x3 = 340; //largo
$y3 = 319; //alto
$x4 = 410;
$y4 = 319;
$x5 = 376;
$y5 = 337;
$x6 = 340;
$y6 = 337;
$x7 = 460;
$y7 = 337;
$x8 = 10;
$y8 = 29;
$x9 = 357;
$y9 = 276;
$x10 = 332;
$y10 = 352;
//*$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color2, $rutaFuente, $qra);
imagettftext($imagen, $tamanio, $angulo, $x2, $y2, $color2, $rutaFuente, $nombre);
imagettftext($imagen, $tamanio, $angulo, $x3, $y3, $color, $rutaFuente, $fecha);
imagettftext($imagen, $tamanio, $angulo, $x4, $y4, $color, $rutaFuente, $hora);
imagettftext($imagen, $tamanio, $angulo, $x5, $y5, $color, $rutaFuente, "Mhz $mhz");
imagettftext($imagen, $tamanio, $angulo, $x6, $y6, $color, $rutaFuente, $modo);
imagettftext($imagen, $tamanio, $angulo, $x7, $y7, $color, $rutaFuente, "RST $rst");
imagettftext($imagen, 30, $angulo, $x8, $y8, $color, $rutaFuente, $miqra);
imagettftext($imagen, 13, $angulo, $x9, $y9, $color, $rutaFuente, "Confirma QSO con:");
imagettftext($imagen, $tamanio, $angulo, $x10, $y10, $color, $rutaFuente, "Agradecera Q.S.L. Agradece 73syDXs");
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
imagedestroy($marcaDeAgua);
