<?php 
session_start();
$user=$_SESSION['user'];
require '../complementos/credenciales.php';



$fecha=date("d-m-Y");





$insert = mysql_query("insert into VENTAS_RECIDENCIAL values ('NULL','".$_POST['COD_SUPERVISOR']."','".$_POST['FEC_ING']."','".$_POST['FEC_SISTEMA']."','".$_POST['COD_ATIS']."','".$_POST['VEND_ATIS']."','".$_POST['COD_VENDEDOR']."','".$_POST['CANAL_REGISTRO']."','".$_POST['CLIENTE']."','".$_POST['DNI']."','".$_POST['DIRECCION']."','".$_POST['DISTRITO']."','".$_POST['TELECONT1']."','".$_POST['TELECONT2']."','','','','','','','".$_POST['PRODUCTO_SOLICITA']."','".$_POST['DESCRIPCION_PAQUETE']."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')")

or die("Could not insert data because ".mysql_error()); 









header("Location:../registro.php");  






?>