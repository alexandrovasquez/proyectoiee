<?php 
require_once("../db/conexion.php");
?>
<!DOCTYPE html>

<html>
<head>
<title>VALIDACION DE PAGO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/> VALIDACION DE PAGO</h2>
	
	

<div align="center" class="card card-container">
<form method="POST" action="index.php">

<label>Elegir el DNI del estudiante<select name="select_01">
<?php

$consulta2="SELECT * FROM estudiante";


$ejecutar2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
?>

<?php foreach ($ejecutar2 as $opciones):?>

<option value="<?php echo $opciones['DNIestudiante']?>"><?php echo $opciones['DNIestudiante']?></option>
<?php endforeach?>

</select></label>

<br></br>
<label><b>Condicion de matricula</b></label>
 <input type="radio"  name="matricula_v" value="Validado">Validado   
<input type="radio"  name="matricula_v" value="No Validado">No Validado<br>        


<label><b>Condicion de pension</b></label><br>
<table class="table table-dark">
<tr><td><input type="radio"  name="pension_v" value="Validado 04">Validado 04 </td>
<td><input type="radio"  name="pension_v" value="Validado 05">Validado 05    </td>
<td><input type="radio"  name="pension_v" value="Validado 06">Validado 06  </td>  
<td><input type="radio"  name="pension_v" value="Validado 07">Validado 07   </td>
<td><input type="radio"  name="pension_v" value="Validado 08">Validado 08   </td>  </tr>   
<tr><td><input type="radio"  name="pension_v" value="Validado 09">Validado 09</td>
<td><input type="radio"  name="pension_v" value="Validado 10">Validado 10   </td> 
<td><input type="radio"  name="pension_v" value="Validado 11">Validado 11  </td> 
<td><input type="radio"  name="pension_v" value="Validado 12">Validado 12  </td> 
<td><input type="radio"  name="pension_v" value="No Validado">No Validado </td></tr>

</table>
<input type="submit"  class="btn btn-info" name="insertapago" value="VALIDAR PAGO" ><br>
<h7><b>Codigo de pago - VALIDACIONES</b></h7>
<table class="table table-dark">
<tr>
<th>Codigo de Validacion</th>
<th>Pension_INICIO</th>
<th>Pension_VENCE</th>
</tr>
<tr>
<td>Validacion 04</td>
<td>02-04-yyyy</td>
<td>29-04-yyyy</td>
</tr>
<tr>
<td>Validacion 05</td>
<td>02-05-yyyy</td>
<td>29-05-yyyy</td>
</tr>
<tr>
<td>Validacion 06</td>
<td>02-06-yyyy</td>
<td>29-06-yyyy</td>
</tr>
<tr>
<td>Validacion 07</td>
<td>02-07-yyyy</td>
<td>29-07-yyyy</td>
</tr>
<tr>
<td>Validacion 08</td>
<td>02-08-yyyy</td>
<td>29-08-yyyy</td>
</tr>
<tr>
<td>Validacion 09</td>
<td>02-09-yyyy</td>
<td>29-09-yyyy</td>
</tr>
<tr>
<td>Validacion 10</td>
<td>02-10-yyyy</td>
<td>29-10-yyyy</td>
</tr>
<tr>
<td>Validacion 11</td>
<td>02-11-yyyy</td>
<td>29-11-yyyy</td>
</tr>
<tr>
<td>Validacion 12</td>
<td>02-12-yyyy</td>
<td>15-12-yyyy</td>
</tr>
</table>



</div>
</form>
<br></br>
<h3><b>::HISTORIAL DE VALIDACIONES DE PAGO DE LOS ESTUDIANTES - IEE::</b></h3>
<table class="table table-hover">
	<thead class="thead-dark">
<tr>
<th>ID PAGO</th>
<th>DNI DEL ALUMNO</th>
<th>CONDICION DE MATRICULA</th>
<th>CONDICION DE PENSION</th>
<th>ACTUALIZAR validacion</th>
<th>ELIMINAR</th>
</tr>
</thead>
<?php 
$mostrar="SELECT * FROM pago";
$ejecutar=mysqli_query($conexion,$mostrar);
$i= 0;
while ($fila=mysqli_fetch_array($ejecutar)){
	$ip=$fila['Idpago'];
	$select_01=$fila['DNIestudiante'];
	$M=$fila['condicion_matricula'];
	$P=$fila['condicion_pension'];
	$i++;
?>	
<tr align="center">
<td><?php echo $ip; ?></td>

<td><?php echo $select_01; ?></td>
<td><?php echo $M; ?></td>
<td><?php echo $P; ?></td>
<td><a href="index.php?editarpago=<?php echo $ip;?>"class="btn btn-warning">ACTUALIZAR</a></td>
<td><a href="index.php?eliminarpago=<?php echo $ip;?>"class="btn btn-success">ELIMINAR</a></td>
</tr>
	<?php } ?>
  </table>


</body>
</html>