<?php
    session_start();
    include ("conexion.php");
    $id_empleado = $_POST['employee'];
    $usuario = $_POST['nombre'];
    $contador = 0;
    //Pregunta 1
    if(isset($_POST['correcta'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 2
    if(isset($_POST['correcta1'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta1'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 3
    if(isset($_POST['correcta2'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta2'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 4 Pregunta Abierta
    $cadena1 = "prohibido";
    $respuesta = $_POST['prohibido'];
    $respuesta1 = strtolower($respuesta);
    $busqueda = strpos($respuesta1,$cadena1);
    if($busqueda === false){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }else{
        $contador = $contador+1;
    }
    //Pregunta 5 Pregunta Abierta
    $cadena2 = "emergencia";
    $respuesta2 = $_POST['emergencia'];
    $respuesta3 = strtolower($respuesta2);
    $busqueda2 = strpos($respuesta3,$cadena2);
    if($busqueda2 === false){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }else{
        $contador = $contador+1;
    }
    //Pregunta 6
    if(isset($_POST['correcta3'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta3'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 7
    if(isset($_POST['correcta4'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta4'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 8
    if(isset($_POST['correcta5'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta5'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 9
    if(isset($_POST['correcta6'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta6'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }
    //Pregunta 10
    if(isset($_POST['correcta7'])){
        $contador = $contador+1;
    }else if(isset($_POST['incorrecta7'])){
        if($contador == 0){
            $contador = 0;
        }else{
            $contador = $contador-1;
        }
    }

    //Hacer la comparacion de resultados y guardar
    if($contador == 10){
        $intento = 1;
        $resultado = "Aprobado";
        $bloqueo = "";

        $Sql="insert into Evaluaciones (id_empleado,intentos,resultado,bloqueo) values(
			'".$id_empleado."',
            '".$intento."',
            '".$resultado."',
            '".$bloqueo."')";
            
        mysqli_query($con,$Sql);
    }else{
        $intento = 2;
        $resultado = "Reprobado";
        $fecha = date('Y-m-j');
        $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
        $bloqueo = date ( 'Y-m-j' , $nuevafecha );
        $Sql="insert into Evaluaciones (id_empleado,intentos,resultado,bloqueo) values(
			'".$id_empleado."',
            '".$intento."',
            '".$resultado."',
            '".$bloqueo."')";
            
        mysqli_query($con,$Sql);
    }
?>
<?php
echo '<script>alert ("Respuesta enviadas : '.$usuario.' \n Su resultado es: '.$resultado.'");
window.location.href="login_trabajador.php";
</script>';
?>