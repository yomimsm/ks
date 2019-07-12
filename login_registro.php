<html>
  <head>
  <title>Login</title>
  <meta charset=“UTF-8”>
  <style>
    @font-face {
        font-family:"Play-Bold";
        src: url("fonts/Play-Bold.ttf");
    }
    body{
        background-color:#336699;
        margin-left:200px;
    }
   </style>
  </head>
  <?php
        session_start();
        // Se comprueba si ya se habia iniciado la sesion y en ese caso le redirigimos a la pagina de inicio
        if(isset($_SESSION['id'])){
            header("Location:trabajadores.php");
        }
    ?>
  <body>
    <br>
    <br>
    <br>
    <h3 style="margin-left:100px; font-family: play-Bold;color:#fff">Login para registro de empleados</h3>
    <br>
    <div style="border: 2px white solid;margin-right:200px">
    <br>
        <form action="ingresar.php" method="POST">
            <div style="margin-left:50px; font-family: play-Bold;color:#fff">
                <label for="Email">Email de la empresa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="txtusuario" id="txtusuario" style="width:250px" required>
            </div>
            <br>
            <div style="margin-left:50px; font-family: play-Bold;color:#fff">
                <label for="contraseña" style="color:white;">Clave Asignada: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="txtpassword" id="txtpassword" style="width:283px" required>
            </div>
            <br>
            <div style="margin-left: 377px">
                <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Guardar</button>
            </div>
        </form>
    </div> 
  </body>
</html>
