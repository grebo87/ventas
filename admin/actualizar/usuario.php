<?php

//error_reporting(0);
session_start();

$user=$_SESSION['user'];
require '../complementos/credenciales.php'; 


$id=$_GET['id'];






	$sSQLa="Update usuarios Set codigo_us='".$_POST['COD']."', nombre_us='".$_POST['NOMBRE']."', apellido_us='".$_POST['APELLIDO']."', clave_us='".$_POST['PASS']."', correo_us='".$_POST['CORREO']."', tipo_us='".$_POST['PERFIL']."' Where id='$id'";
mysql_query($sSQLa);




header("Location:../index.php"); 

echo "<script language='javascript'>window.location='../index.php'</script>;";	

		?>
        <?php
ob_end_flush();
?>
        
     