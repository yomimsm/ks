<?php
    include ("conexion.php");
    $sql = "SELECT * FROM Empresas";
    $res = mysqli_query($con, $sql);
?>
<html>
<head>
    <title>Prueba</title>
   
    <style>
    @font-face {
        font-family:"Play-Bold";
        src: url("fonts/Play-Bold.ttf");
    }
   </style>
</head>
<body>
    <h3 style="margin-left:50px; font-family: play-Bold;">Registro de Empresas</h3>
    <br>
    <form action="alta_empresa.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">NOMBRE DE LA EMPRESA:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="usuario" id="usuario" size="35">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">TIPO DE EMPRESA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="mexicana" id="mexicana" value = "1"> MEXICANA&nbsp;&nbsp;&nbsp;
        <input type="radio" name="extranjera" id="extranjera" value = "2"> EXTRANJERA
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">PROCEDENCIA: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="fisica" id="fisica" value = "1"> FISICA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="moral" id="moral" value = "2"> MORAL
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">RAZON&nbsp;&nbsp;&nbsp;SOCIAL:&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="social" id="social" size="46">
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">ACTIVIDADES A REALIZAR: </label>
        <br>
        <textarea name="actividades" id="activadades" cols="67" rows="5"style="resize: both;"></textarea>
    </div>
    <br>
    <div style="margin-left:50px; font-family: play-Bold;">
        <label for="">CONTACTO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="contacto" id="contacto" size="49">
    </div>
    <br>
    <div style="margin-left: 440px">
    <button type="submit" style="font-family: play-Bold; width: 100px; font-size: 16px">Guardar</button>
    </div>
    </form>
    <br>
    <br>
    <div>
    <h3>Empresas Registradas</h3>
    <?php if ($res) {   ?>
    <table>
    <thead>
        <tr>Nombre </tr>
        <tr>Procedencia </tr>
        <tr>Tipo </tr>
        <tr>Actividades </tr>
        <tr>Razón Social </tr>
        <tr>Contacto </tr>
    </thead>
        <tbody>
        <?php
            $p = "";
            $t = "";
			while ($f=mysqli_fetch_array($res)) {
                    if($f['procedencia'] == 1){
                        $p = "Fisica";
                    }
                    if($f['procedencia'] == 2){
                        $p = "Moral";
                    }
                    if($f['tipo'] == 1){
                        $t = "Mexicana";
                    }
                    if($f['tipo'] == 2){
                        $t = "Extranjera";
                    }?>
			<tr>
            <td><?php echo $f['company'];?></td>
			<td><?php echo $p;?></td>
			<td><?php echo $t;?></td>
            <td><?php echo $f['actividades'];?></td>
            <td><?php echo $f['razon_social'];?></td>
            <td><?php echo $f['contacto'];?></td>
		    </tr>
			<?php }?>
            </tbody>
    </table>
    <?php   } else{?>
   <p>No hay empresas registradas</p>
   <?php } ?>
   <hr>
    </div>
</body>
</html>