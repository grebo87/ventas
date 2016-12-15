<?php

error_reporting(0);

session_start(); 
$user=$_SESSION['user'];
if(!empty($_SESSION['user'])){ 



require 'complementos/credenciales.php';

$conuser=mysql_query("SELECT * FROM usuarios WHERE codigo_us = '$user'");
$rowser=mysql_fetch_array($conuser);
$perfil=$rowser['perfil'];
$perm="ADMIN";





$hoy=date("Y-m-d");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRO DE DATOS</title>


 <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="assets/favicon/favicon.ico" />

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">MENU</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>

            <div class="header-right">

             
                <a href="complementos/logout.php" class="btn btn-danger" title="Salir"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                          						<li style="background-color:#FFF">
                      <img src="assets/img/logo.png" width="100%"> 
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Inicio</a>
                    </li>
                    <li>
                        <a href="registro.php"><i class="fa fa-user "></i>Registro de Datos</a>
                      
                    </li>
                     <li>
                        <a href="pagos.php"><i class="fa fa-car "></i>Consulta de Pagos</a>
                         </li>
                   
                     <li>
                        <a class="active-menu" href="perfil.php"><i class="fa fa-user "></i>Perfil</a>
                      
                    </li>
                     
                  
                    
                                    
                   
                    <li>
                        <a href="complementos/logout.php"><i class="fa fa-exclamation-circle "></i>Cerrar Sesión</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PERFIL</h1>
                        <h1 class="page-subhead-line">Esta aplicación permitirá realizar ingreso de datos, consulta de registros, consulta de pagos y actualizar su información. </h1>

 <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
						  Cambiar Contraseña
						</button>
                        <p>&nbsp;</p>
                        
                        
                        
                         <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel"> Cambiar Contraseña</h4>
						      </div>
						      <div class="modal-body">
						      
                              <form action="actualizar/contrasena.php?iduser=<?php  echo $user ?>" method="post" enctype="multipart/form-data">
                              
                              <p>INGRESE NUEVA CONTRASEÑA</p>
                             <input name="pass" type="password" placeholder="*******" class="form-control" required >
                              
                              
                                              
                          
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		
                                <input class="btn btn-info" name="Guardar" type="submit" value="Guardar">
                                
                                </form>
						      </div>
						    </div>
						  </div>
						</div>  
                        <!--modal-->

                   </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                   <div  class="col-lg-12">
                   <P><strong>NOMBRE:</strong> <?PHP  echo $rowser['nombre_us']    ?></P>
                   <P><strong>APELLIDO:</strong> <?PHP  echo $rowser['apellido_us']     ?></P>
                   <P><strong>CODIGO DE USUARIO:</strong> <?PHP   echo $rowser['codigo_us']    ?></P>
                   <P><strong>EMAIL:</strong> <?PHP echo $rowser['correo_us']      ?></P>
                  
                   
                   
                   
                   
					</div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    

                   

                   
                </div>
                <!-- /. ROW  -->


                
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
       REGISTRO DE DATOS
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
<?PHP
}else{ 
 
//header('Location: login.html');
echo "<script language='javascript'>window.location='login.html'</script>;";

}
?>