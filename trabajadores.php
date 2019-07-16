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
    th{
        color:white;
        font-family:"Play-Bold";
        font-size:14pt;
        border-collapse: collapse;
        border: 2px white solid;
    }
    td{
        color:white;
        font-family:"Play-Bold";
        font-size:11pt;
        border-collapse: collapse;
        border: 2px white solid;
        text-align:center;
    }
    table{
        border-collapse: collapse;
        border: 2px white solid;
        margin-left:-100px;
        margin-right:150px;
    }
   </style>
</head>
<body>
<?php
    session_start();
    //var_dump($_SESSION['id']);
    //var_dump($_SESSION['clave']);
    //Se comprueba si ya se habia iniciado la sesion.
    if (isset($_SESSION['id'])) {
        //echo 'Sesion iniciada correctamente.<br />';
        //echo 'Usuario: '.$_SESSION['id'].'<br />';
        //echo 'Password: '.$_SESSION['clave'].'<br />';
    }else{
        header("Location:login_registro.php");
    }
    include ("conexion.php");
    $query="SELECT id,company FROM Empresas WHERE clave = {$_SESSION['clave']}";
    $res = mysqli_query($con, $query);
    while($rows=mysqli_fetch_array($res)){ 
        //echo "id: ".$rows[0]."<br>";
        $id = $rows[0];
        $company = $rows[1];
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
        <input type="hidden" name="clave" id="clave" value="<?php echo $_SESSION['clave']?>">
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
    <br>
    <br>
    <?php
        $sql1 = "SELECT * FROM Trabajadores WHERE id_empresa={$id}";
        if($result = mysqli_query($con, $sql1)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Nombre</th>";
                        echo "<th>CURP</th>";
                        echo "<th>Nº Seguro Social</th>";
                        echo "<th>Mayor de Edad</th>";
                        echo "<th>Carta Responsiva</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['curp'] . "</td>";
                        echo "<td>" . $row['seguro'] . "</td>";
                        if($row['edad'] == 1){
                            $edad = "SI";
                            echo "<td>" . $edad . "</td>";  
                        }else{
                            $edad = "NO";
                            echo "<td>" . $edad . "</td>";  
                        } 
                        if($row['carta']!= null){
                            echo "<td>";
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['carta'] ).'"  alt="" style="width:25%"/>';
                            echo"</td>";
                        }else{
                            $e = "No Aplica";
                            echo "<td>".$e."</td>";
                        }
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
        }

    ?>
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