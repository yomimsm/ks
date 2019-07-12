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
<?php
        session_start();
        // Se comprueba si ya se habia iniciado la sesion.
        if (isset($_SESSION['id'])) {
            //echo 'Sesion iniciada correctamente.<br />';
            //echo 'Usuario: '.$_SESSION['id'].'<br />';
            //echo 'Password: '.$_SESSION['password'].'<br />';
        } else {
            header("Location:login_registro.php");
        }
        include ("conexion.php");
        $query="SELECT id FROM Empresas WHERE clave = {$_SESSION['password']}";
        $res = mysqli_query($con, $query);
        while($rows=mysqli_fetch_array($res)){ 
            //echo "id: ".$rows[0]."<br>";
            $id = $rows[0];
        } 
        ?>
    <br>
    <br>
    <br>
    <h3 style="margin-left:50px; font-family: play-Bold;color:#fff">Registro de Trabajador</h3>
    <br>
    <form action="alta_trabajador.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">NOMBRE DEL TRABAJADOR:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="nombre" id="nombre" style="width:300px" required>
        <input type="hidden" name="empresa" id="empresa" value="<?php echo $id?>">
    </div>
    <br>
     <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">CURP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="curp" id="curp" style="width:415px" required>
    </div>
    <br>
     <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">N° DE SEGURO SOCIAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="seguro" id="seguro" style="width:315px" required>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;color:#fff">
        <label for="">ES MAYOR DE EDAD: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="checkbox" name="mayor" id="mayor" value = "1"> SI&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="menor" id="menor" onclick="habilitar (this.checked); " value = "2"> NO
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