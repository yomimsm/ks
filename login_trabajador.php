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
    <h3 style="margin-left:200px; font-family: play-Bold;color:#fff">Login para evaluaciones</h3>
    <br>
    <div style="border: 2px white solid;margin-right:200px">
    <br>
        <form action="ingreso.php" method="POST">
            <div style="margin-left:130px; font-family: play-Bold;color:#fff">
                <label for="Email">CURP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="txtusuario" id="txtusuario" style="width:250px" required>
            </div>
            <br>
            <div style="margin-left:130px; font-family: play-Bold;color:#fff">
                <label for="contraseña" style="color:white;">Clave de Empresa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="password" name="txtpassword" id="txtpassword" style="width:158px" required>
            </div>
            <br>
            <div style="margin-left: 350px">
                <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Ingresar</button>
            </div>
        </form>
    </div> 
  </body>
</html>