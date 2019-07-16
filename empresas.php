<?php
    include ("conexion.php");
    $sql = "SELECT * FROM empresas";
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
    body{
        background-color:#336699;
        margin-left:200px;
    }
   </style>
</head>
<body>
    <br>
    <br>
    <br>
    <h3 style="margin-left:50px; font-family: play-Bold;color:#fff">Registro de Empresas</h3>
    <br>
    <form action="alta_empresa.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">NOMBRE DE LA EMPRESA:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" style="width:250px" required>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">TIPO DE EMPRESA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="mexicana" id="mexicana" value = "1"> MEXICANA&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="extranjera" id="extranjera" value = "2"> EXTRANJERA
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">PROCEDENCIA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="fisica" id="fisica" value = "1"> FISICA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="moral" id="moral" value = "2"> MORAL
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">RAZON&nbsp;&nbsp;&nbsp;SOCIAL:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="social" id="social" style="width:325px" required>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">ACTIVIDADES A REALIZAR: </label>
        <br>
        <textarea name="actividades" id="activadades" cols="74" rows="5"style="resize: both;"></textarea>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="email" name="contacto" id="contacto" style="width:388px" required>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">TELEFONO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="number" name="telefono" id="telefono" style="width:354px" required>
    </div>
    <br>
    <div style="margin-left: 419px">
    <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Guardar</button>
    </div>
    </form>
</body>
</html>