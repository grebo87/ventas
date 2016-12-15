<?php
ob_start();
?>
<?php 
session_start(); 
$user=$_SESSION['user'];

require '../complementos/credenciales.php'; 

$id=$_GET['idu'];

$sql="DELETE FROM usuarios WHERE id='$id'";

if (!mysql_query($sql))
{
die('Error: ' . mysql_error());
}
echo "1 record deleted go back to delete another!";






header("Location:../index.php");  
?>
<?php
ob_end_flush();
?>