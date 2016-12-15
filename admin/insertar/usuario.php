<?php 
session_start();
$user=$_SESSION['user'];
require '../complementos/credenciales.php';



$fecha=date("d-m-Y");





$insert = mysql_query("insert into usuarios values (NULL,'".$_POST['COD']."','".$_POST['NOMBRE']."','".$_POST['APELLIDO']."','".$_POST['PASS']."','".$_POST['CORREO']."','ACTIVO','".$_POST['PERFIL']."')")

or die("Could not insert data because ".mysql_error()); 









header("Location:../index.php");  






?>