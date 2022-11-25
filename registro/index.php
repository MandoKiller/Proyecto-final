<!DOCTYPE html>
<?php
include("cn.php");
$usuarios = "SELECT * FROM usuarios";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
<br>
<form action="insertar.php" method="post">
 <fieldset class="scheduler-border">
 <legend>Ingresa los datos</legend>
  <label for="usr">Nombre:</label>
  <input type="text" name="nombre" class="form-control" id="nombre">

<div class="form-group">
  <label for="pwd">Apellido Paterno:</label>
  <input type="text" name="inicio"class="form-control" id="inicio">
</div>

<div class="form-group">
  <label for="pwd">Apellido Materno:</label>
  <input type="text" name="monto"class="form-control" id="monto">
</div>
<center>
<button  class="btns" style="background-color:green">Guardar</button>
<button  class="btns" style="background-color: green"><a href="mostrartabla.php" >Mostrar tabla</a></button>
<button  class="btns" style="background-color:red"><a href="../inicio/index.html">Menu inicial</a></button>

</center>
 </fieldset>
</form>







</body>

</html>
