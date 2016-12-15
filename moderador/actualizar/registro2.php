<?php

//error_reporting(0);
session_start();

$user=$_SESSION['user'];
require '../complementos/credenciales.php'; 


$id=$_GET['numid'];






	$sSQLa="Update VENTAS_RECIDENCIAL Set SEG_VEND='".$_POST['SEG_VEND']."', TRATAMIENTO='".$_POST['TRATAMIENTO']."', PERMUTACION='".$_POST['PERMUTACION']."',  RENTA_INICIAL='".$_POST['RENTA_INICIAL']."', RENTA_FINAL='".$_POST['RENTA_FINAL']."', TROBA='".$_POST['TROBA']."', ORDEN_TRABAJO_OT_CONTRATA='".$_POST['ORDEN_TRABAJO_OT_CONTRATA']."', EXPEDIENTE='".$_POST['EXPEDIENTE']."', PEDIDO='".$_POST['PEDIDO']."', INSCRIPCION='".$_POST['INSCRIPCION']."', TELE_ASIG_COD_CLIENTE='".$_POST['TELE_ASIG_COD_CLIENTE']."', FINSCRIP='".$_POST['FECHA_INSCRIP']."', FECHA_ORDEN='".$_POST['FECHA_ORDEN']."', FECHA_INST='".$_POST['FECHA_INST']."', FECHA_CANCEL='".$_POST['FECHA_CANCEL']."', ESTADOS='".$_POST['ESTADOS']."', MOTIVOS='".$_POST['MOTIVOS']."', OBSERVACION='".$_POST['OBSERVACION']."', OBSERVACION_BACK_Y_CONVER='".$_POST['OBSERVACION_BACK_Y_CONVER']."', CODIGO_EXPERTO='".$_POST['CODIGO_EXPERTO']."', FECHA_CALIDAD='".$_POST['FECHA_CALIDAD']."', ESTADO_CALIDAD='".$_POST['ESTADO_CALIDAD']."', CALIDAD='".$_POST['CALIDAD']."', DETALLE='".$_POST['DETALLE']."', RECIBO1='".$_POST['RECIBO1']."', RECIBO2='".$_POST['RECIBO2']."', Fecha_Devol='".$_POST['Fecha_Devol']."', DSPRODUCTO='".$_POST['DSPRODUCTO']."', DSOBSERVACION='".$_POST['DSOBSERVACION']."', nuPenalidad='".$_POST['nuPenalidad']."',dsEstadoGestion ='".$_POST['dsEstadoGestion']."', estado_recibo1='".$_POST['estado_recibo1']."', Monto_recibo1='".$_POST['Monto_recibo1']."', Fecha_vence_recibo1='".$_POST['Fecha_vence_recibo1']."', estado_recibo2='".$_POST['estado_recibo2']."', Monto_recibo2='".$_POST['Monto_recibo2']."', Fecha_vence_recibo1='".$_POST['Monto_recibo2']."' Where NUM_ID='$id'";
mysql_query($sSQLa);


//

header("Location:../registro.php"); 

echo "<script language='javascript'>window.location='../registro.php'</script>;";	

		?>
        <?php
ob_end_flush();
?>
        
     