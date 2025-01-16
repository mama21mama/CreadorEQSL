<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creador tarjetas QSL online">
    <meta name="keywords" content="hamradio, radio, qsl, tarjetas, online, qso, radioaficionado, cards, software, generator, creator, argentina, generador, eqsl, qrz, qra, digital, png, jpg, gif, web ">
    <meta name="author" content="LU4EHF Fabian Bonetti">
    <meta name="robots" content="follow"/>

    <title>Creador QSL - Tarjetas de Radioaficionado</title>
<style>
.center {
  margin-left: auto;
  margin-right: auto;
}
        body {
            background-color: #111;
            color: #fff;
            font-family: 'Arial', sans-serif;
            align-items: center;
            height: 500px;
            margin: 30;
            display: flex;
            min-height: 100vh;
        }

        .container {
            width: 50%;
            margin: auto;
            text-align: center;
        }

        .link {
            margin-bottom: 20px;
            display: block;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgb(31, 162, 250);
            border: 5px solid #081838;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #555;
            border-radius: 5px;
            box-sizing: border-box;
            color: #fff;
            background-color: #535353;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgb(40, 40, 78);
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #0080ff;
        }

        a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<!--
source https://github.com/parzibyte/texto-imagenes-php.git
source https://github.com/lu9dce/autospot/blob/main/web/modulos/qsl.php
Creador de Tarjetas QSL por LU4EHF
-->
<br><br>
<br>
<br>
<br>
<br>
<br>
<table class="center" border="0">
<tr>
<td>
<a href="invitado.php" title="español"><img src="thumb.php?img=imagen2.png&height=150" alt="español" width="" height=""></a>
</td>
<td>
<a href="invitado2.php" title="english"><img src="thumb.php?img=imagen3.png&height=150" alt="español" width="" height=""><br></a>
</td>
</tr>
<tr>
<td align="center">
<font size="1">español random<br></font>
<a href="invitado7.php" title="español random"><img src="thumb.php?img=qsles.png&height=150" alt="español random" width="" height=""><br></a>
</td>
</td>
<td align="center">
<font size="1">english random<br></font>
<a href="invitado8.php" title="english random"><img src="thumb.php?img=qsl2.png&height=150" alt="english random" width="" height=""><br></a>
</td>
</tr>


<tr>
<td>
<a href="invitado3.php" title="español"><img src="thumb.php?img=imagen5.png&height=150" alt="español" width="" height=""><br></a>
</td>
<td>
<a href="invitado4.php" title="español"><img src="thumb.php?img=imagen4.png&height=150" alt="español" width="" height=""><br></a>
</td>
</tr>
<tr>
<td>
<a href="invitado6.php" title="español"><img src="thumb.php?img=imagen7.png&height=150" alt="español" width="" height=""><br></a>
</td>
<td>
<a href="invitado5.php" title="español"><img src="thumb.php?img=imagen6.png&height=150" alt="español" width="" height=""><br></a>
</td>
</tr>

<tr>
<td align="center">
<font size="1">imagen personalizada<br></font>
<a href="custom.html" title="custom español"><img src="thumb.php?img=qsl_custom.png&height=150" alt="custom español" width="" height=""><br></a>
</td>
<td align="center">
<font size="1">imagen personalizada II<br></font>
<a href="custom2.html" title="custom2 español"><img src="thumb.php?img=qsl_custom2.png&height=150" alt="custom II español" width="" height=""><br></a>
</td>
</tr>

<tr>
<td  align="center" colspan="2">
<font size="1">Paginas:&nbsp;&nbsp;&nbsp; <a href="P2.php" title="ir a pagina 2"><font size="1">[ 2 ]</a>
</td>
</tr>
<tr>
<td colspan="2">
<font size="1"><a href="https://reisub.nsupdate.info/reisub/" title="ver informacion del servidor"><font size="1">Servidor Reisub - </font></a> Creador QSL <a href="LICENCIA.txt" title="licencia"><font size="1">(C) 2024</a> Desde Junin, Buenos Aires, Argentina. Corriendo en Debian.</a><br>
<a href="mailto:lu4ehf@gmail.com" title="sugerencia, criticas etc"><font size="1">Contacto</font></a> - <a href="index2.php"><font size="1">73 - </font><a href="https://reisub.nsupdate.info/git/?p=creador_qsl.git/.git;a=tree" title="ver codigo fuente"><font size="1">Source Code</font></a> - <a href="qr.png" title="compartir web con tus amigos"><font size="1">Compartir</a> - <a href="https://radioaficion-es.foroactivo.com/" title="Foros de Radioaficción"><font size="1">Foros</a> - 
<?php
    function contadorvisitas()//  La función que ejecutara las visitas
    {
        $archivo = "contadorvisitas.txt"; //el archivo donde se almacena las visitas
        $f = fopen($archivo, "r"); //abrimos el fichero
        if($f)
        {
            $contadorvisitas = fread($f, filesize($archivo)); //vemos el archivo a grabar
            $contadorvisitas = $contadorvisitas + 1; // Le agregamos una visita mas al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contadorvisitas);
            fclose($f);
        }
        return $contadorvisitas;
    }

	//Mostramos las visitas acumuladas
	echo "Registrados ";
	echo contadorvisitas();//imprime las visitas
	echo " Visitas totales.";

?>
</td>
</tr>
</table>

</body>
</html>
