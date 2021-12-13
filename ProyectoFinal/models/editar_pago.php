<?php
if(isset($_GET['editarpago'])){
	$editarip = $_GET['editarpago'];
	$consulta = "SELECT * FROM pago WHERE Idpago='$editarip'";
	$ejecutar = mysqli_query($conexion,$consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$ip=$fila['Idpago'];
	$selec_01=$fila['DNIestudiante'];
	$M=$fila['condicion_matricula'];
	$P=$fila['condicion_pension'];
	
	}
?>
<br />
<form method="POST" action="">

<label>Condicion de matricula</label>
 <input type="radio"  name="matricula_v" value="Validado"
<?php
if($M=="Validado"){
	
echo "checked";
}
?>
>Validado   


<input type="radio"  name="matricula_v" value="No Validado"
<?php
if($M=="No Validado"){
	
echo "checked";
}
?>

>No Validado<br>     

<label>Condicion de pension</label><br>
<input type="radio"  name="pension_v" value="Validado 04"
<?php
if($P=="Validado 04"){
	
echo "checked";
}
?>
>Validado 04<br>  
<input type="radio"  name="pension_v" value="Validado 05"
<?php
if($P=="Validado 05"){
	
echo "checked";
}
?>
>Validado 05<br>    
<input type="radio"  name="pension_v" value="Validado 06"
<?php
if($P=="Validado 06"){
	
echo "checked";
}
?>
>Validado 06<br>    
<input type="radio"  name="pension_v" value="Validado 07"
<?php
if($P=="Validado 07"){
	
echo "checked";
}
?>
>Validado 07<br>    
<input type="radio"  name="pension_v" value="Validado 08"
<?php
if($P=="Validado 08"){
	
echo "checked";
}
?>
>Validado 08<br>          
<input type="radio"  name="pension_v" value="Validado 09"
<?php
if($P=="Validado 09"){
	
echo "checked";
}
?>
>Validado 09<br>    
<input type="radio"  name="pension_v" value="Validado 10"
<?php
if($P=="Validado 10"){
	
echo "checked";
}
?>
>Validado 10<br>    
<input type="radio"  name="pension_v" value="Validado 11"
<?php
if($P=="Validado 11"){
	
echo "checked";
}
?>
>Validado 11<br>    
<input type="radio"  name="pension_v" value="Validado 12"
<?php
if($P=="Validado 12"){
	
echo "checked";
}
?>
>Validado 12<br>    
<input type="radio"  name="pension_v" value="No Validado"
<?php
if($P=="No Validado"){
	
echo "checked";
}
?>
>No Validado<br>   
<br></br>
<input type="submit" class="btn btn-info" name="actualizar" value="ACTUALIZAR VALIDACION DE PAGO">
</form>

<?php
if(isset($_POST['actualizar'])){

$actualizar_M = $_POST['matricula_v'];
$actualizar_P = $_POST['pension_v'];

$actualizar = "UPDATE pago SET condicion_matricula='$actualizar_M',condicion_pension='$actualizar_P' WHERE Idpago='$editarip'";
$ejecutar= mysqli_query($conexion, $actualizar);
if($ejecutar){
	echo "<script>alert('Validacion Actualizada')</script>";
	echo "<script>window.open('index.php')</script>";
	}
}
?>