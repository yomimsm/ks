<?php
    include ("conexion.php");
		$usuario=$_POST['usuario'];
        $act=$_POST['actividades'];
        $r_social = $_POST['social'];
        $contacto = $_POST['contacto'];
        $clave = rand();
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
        $Sql="insert into Empresas (company,procedencia,tipo,actividades,razon_social,contacto,clave) values(
			'".$usuario."',
            '".$procedencia."',
            '".$tipo."',
            '".$act."',
            '".$r_social."',
            '".$contacto."',
            '".$clave."')";
            
        mysqli_query($con,$Sql);
       // header("Location: empresas.php")
?>
<?php
echo '<script>alert ("Empresa Registrada con exito \n Nombre empresa: '.$usuario.' \n Clave de Registro: '.$clave.'");
window.location.href="empresas.php";
</script>';
?>
