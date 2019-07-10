<?php
    include ("conexion.php");
    $sql = "SELECT * FROM Empresas";
    $res = mysqli_query($con, $sql);
?>
<html>
<head>
    <title>Prueba</title>
   
    <style>
    @font-face {
        font-family:"Play-Bold";
        src: url("fonts/Play-Bold.ttf");
    }
   </style>
</head>
<body>
    <h3 style="margin-left:50px; font-family: play-Bold;">Registro de Empresas</h3>
    <br>
    <form action="alta_empresa.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">NOMBRE DE LA EMPRESA:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" size="35">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">TIPO DE EMPRESA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="mexicana" id="mexicana" value = "1"> MEXICANA&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="extranjera" id="extranjera" value = "2"> EXTRANJERA
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">PROCEDENCIA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="fisica" id="fisica" value = "1"> FISICA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="moral" id="moral" value = "2"> MORAL
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">RAZON&nbsp;&nbsp;&nbsp;SOCIAL:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="social" id="social" size="46">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">ACTIVIDADES A REALIZAR: </label>
        <br>
        <textarea name="actividades" id="activadades" cols="67" rows="5"style="resize: both;"></textarea>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">CONTACTO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="contacto" id="contacto" size="49">
    </div>
    <br>
    <div style="margin-left: 440px">
    <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Guardar</button>
    </div>
    </form>
</body>
</html>