<!DOCTYPE html>
<?php
include("cn.php");
$usuarios = "SELECT * FROM usuarios";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<br>
<table class="table table-bordered">
 <tr>
        <th>Nombre </th>
        <th>Apellido Paterno </th>
        <th>Apellido Materno </th>
		<th>Operacion</th>
      </tr>
<?php $resultado = mysqli_query($conexion,$usuarios);
while($row=mysqli_fetch_assoc($resultado)){?>
<tr>
	<th class="table__item"><?php echo
	$row["nombre"];?></th>
	<th class="table__item"><?php echo
	$row["inicio"];?></th>
	<th class="table__item"><?php echo
	$row["monto"];?></th>
	<th><a href="eliminar.php?id=<?php echo $row["id"];?>" class="table__item__link">Eliminar</a>
	</tr>
	<?php
}mysqli_free_result($resultado);?>

</table>
<center><button><a href="index.php" >Regresar</a></button></center>
</body>
<script src="comprobacion.js"></script>
</html>
