<?php
    include ("conexion.php");
    $sql = "SELECT * FROM Empresas";
    $res = mysqli_query($con, $sql);
?>
<html>
<head>
    <title>Prueba</title>
</head>
<body>
    <h3 style="margin-left:50px">Registro de Empresas</h3>
    <br>
    <form action="alta_empresa.php" method = "post" enctype="multipart/form-data">
    <div style="margin-left:50px">
        <label for="">Nombre de la empresa: </label>
        <input type="text" name="usuario" id="usuario">
    </div>
    <br>
    <div style="margin-left:50px">
        <label for="">Procedencia: &nbsp;&nbsp;&nbsp;</label>
        <input type="radio" name="fisica" id="fisica" value = "1"> Fisica&nbsp;&nbsp;&nbsp;
        <input type="radio" name="moral" id="moral" value = "2"> Moral
    </div>
    <br>
    <div style="margin-left:50px">
        <label for="">Tipo de Empresa: </label>
        <input type="radio" name="mexicana" id="mexicana" value = "1"> Mexicana
        <input type="radio" name="extranjera" id="extranjera" value = "2"> Extranjera
    </div>
    <br>
    <div style="margin-left:50px">
        <label for="">Actividades a Realizar: </label>
        <br>
        <textarea name="actividades" id="activadades" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div style="margin-left:50px">
        <label for="">Razon Social: </label>
        <input type="text" name="social" id="social">
    </div>
    <br>
    <div style="margin-left:50px">
        <label for="">Contacto: </label>
        <input type="text" name="contacto" id="contacto">
    </div>
    <br>
    <button type="submit">Guardar</button>
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
            <td><?php echo $f['razon_social'];?>'</td>
            <td><?php echo $f['contacto'];?>'</td>
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