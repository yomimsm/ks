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
    <h3 style="margin-left:50px; font-family: play-Bold;color:#fff">Registro de Trabajador</h3>
    <br>
    <form action="alta_empresa.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">NOMBRE DEL TRABAJADOR:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" style="width:300px">
    </div>
    <br>
     <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">CURP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" style="width:415px">
    </div>
    <br>
     <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">N° DE SEGURO SOCIAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" style="width:315px">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">ES MAYOR DE EDAD: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="mexicana" id="mexicana" value = "1"> SI&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="extranjera" id="extranjera" onclick="habilitar (this.checked); " value = "2"> NO
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
     <label for="">CARTA RESPONSIVA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>    
    <input disabled type="file" name="carta_responsiva" id="carta_responsiva">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">TELEFONO DE LA EMPRESA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="number" name="telefono" id="telefono" style="width:285px">
    </div>
    <br>
    <div style="margin-left: 475px">
    <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Guardar</button>
    </div>
    </form>
</body>
</html>
<script type="text/javascript">
    function habilitar(value) { 
        if (value==true) 
            {
                document.getElementById('carta_responsiva').disabled=false;
            }
            else if (value==false) 
            {
                document.getElementById('carta_responsiva').disabled=true;

            }
        
        // body...
    }
 </script>