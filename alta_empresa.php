<?php
	include ("conexion.php");
		$usuario=$_POST['usuario'];
        $act=$_POST['actividades'];
        $r_social = $_POST['social'];
        $contacto = $_POST['contacto'];
        if(isset($_POST['fisica'])) {
            $procedencia = $_POST['fisica'];
        }
        if(isset($_POST['moral'])){
            $procedencia = $_POST['moral'];
        }
        if(isset($_POST['mexicana'])) {
            $tipo = $_POST['mexicana'];
        }
        if(isset($_POST['extranjera'])){
            $tipo= $_POST['extranjera'];
        }
<<<<<<< Updated upstream
        $Sql="insert into Empresas (company,procedencia,tipo,actividades,razon_social,contacto) values(
=======
		$Sql="insert into empresas (usuario,password,procedencia,tipo,actividades,razon_social,contacto) values(
>>>>>>> Stashed changes
			'".$usuario."',
            '".$procedencia."',
            '".$tipo."',
            '".$act."',
			'".$r_social."',
			'".$contacto."')";
        mysqli_query($con,$Sql);
        header("Location: index.php")
?>
