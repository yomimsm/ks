<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluacion</title>
</head>
<style>
    @font-face {
        font-family:"Play-Bold";
        src: url("fonts/Play-Bold.ttf");
    }
    body{
        background-color:#336699;
    }
    * {
	    margin:0px;
	    padding:0;
    }
    .slides img{
        width:60%;
        height:100%;
    }
    .main {
	width:90%;
	max-width:1000px;
	margin:20px auto;
}
 
.slides {
	width:100%;
    height:100%;
}
 
.slidesjs-pagination {
	background:#424242;
	list-style:none;
	overflow:hidden;
}
 
.slidesjs-pagination li {
	float:left;
}
 
.slidesjs-pagination li a {
	display:block;
	padding:10px 20px;
	color:#fff;
	text-decoration:none;
}
 
.slidesjs-pagination li a:hover {
	background:#000;
}
 
.slides .active {
	background:#000;
}
 
.slidesjs-navigation{
	background:#000;
	color:#fff;
	text-decoration:none;
	display:inline-block;
	padding:13.5px 20px;
	float:right;
}

</style>
<body>
<?php
    session_start();
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
<h3 style="text-align:center;font-family:Play-Bold;margin-left:100px;margin-right:100px;color:white;margin-top:20px">Bienvenido <?php echo $_SESSION['nombre']?>, por favor lee con atención las siguientes diapositivas. Al terminar realiza la evaluación correspondiente.</h3>
    <div class="main">
		<div class="slides">
			<img src="images/presentacion/Diapositiva01.jpg" alt="">
            <img src="images/presentacion/Diapositiva02.jpg" alt="">
            <img src="images/presentacion/Diapositiva03.jpg" alt="">
            <img src="images/presentacion/Diapositiva04.jpg" alt="">
            <img src="images/presentacion/Diapositiva05.jpg" alt="">
            <img src="images/presentacion/Diapositiva06.jpg" alt="">
            <img src="images/presentacion/Diapositiva07.jpg" alt="">
            <img src="images/presentacion/Diapositiva08.jpg" alt="">
            <img src="images/presentacion/Diapositiva09.jpg" alt="">
            <img src="images/presentacion/Diapositiva10.jpg" alt="">
            <img src="images/presentacion/Diapositiva11.jpg" alt="">
            <img src="images/presentacion/Diapositiva12.jpg" alt="">
            <img src="images/presentacion/Diapositiva13.jpg" alt="">
            <img src="images/presentacion/Diapositiva14.jpg" alt="">
            <img src="images/presentacion/Diapositiva15.jpg" alt="">
            <img src="images/presentacion/Diapositiva16.jpg" alt="">
            <img src="images/presentacion/Diapositiva17.jpg" alt="">
            <img src="images/presentacion/Diapositiva18.jpg" alt="">
            <img src="images/presentacion/Diapositiva19.jpg" alt="">
            <img src="images/presentacion/Diapositiva20.jpg" alt="">
            <img src="images/presentacion/Diapositiva21.jpg" alt="">
            <img src="images/presentacion/Diapositiva22.jpg" alt="">
            <img src="images/presentacion/Diapositiva23.jpg" alt="">
            <img src="images/presentacion/Diapositiva24.jpg" alt="">
            <img src="images/presentacion/Diapositiva25.jpg" alt="">
            <img src="images/presentacion/Diapositiva26.jpg" alt="">
            <img src="images/presentacion/Diapositiva27.jpg" alt="">
            <img src="images/presentacion/Diapositiva28.jpg" alt="">
        </div>
    </div>
<div style="margin-left:850px;margin-top:-70px">
    <a href="examen.php" target="principal" type="button" style="font-family: play-Bold; width: 100px; font-size: 16px">Realizar evaluación</a>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script>
	$(function(){
        $(".slides").slidesjs({
            navigation: {
                active: true,
                effect: "slide"
            }
        });
    });
</script>

</body>

</html>