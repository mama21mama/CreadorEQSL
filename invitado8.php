<script>alert("When you see the QSL press F5 or Reload the page for random image.")</script>
<!--
source https://github.com/parzibyte/texto-imagenes-php.git
Creador de Tarjetas QSL por LU4EHF
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creador tarjetas QSL online">
    <meta name="keywords" content="hamradio, radio, qsl, tarjetas, online, qso radioaficionado, cards">
    <meta name="author" content="LU4EHF Fabian Bonetti">
    <meta name="robots" content="follow"/>
<title>Creador QSL - Invitado</title>
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
 <div class="container">
    <form action="procesar9.php">
	 <input type="text" name="miqra" required placeholder="My qra and Name">
        <input type="text" name="qra" required placeholder="QSO">
	<input type="text" name="nombre" placeholder="Name">
        <input type="text" name="fecha" required placeholder="Date">
        <input type="text" name="hora" required placeholder="Time">
        <input type="text" name="mhz" required placeholder="MHz">
        <input type="text" name="modo" required placeholder="Mode">
        <input type="text" name="rst" required placeholder="RST">
        <button type="submit">Send</button>
    </form>
</br>
<a href="https://reisub.nsupdate.info/qsl/">Back</a>
 <div>

</body>

</html>
