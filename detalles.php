<!DOCTYPE html>
<html>
<head>
	<title>Detalles-Dropstore</title>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-ligth" style="background-color: #000000;">
  <a class="navbar-brand" href="./"><img src="./imagenes/Main.png" style="margin-top: -6px; width:160px;"></a>
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
	<?php
	include 'conexion.php';
	$re=mysqli_query($con,$f="select * from producto where Id=".$_GET['id'])or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {

?>
	<div class="card" style="width: 100%; float: left; margin:7px;">
		<div class="container">
		  <div class="row">
		    <div class="col">		

				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img1'];?>" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img2'];?>" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img3'];?>" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>
			<div class="col">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $f['Nombre'];?></h5>
			    <p class="card-text" style="color: #4aa31a;">$<?php echo $f['Precio'];?>MXN</p>
			    <a href="carrito.php?id=<?php echo $f['Id'];?>" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;">Añadir al carrito</a>
			    <hr>
			    <?php echo $f['Descripcion'];?>

			  </div>
			 </div>
			</div>
		</div>
	</div>
	<?php
		}
	?>

	

</body>
</html>