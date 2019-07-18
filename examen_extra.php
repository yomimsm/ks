<html>
<head>
    <title>Examen</title>
   
    <style>
    @font-face {
font-family:"Play-Bold";
src: url("fonts/Play-Bold.ttf");
                }
                 body{
            background-color:#336699;
        }
   
   </style>
</head>
<?php
    session_start();
    include ("conexion.php");
    //var_dump($_SESSION['id']);
    //var_dump($_SESSION['clave']);
    //var_dump($_SESSION['nombre']);
    //var_dump($_SESSION['employee']);
    if (isset($_SESSION['id'])) {
        //echo 'Sesion iniciada correctamente.<br />';
        //echo 'Usuario: '.$_SESSION['id'].'<br />';
        //echo 'Password: '.$_SESSION['password'].'<br />';
    }else {
        header("Location:login_trabajador.php");
    }
    ?>

<body>
   <form action="evaluacion_extra.php" method="POST">
    <input type="hidden" name="clave" id="clave" value="<?php echo $_SESSION['clave']?>">
    <input type="hidden" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']?>">
    <input type="hidden" name="employee" id="employee" value="<?php echo $_SESSION['employee']?>">
<img src="img/ks.png" alt=""> <img src="img/sg.png" alt="" style="float: right;"> 
	<h2 style="font-family: play-bold; text-align: center;">SISTEMAS DE ARNESES  K&S MEXICANA S.A. DE C.V.</h2>
	<h2 style="font-family: play-bold; text-align: center;">DEPARTAMENTO DE SEGURIDAD E HIGIENE Y MEDIO AMBIENTE</h2>
	<h3 style="font-family: play-bold; text-align: center;">EXAMEN DE CURSO DE CONCIENTIZACIÓN EN MEDIO AMBIENTE Y SEGURIDAD PARA PROVEEDORES Y CONTRATISTAS </h3>

	<br><br><br><br>
    <h3 style="margin-left:50px; font-family: play-Bold;">   INSTRUCCIONES: LEE CON ATENCIÓN LAS SIGUIENTES PREGUNTAS Y RESPONDE O  ENCIERRA LA RESPUESTA CORRECTA SEGÚN CORRESPONDA.</h3>
    <br>

    <h3 style="margin-left:50px; font-family: play-Bold;">      1.-¿MENCIONA 5 REGLAS DE SEGURIDAD DE LA COMPAÑÍA? </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <textarea name="prohibido" id="prohibido" cols="67" rows="5"style="resize: both;"></textarea>




    </div>
     <br>

    <h3 style="margin-left:50px; font-family: play-Bold;">      2.- ¿A QUÉ SE COMPROMETE LA EMPRESA AL CERTIFICARSE EN LA NORMA ISO 14001-2015 ? </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <div style="float:left; width:500px " > <input type="checkbox" name="correcta3" id="correcta3" value = "1">A) Al cuidado del medio ambiente. </div>
 

 &nbsp;&nbsp;&nbsp;
       <div style="float: right;width: 600px"> <input type="checkbox" name="incorrecta3" id="incorrecta3" value = "2">B) Al cuidado del agua y luz.</div>




    </div>
    <br>
     
    <h3 style="margin-left:50px; font-family: play-Bold;">       3.- ¿QUÉ ES UN ACTO INSEGURO?</h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <div style="float:left; width:500px " > <input type="checkbox" name="correcta1" id="correcta1" value = "1">A) Son las fallas, olvidos, errores  u omisiones que hace el trabajador y que 
por consecuencia  termina en un accidente. </div>

 &nbsp;&nbsp;&nbsp;
       <div style="float: right;width: 600px"> <input type="checkbox" name="incorrecta1" id="incorrecta1" value = "2"> B) Sucede cuando el personal no quiere realizar su trabajo</div>


    </div>
    <br>
    
    <h3 style="margin-left:50px; font-family: play-Bold;">      4.-MENCIONA 3 REGLAS A SEGUIR EN CASO DE UNA EMERGENCIA? </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <textarea name="emergencia" id="emergencia" cols="67" rows="5"style="resize: both;"></textarea>




    </div>
    <br>

    <h3 style="margin-left:50px; font-family: play-Bold;">      5.- ¿QUÉ  ES UNA CONDICIÓN INSEGURA?</h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
        <div style="float:left; width:500px " > <input type="checkbox" name="correcta" id="correcta" value = "1"> A) Son las instalaciones, equipos de trabajo, maquinaria y herramientas que NO están en condiciones  de  ser utilizadas para realizar el trabajo. </div>
    
       

 <div style="float: right;width: 600px">  <input type="checkbox" name="incorrecta" id="incorrecta" value = "2"> B) Son aquellas  que se presentan cuando una persona daña la maquinaria y equipo.</div>
       

    </div>
    <br><br><br><br><br><br>
    <h3 style="margin-left:50px; font-family: play-Bold;">      6.- ¿DE LAS SIGUIENTES IMÁGENES ENCIERRA EL INCISO QUE CORRESPONDE A LA CORRECTA IDENTIFICACIÓN SEGÚN EL SISTEMA GHS? </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
        <div style="float:left; width:500px " ><input type="checkbox" name="incorrecta7" id="incorrecta7" value = "1">A) <br><br><img src="img/autotipo.png" alt=""><img src="img/manos1.png" alt="">
 </div>

 

 &nbsp;&nbsp;&nbsp;
        <div style="float: right;width: 600px"><input type="checkbox" name="correcta7" id="correcta7" value = "2">B) <br><br><img src="img/cloro.png" alt=""><img src="img/mono2.png" alt=""></div>







    </div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

    
    <h3 style="margin-left:50px; font-family: play-Bold;">       7.- ¿PORQUE ES IMPORTANTE LA INFLUENCIA DE LOS PROVEEDORES Y CONTRATISTAS EN EL SGA DE LA EMPRESA?  </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <div style="float:left; width:500px " > <input type="checkbox" name="incorrecta4" id="incorrecta4" value = "1">A) Porque de forma voluntaria  deben cuidar el medio ambiente. 
       </div>

 

        &nbsp;&nbsp;&nbsp;
        <div style="float: right;width: 600px"><input type="checkbox" name="correcta4" id="correcta4" value = "2">B) Por los impactos ambientales que pueden generar a causas de sus actividades.
        </div>


    </div>
    <br>

    <h3 style="margin-left:50px; font-family: play-Bold;">      8.-¿QUÉ ES UN RIESGO LABORAL?</h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
      <div style="float:left; width:500px " > <input type="checkbox" name="incorrecta2" id="incorrecta2" value = "1">A) Es aquel que te acurre por cuestiones personales  </div>

 &nbsp;&nbsp;&nbsp;
        <div style="float: right;width: 600px"><input type="checkbox" name="correcta2" id="correcta2" value = "2"> B) Es aquel que  sucede a  consecuencias del trabajo que estas  realizando</div>



    </div>
    <br>
    

    <h3 style="margin-left:50px; font-family: play-Bold;">        9.- ¿PARA QUÉ NOS SIRVE EL SISTEMA GLOBAL ARMONIZADO GHS?  </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
       <div style="float:left; width:500px " > <input type="checkbox" name="incorrecta5" id="incorrecta5" value = "1">A) Para conocer en que más se puede utilizar esa sustancia química.</div>


 

 &nbsp;&nbsp;&nbsp;
       <div style="float: right;width: 600px"> <input type="checkbox" name="correcta5" id="correcta5" value = "2">B) Para  la identificación y  comunicación de los riesgos y peligros  de una sustancia química.</div>






    </div>
    <br>
    <h3 style="margin-left:50px; font-family: play-Bold;">         10.- ¿QUÉ ES UN PICTOGRAMA?   </h3>
     <br>

  
    <div style="margin-left:50px; font-family: play-Bold;">
    
        <div style="float:left; width:500px " ><input type="checkbox" name="correcta6" id="correcta6" value = "1">A) Gráfico que contiene un símbolo en el interior de un rombo con un borde rojo o negro, un color blanco de fondo, y que sirve para comunicar informaciones específicas de peligro de una sustancia o mezcla.
 </div>

 

    &nbsp;&nbsp;&nbsp;
        <div style="float: right;width: 600px"><input type="checkbox" name="incorrecta6" id="incorrecta6" value = "2">B)  Es un  rombo de seguridad que utiliza 4 colores amarillo, azul, rojo y blanco y en cada uno de ellos enumera los riesgos de la sustancia química , dependiendo el color es el riesgo al que se especifica.</div>



    <br><br><br><br><br><br>
    </div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <div style="margin-left: 500px; ">
    <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Enviar Respuestas</button>


    </div>
  </form>
</body>
</html>