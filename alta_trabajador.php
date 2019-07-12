<?php
    include ("conexion.php");
        $nombre=$_POST['nombre'];
        $curp=$_POST['curp'];
        $seguro = $_POST['seguro'];
       /*if(isset($_POST['carta_responsiva'])){
           $carta = base_64_encode($_POST['carta_responsiva']); 
        }else{
            $carta = null;
        }*/
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
        $Sql="insert into Trabajadores (nombre,curp,seguro,edad,carta,id_empresa,tel) values(
			'".$nombre."',
            '".$curp."',
            '".$seguro."',
            '".$edad."',
            '".$carta."',
            '".$empresa."',
            '".$telefono."')";
            
        mysqli_query($con,$Sql);
        //header("Location: trabajadores.php")
?>
<?php
echo '<script>alert ("Trabajador Registrado con Exito");
window.location.href="trabajadores.php";
</script>';
?>
