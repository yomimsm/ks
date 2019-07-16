<?php
session_start();
//var_dump($_POST['usuario']);
//var_dump($_POST['password']);
include ("conexion.php");
$re=mysqli_query($con,"select * from Trabajadores where curp='".$_POST['txtusuario']."' AND 
                     clave='".$_POST['txtpassword']."'")	or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {
        $clave = $f['clave'];
        $nombre = $f['nombre'];
        $employee = $f['id'];
		$arreglo[]=array('nombre'=>$f['nombre'],
			'id'=>$f['id'],'clave'=>$f['clave']);
    }
	if(isset($arreglo)){
        $_SESSION['id']=$arreglo;
        $_SESSION['clave'] = $clave;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['employee'] = $employee;
		header("Location: presentacion.php");
	}else{
		header("Location: login_trabajador.php");
	}
?>