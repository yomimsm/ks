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
  <body>
    <br>
    <br>
    <br>
    <h3 style="margin-left:100px; font-family: play-Bold;color:#fff">Login para registro de empleados</h3>
    <br>
    <div style="border: 2px white solid;margin-right:200px">
    <br>
        <form action="verificar.php" method="POST">
            <div style="margin-left:50px; font-family: play-Bold;color:#fff">
                <label for="Email">Email de la empresa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="usuario" id="usuario" style="width:250px" required>
            </div>
            <br>
            <div style="margin-left:50px; font-family: play-Bold;color:#fff">
                <label for="contraseña" style="color:white;">Clave Asignada: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="password" id="password" style="width:283px" required>
            </div>
            <br>
            <div style="margin-left: 377px">
                <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Ingresar</button>
            </div>
        </form>
    </div> 
  </body>
</html>
