<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador QSL</title>
<style>
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
Creador de Tarjetas QSL por LU4EHF
-->

<!--
<a href="invitado.php">Si eres invitado click aqui</a><br><br>
<a href="invitado2.php">if you are a guest - english</a>
-->
<br>
<br>
 <div class="container">
   <form action="procesar.php">

        <input type="text" name="qra" required placeholder="QSO">
	<input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="fecha" required placeholder="Fecha">
        <input type="text" name="hora" required placeholder="Hora">
        <input type="text" name="mhz" required placeholder="MHz">
        <input type="text" name="modo" required placeholder="Modo">
        <input type="text" name="rst" required placeholder="RST">
        <button type="submit">Enviar</button>
    </form>
</br>
<a href="https://reisub.nsupdate.info/qsl/">Volver</a>
</br>
<font size="1">
<a href="https://reisub.nsupdate.info/reisub/" title="ver informacion del servidor"><font size="1">Reisub</a> Creador QSL (C) 2024 Desde Junin, Buenos Aires, Argentina. Corriendo en Debian. <a href="https://reisub.nsupdate.info/reisub/"><font size="1">Donar a la causa.</a>
</font>
</div>
</body>

</html>
