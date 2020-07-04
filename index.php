<?php
	include 'conexion.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio-Dropstore</title>
	<meta charset="ISO-8859-1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-ligth" style="background-color: #000000;">
  <a class="navbar-brand" href="index.php"><img src="./imagenes/Main.png" style="margin-top: -6px; width:160px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	  <ul style="margin-right: 30px;" >
			  <form class="form-inline my-2 my-lg-0" >
			  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" >
			  <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search x2"></i></button>
			</form>
	   </ul>

	    <li class="nav-item" style="margin-right: 10px;">
	    <a class="nav-link" href="#" style="color: #ff7802;"> <b>¡Lo mas nuevo!</b></a>
	  </li>

	   <li class="nav-item" style="margin-right: 10px;">
	    <a class="nav-link" href="#" style="color: #ff7802;"><b>Lo mas vendido</b></a>
	  </li>
	<li class="nav-item dropdown" style="margin-right: 10px;">
		    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ff7802;">
		      <i class="fas fa-user x2"></i> Cuenta, <?php $nombre; ?>
		    </a>
		    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

		      <a class="dropdown-item" href="./login/login.html">Iniciar sesión</a>

		      <a class="dropdown-item" href="#">Ver detalles de cuenta</a>
		      <div class="dropdown-divider"></div>
		      <a class="dropdown-item" href="#">Configuración</a>
		      <a class="dropdown-item" href="#">Datos personales</a>
		      <a class="dropdown-item" href="#">Tarjeta</a>
		      <a class="dropdown-item" href="#">Domicilio</a>


		    </div>
	  </li>
	  <li class="nav-item" style="margin-right: 10px;">
	    <a class="nav-link" href="#" style="color: #ff7802;"><i class="fas fa-box x2"></i> Pedidos</a>
	  </li>
	  
	  <li class="nav-item" style="margin-right: 10px;">
	    <a class="nav-link" href="carrito.php" style="color: #01aaff;"><i class="fas fa-shopping-cart x2"></i> <?php $no_product; ?><b>Carrito</b></a>
	  </li>
	</ul>
	
	</div>
	</nav>

	<br>
	
	<br>
<div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="margin-left: 5px;">
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #e57c0b; border-color: #ff7802;">
      Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <em><a class="dropdown-item" href="#">Electronica</a>
      <a class="dropdown-item" href="#">Hogar</a>
      <a class="dropdown-item" href="#">Herramientas</a>
      <a class="dropdown-item" href="#">Entretenimiento</a>
      <a class="dropdown-item" href="#">Juguetes</a>
      <a class="dropdown-item" href="#">Ropa</a>
    </em></div>
  </div>
</div>
<br>
<br>
<br>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./carrusel/GT10.jpg" alt="GT08" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./carrusel/xiaomi redmi 6.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./carrusel/amdryzen5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<?php
	$re=mysqli_query($con,$f="select * from producto;")or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {

?>

<section style="margin-left: 1%; margin-right: 1%;">
	<div class="card" style="width: 18rem; float: left; margin:7px;" style="margin-right: 3px; margin-top: 3px;
	">
  <img class="card-img-top" src="./Productos/<?php echo $f['img1'];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $f['Nombre'];?></h5>
    <p class="card-text" style="color: #4aa31a;">$<?php echo $f['Precio'];?> MXN</p>
    <a href="./detalles.php?id=<?php echo $f['Id'];?>" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;">Ver producto</a>
  </div>
</div>
</section>
<?php
	
	}
?>
</body>
</html>