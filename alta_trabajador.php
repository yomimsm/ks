<?php
    include ("conexion.php");
        $nombre=$_POST['nombre'];
        $curp=$_POST['curp'];
        $seguro = $_POST['seguro'];
        $revisar = getimagesize($_FILES["carta_responsiva"]["tmp_name"]);
        if($revisar !== false){
            $image = $_FILES['carta_responsiva']['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));
        }
            $telefono = $_POST['telefono'];
        //$clave = rand();
        if(isset($_POST['mayor'])) {
            $edad = $_POST['mayor'];
        }
        if(isset($_POST['menor'])){
            $edad = $_POST['menor'];
        }
        $carta = null;
        $empresa = $_POST['empresa'];
        $clave = $_POST['clave'];
        $Sql="insert into Trabajadores (nombre,curp,seguro,edad,carta,id_empresa,clave,tel) values(
			'".$nombre."',
            '".$curp."',
            '".$seguro."',
            '".$edad."',
            '".$imgContenido."',
            '".$empresa."',
            '".$clave."',
            '".$telefono."')";
            
        mysqli_query($con,$Sql);
        //header("Location: trabajadores.php")
?>
<?php
echo '<script>alert ("Trabajador Registrado con Exito");
window.location.href="trabajadores.php";
</script>';
?>
