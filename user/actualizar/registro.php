<?php

error_reporting(0);
session_start();

$user=$_SESSION['user'];
require '../complementos/credenciales.php'; 


$id=$_GET['numid'];






	$sSQLa="Update VENTAS_RECIDENCIAL Set COD_SUPERVISOR='".$_POST['COD_SUPERVISOR']."', FEC_ING='".$_POST['FEC_ING']."', FEC_SISTEMA='".$_POST['FEC_SISTEMA']."', COD_ATIS='".$_POST['COD_ATIS']."', COD_VENDEDOR='".$_POST['COD_ATIS']."', CANAL_REGISTRO='".$_POST['CANAL_REGISTRO']."', CLIENTE='".$_POST['CLIENTE']."', DNI='".$_POST['DNI']."', DIRECCION='".$_POST['DIRECCION']."', DISTRITO='".$_POST['DISTRITO']."', TELECONT1='".$_POST['TELECONT1']."', TELECONT2='".$_POST['TELECONT2']."', PRODUCTO_ORIGEN='".$_POST['PRODUCTO_ORIGEN']."', PRODUCTO_SOLICITA='".$_POST['PRODUCTO_SOLICITA']."' Where NUM_ID='$id'";
mysql_query($sSQLa);




header("Location:../registro.php"); 

echo "<script language='javascript'>window.location='../registro.php'</script>;";	

		?>
        <?php
ob_end_flush();
?>
        
     