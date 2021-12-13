<?php
if(isset($_GET['editaralumno'])){
	$editariAL = $_GET['editaralumno'];
	$consulta = "SELECT * FROM estudiante WHERE Idestudiante='$editariAL'";
	$ejecutar = mysqli_query($conexion,$consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$idal=$fila['Idestudiante'];
	$selec_01=$fila['Idusuario'];
	$selec_02=$fila['DNIapoderado'];
	$dni=$fila['DNIestudiante'];
	$nom=$fila['Nombres'];
	$app=$fila['Apellidos'];
	$ipro=$fila['Grado_seccion'];
	$niv=$fila['Nivel'];
	$fm=$fila['fecha'];
	
	}
?>
<br />
<form method="POST" action="">


<input type="text" name="anom" value="<?php echo $nom; ?>">
<input type="text" name="aapp" value="<?php echo $app; ?>">
<input type="text" name="aipro" value="<?php echo $ipro; ?>">
<input type="text" name="aniv" value="<?php echo $niv; ?>">


<br></br>
<input type="submit" class="btn btn-info" name="actualizar" value="ACTUALIZAR ESTUDIANTE">
</form>

<?php
if(isset($_POST['actualizar'])){


$actualizar_anom = $_POST['anom'];
$actualizar_aapp = $_POST['aapp'];
$actualizar_aipro = $_POST['aipro'];
$actualizar_aniv = $_POST['aniv'];


$actualizar = "UPDATE estudiante SET Nombres='$actualizar_anom',Apellidos='$actualizar_aapp',Grado_seccion='$actualizar_aipro',Nivel='$actualizar_aniv' WHERE Idestudiante='$editariAL'";
$ejecutar= mysqli_query($conexion, $actualizar);
if($ejecutar){
	echo "<script>alert('Datos Actualizados')</script>";
	echo "<script>window.open('alumno.php/')</script>";
	
	}
}
?>