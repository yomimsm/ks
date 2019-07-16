<?php
session_start();
//var_dump($_POST['usuario']);
//var_dump($_POST['password']);
include ("conexion.php");
$re=mysqli_query($con,"select * from Empresas where contacto='".$_POST['usuario']."' AND 
                     clave='".$_POST['password']."'")	or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {
        $clave = $f['clave'];
		$arreglo[]=array('company'=>$f['company'],
			'id'=>$f['id'],'clave'=>$f['clave']);
    }
	if(isset($arreglo)){
        $_SESSION['id']=$arreglo;
        $_SESSION['clave'] = $clave;
		header("Location: trabajadores.php");
	}else{
		header("Location: login_registro.php");
	}
?>