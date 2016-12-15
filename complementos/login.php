<?php

ob_start();
error_reporting(E_ALL);

mysql_connect("127.0.0.1","root","123","innovass_base");


mysql_select_db("innovass_base"); 
	

$table = "usuarios";	

$iduser=$_POST['iduser'];


$match = "select id from $table where codigo_us = '".$_POST['iduser']."' 
and clave_us = '".$_POST['pass']."';"; 

$qry = mysql_query($match) 
or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) { 
echo "Error, nombre de usuario o contraseña incorrectos.<br>"; 

//header('Location: ../login.html');

exit; 
} else { 

session_start();
$_SESSION['user'] = $_POST['iduser'];


$result=mysql_query("select * from usuarios where codigo_us = '$iduser'");
$row=mysql_fetch_array($result);
$type=$row['tipo_us'];

if($type == 1){
	
	
header('Location: ../user/index.php');	
	
}
elseif($type == 2){
	
	
	
header('Location: ../moderador/index.php');		
	
	
}
elseif($type == 3){
	
	
	
header('Location: ../admin/index.php');		
	
	
}

else{
header('Location: logout.php');	
}
}

ob_end_flush();
?>