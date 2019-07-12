<?php
    include ("conexion.php");
    /* @var $_POST type */
    $nombre= $_POST['txtusuario'];
    $pass= $_POST['txtpassword'];
    $query=("SELECT contacto, clave FROM `Empresas` "
         . "WHERE `contacto`='".mysqli_real_escape_string($nombre)."' and "
         . "`clave`='".mysqli_real_escape_string($pass)."'");
    $rs= mysqli_query($con,$query); 
    $row=mysqli_fetch_object($rs); 
    $nr = mysqli_num_rows($rs);
         
         
    if($nr == 1){ 
            
        echo 'No ingreso'; 
    } 
    else if($nr == 0) {
        // Iniciamos la sesion.
        session_start();
        $_SESSION['id'] = $_POST['txtusuario'];
        $_SESSION['password'] = $_POST['txtpassword'];
        header("Location:trabajadores.php"); 
    }   
?>