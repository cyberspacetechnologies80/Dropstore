<?php
	session_start();
	include 'conexion.php';
	if (isset($_SESSION['carrito'])) {
		$arreglo=$_SESSION['carrito'];
		$encontro=false;
		$numero=0;
		for ($i=0; $i <count($arreglo) ; $i++) { 
			if($arreglo[$i]['Id']==$_GET['id']){
				$encontro=true;
				$numero=$i;
			}
		}
		if ($encontro==true) {
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
			$_SESSION['carrito']=$arreglo;
		}else{
			$nombre="";
			$precio=0.00;
			$imagen="";
			$re=mysqli_query($con,"select * from producto where Id=".$_GET['id'].";");
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['img1'];	
			}
			$datosNuevos=array('Id'=>$_GET['id'],
							 'Nombre'=>$nombre,
							 'Imagen'=>$imagen,
							 'Precio'=>$precio,
							 'Cantidad'=>1);
			array_push($arreglo, $datosNuevos);
			$_SESSION['carrito']=$arreglo;
		}
	} else {
		if (isset($_GET['id'])) {
			$nombre="";
			$precio=0.00;
			$imagen="";
			$re=mysqli_query($con,"select * from producto where Id=".$_GET['id'].";");
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['img1'];	
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							 'Nombre'=>$nombre,
							 'Imagen'=>$imagen,
							 'Precio'=>$precio,
							 'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		} else {
			# code...
		}
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrito de Compras-Dropstore</title>
	<meta charset="ISO-8859-1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="http://code.jquery.com/ "></script>
<script src="javascript/main.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="./javascript/scripts.js"></script>
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
	    <a class="nav-link" href="#" style="color: #01aaff;"><i class="fas fa-shopping-cart x2"></i><b>Carrito</b></a>
	  </li>
	</ul>
	
	</div>
	</nav>
	
	<br>
<section>
	
	<center><h2>Carrito de compras</h2></center>
<?php
	$total=0.00;

	if (isset($_SESSION['carrito'])) {
		$datos=$_SESSION['carrito'];
		for ($i=0; $i<count($datos) ; $i++) { 
?>
		<section style="margin-left: 1%; margin-right: 1%;">
	<div class="card" style="width: 18rem; float: left; margin:7px;" style="margin-right: 3px; margin-top: 3px;
	">
  <img class="card-img-top" src="./Productos/<?php echo $datos[$i]['Imagen'];?>" alt="Card image cap">
  <div class="card-body">
    <span><h5 class="card-title"><?php echo $datos[$i]['Nombre'];?></h5></span><br>
    </span><p class="card-text" style="color: #4aa31a;">$<?php echo $datos[$i]['Precio'];?> MXN</p></span><br>
    <span>Cantidad 
    	<input type="number" value="<?php echo $datos[$i]['Cantidad'];?>"
    	data-precio="<?php echo $datos[$i]['Precio'];?>"
    	data-id="<?php echo $datos[$i]['Id'];?>"
    	class="cantidad"></span><br>
    <span>Subtotal: <p style="color: green;" class="subtotal">$<?php echo $datos[$i]['Cantidad'] *$datos[$i]['Precio'];?>MXN</p></span>
    <br>
    <a href='' class='btn btn-primary' style='background-color: red; border-color: red; width: 100%;'>Eliminar</a>
  </div>
</div>
</section>
<?php
	$total=($datos[$i]['Cantidad'] *$datos[$i]['Precio'])+$total;
		}
	}

	else{

		echo '<br><center><h3>¡Vaya!, aún no has agregado nada al carrito</h3></center>';
	}
	?>
</section>
<?php
	echo "<br><section style='width: 100%; float:left'><center><h3>Total: </h3><h3 id='total'style='color: green;'>$".$total."MXN</h3><br>";?>
		<?php 
			if ($total!=0) {
				echo"<a href='' class='btn btn-primary' style='background-color: #ff7802; border-color: #ff7802;'>Proceder al pago</a>"; 
			}
				echo"</center></section><br>";
	
?>




</body>
</html>
