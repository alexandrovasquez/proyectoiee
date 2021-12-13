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
	<h2  class="p-2 mb-2 bg-danger text-white"><input type="submit" align="rigth" value="INICIO" class="btn btn-danger" onclick = "location='/ProyectoFinal/views/principal.php/'"/> RESULTADO DE VALIDACION DE PAGO</h2>
	

<form method="" action=""> 
  <div align="center" class="card card-container">
<div align="center">
<fieldset> <legend>CANTIDAD DE ALUMNOS MATRICULADOS - CON PAGO VALIDADO</legend> 
 

 <?php 
 //////PAGO DE MATRICULA - VALIDADO
  $mostrar_NO="select count(*) as cuenta from pago where condicion_matricula='Validado' ";
   $ejecutar_NO=mysqli_query($conexion,$mostrar_NO);
   $result_NO=mysqli_fetch_assoc($ejecutar_NO); echo "Cantidad de alumnos que validaron su pago de matricula = ".(string)$result_NO['cuenta']; 
   
  $mostrar_SI="select count(*)*200.00 as cuenta from pago where condicion_matricula='Validado' ";
   $ejecutar_SI=mysqli_query($conexion,$mostrar_SI);

   $result_SI=mysqli_fetch_assoc($ejecutar_SI); echo "<br></br>Soles de los pagos de matricula = ".(string)$result_SI['cuenta']; 


   ?> 

   <table width="100" border="0" bgcolor="#00FFFF" align="center" > 
 
<br></br> <?php  $mostrar="SELECT * FROM pago where condicion_matricula='Validado'"; 
$ejecutar=mysqli_query($conexion,$mostrar); $i= 0; 
while ($fila=mysqli_fetch_array($ejecutar)){     $R = $fila['condicion_matricula'];    
 $i++; 
 ?>  
  <tr align="center"> <td><font color="#00FFFF"><?php echo $R; ?></font></td> </tr>     
  <?php } 
  ?>   
</table>   </fieldset>  


</fieldset>
</div>

<div align="center" class="card card-container">

<fieldset> <legend>CANTIDAD DE ALUMNOS MATRICULADOS - CON PAGO "NO VALIDADO"</legend> 
 
 
 <?php 
 //////PAGO DE MATRICULA - NO VALIDADO
  $mostrar_NOV="select count(*) as cuenta from pago where condicion_matricula='No Validado' ";
   $ejecutar_NOV=mysqli_query($conexion,$mostrar_NOV);
   $result_NOV=mysqli_fetch_assoc($ejecutar_NOV); echo "Cantidad de alumnos que aun NO validaron su pago de matricula = ".(string)$result_NOV['cuenta']; 
   
   ?> 

   <table width="100" border="0" bgcolor="#F51818" align="center" > 
 
<br></br> <?php  $mostrar="SELECT * FROM pago where condicion_matricula='No Validado'"; 
$ejecutar=mysqli_query($conexion,$mostrar); $i= 0; 
while ($fila=mysqli_fetch_array($ejecutar)){     $R = $fila['condicion_matricula'];    
 $i++; 
 ?>  
  <tr align="center"> <td><font color="#F51818"><?php echo $R; ?></font></td> </tr>     
  <?php } 
  ?>   
</table>   </fieldset>  


</fieldset>
</div>
<div align="center" class="card card-container">

<fieldset> <legend>CANTIDAD DE ALUMNOS QUE VALIDARON TODA LA PENSION ESCOLAR</legend> 
 
 
 <?php 
 //////PAGO DE MATRICULA - VALIDADO
  $mostrar_P="select count(*) as cuenta from pago where condicion_pension='Validado 12' ";
   $ejecutar_P=mysqli_query($conexion,$mostrar_P);
   $result_P=mysqli_fetch_assoc($ejecutar_P); echo "Cantidad de alumnos que validaron toda la pension escolar = ".(string)$result_P['cuenta']; 
   
   ?> 

   <table width="100" border="0" bgcolor="#F5D318" align="center" > 
 
<br></br> <?php  $mostrar="SELECT * FROM pago where condicion_pension='Validado 12'"; 
$ejecutar=mysqli_query($conexion,$mostrar); $i= 0; 
while ($fila=mysqli_fetch_array($ejecutar)){     $R = $fila['condicion_pension'];    
 $i++; 
 ?>  
  <tr align="center"> <td><font color="#F5D318"><?php echo $R; ?></font></td> </tr>     
  <?php } 
  ?>   
</table>   </fieldset>  

</fieldset>

</div>

<div align="center" class="card card-container">

<fieldset> <legend>CANTIDAD DE ALUMNOS QUE NO VALIDARON TODA LA PENSION ESCOLAR</legend> 
 
 
 <?php 
 //////PAGO DE MATRICULA - VALIDADO
  $mostrar_PNV="select count(*) as cuenta from pago where condicion_pension='No Validado' ";
   $ejecutar_PNV=mysqli_query($conexion,$mostrar_PNV);
   $result_PNV=mysqli_fetch_assoc($ejecutar_PNV); echo "Cantidad de alumnos que no validaron ninguna pension escolar = ".(string)$result_PNV['cuenta']; 
   
   ?> 

   <table width="100" border="0" bgcolor="#181BF5" align="center" > 
 
<br></br> <?php  $mostrar="SELECT * FROM pago where condicion_pension='No validado'"; 
$ejecutar=mysqli_query($conexion,$mostrar); $i= 0; 
while ($fila=mysqli_fetch_array($ejecutar)){     $R = $fila['condicion_pension'];    
 $i++; 
 ?>  
  <tr align="center"> <td><font color="#181BF5"><?php echo $R; ?></font></td> </tr>     
  <?php } 
  ?>   
</table>   </fieldset>  

</fieldset>
</div>


</form>
</div>
</body>
</html>