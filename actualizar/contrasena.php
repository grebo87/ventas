<?php

error_reporting(0);
session_start();

$user=$_SESSION['user'];
require '../complementos/credenciales.php'; 


$id=$_GET['iduser'];
$newpass=$_POST['pass'];





	$sSQLa="Update usuarios Set clave_us='$newpass' Where codigo_us='$id'";
mysql_query($sSQLa);




header("Location:../perfil.php"); 

echo "<script language='javascript'>window.location='../perfil.php'</script>;";	

		?>
        <?php
ob_end_flush();
?>
        
     