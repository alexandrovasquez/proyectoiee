<?php
require_once("../db/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>REGISTRO DE ALUMNO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/> REGISTRO DE ALUMNOS</h2>
<div align="center" class="card card-container">
<form method="POST" action="">


<label><h6><b>Bienvenido, POR FAVOR</b></h6></label>

<label>Elegir su ID estimado usuario <select name="select_01">


<?php

$consulta1="SELECT * FROM usuario";


$ejecutar1=mysqli_query($conexion,$consulta1) or die (mysqli_error($conexion));
?>

<?php foreach ($ejecutar1 as $opciones):?>

<option value="<?php echo $opciones['Idusuario']?>"><?php echo $opciones['Idusuario']?></option>
<?php endforeach?>

</select></label>
<br></br>
<label>Elegir el DNI del apoderado<select name="select_02">
<?php

$consulta2="SELECT * FROM apoderado";


$ejecutar2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
?>

<?php foreach ($ejecutar2 as $opciones):?>

<option value="<?php echo $opciones['DNIapoderado']?>"><?php echo $opciones['DNIapoderado']?></option>
<?php endforeach?>

</select></label>
<br></br>

<label>DNI estudiante</label>
<input type="text" name="DNIestudiante" placeholder="DNI estudiante">
<label>Nombres</label>
<input type="text" name="Nombres" placeholder="NOMBRES">
<label>Apellidos</label>
<input type="text" name="Apellidos" placeholder="APELLIDOS"><br></br>
<label>Grado y seccion</label>
<input type="text" name="Grado_seccion" placeholder="escriba el grado y la seccion">
<label>Nivel Academico</label>
<input type="text" name="Nivel" placeholder="escriba el nivel academico"><br></br>
<label>Fecha de Matricula</label>
<input type="date" name="fecha" placeholder="FECHA MATRICULA">
<input type="submit" name="guardar"  class="btn btn-info" value="REGISTRAR ALUMNO">
</div>
</form>

<br />
<h3><b>::HISTORIAL DE LOS ESTUDIANTES MATRICULADOS::</b></h3>
 <table class="table table-hover">
 	<thead class="thead-dark">
<tr>
<th>ID ALUMNO</th>
<th>ID USUARIO</th>
<th>DNI APODERADO</th>
<th>DNI ESTUDIANTE</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>GRADO Y SECCION</th>
<th>NIVEL ACADEMICO</th>
<th>FECHA MATRICULA</th>
<th>ACTUALIZAR</th>
<th>EXPULSAR</th>
</tr>
</thead>

<?php 
$mostrar="SELECT * FROM estudiante";
$ejecutar=mysqli_query($conexion,$mostrar);
$i= 0;
while ($fila=mysqli_fetch_array($ejecutar)){
	$idal=$fila['Idestudiante'];
	$selec_01=$fila['Idusuario'];
	$selec_02=$fila['DNIapoderado'];
	$dni=$fila['DNIestudiante'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$ipro=$fila['Grado_seccion'];
	$niv=$fila['Nivel'];
	$fm=$fila['fecha'];
	$i++;
?>	
<tr align="center">
	
<td><?php echo $idal; ?></td>
<td><?php echo $selec_01; ?></td>
<td><?php echo $selec_02; ?></td>
<td><?php echo $dni; ?></td>
<td><?php echo $nom; ?></td>
<td><?php echo $app; ?></td>
<td><?php echo $ipro; ?></td>
<td><?php echo $niv; ?></td>
<td><?php echo $fm; ?></td>
<td><a href="index.php?editaralumno=<?php echo $idal;?>"class="btn btn-warning">ACTUALIZAR</a></td>
<td><a href="index.php?eliminaralumno=<?php echo $idal;?>"class="btn btn-success">EXPULSAR</a></td>
</tr>
	<?php } ?>
  </table>

</body>


</html>