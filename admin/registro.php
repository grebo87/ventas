<?php

error_reporting(0);

session_start(); 
$user=$_SESSION['user'];
if(!empty($_SESSION['user'])){ 



require 'complementos/credenciales.php';

$conuser=mysql_query("SELECT * FROM usuarios WHERE iduser = '$user'");
$rowser=mysql_fetch_array($conuser);
$perfil=$rowser['perfil'];
$perm="ADMIN";

$resultuser=mysql_query("select * from ANEXO where ANEX_CODIGO = '$user'");
$rowuser=mysql_fetch_array($resultuser);

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
    
      <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
      <script src="complementos/jquery.maskedinput.js" type="text/javascript"></script>
      
      <script>
jQuery(function($){
   $("#date").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date2").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
</script>
      
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
                        <a class="active-menu"  href="registro.php"><i class="fa fa-user "></i>Registro de Datos</a>
                      
                    </li>
                     <li>
                        <a href="pagos.php"><i class="fa fa-car "></i>Consulta de Pagos</a>
                         </li>
                   
                     <li>
                        <a href="perfil.php"><i class="fa fa-user "></i>Perfil</a>
                      
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
                        <h1 class="page-head-line">PANEL DE CONTROL</h1>
                        <h1 class="page-subhead-line">Esta aplicación permitirá realizar ingreso de datos, consulta de registros, consulta de pagos y actualizar su información. </h1>
                        
                        

                    </div>
                </div>
                
                 <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
						  Nuevo Registro
						</button>
                        
                        
                        
                         <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel"> Nuevo Registro</h4>
						      </div>
						      <div class="modal-body">
						      
                              <form action="insertar/registro.php" method="post" enctype="multipart/form-data">
                              
                              <p>CODIGO SUPERVISOR (*INFORMATIVO, CAMPO SERÁ INVISIBLE*)</p>
                              <?php
							  $resultsu=mysql_query("select * from ANEXO WHERE ANEXO_BREVE = '$user'");
							  $rowsu=mysql_fetch_array($resultsu);
							  
							  
							  ?>
                              <input name="COD_SUPERVISOR" type="text" required class="form-control" placeholder="SUPERVISOR" maxlength="11" readonly value="<?php   echo $rowsu['ANEX_CODIGO'] ?>"
                              <p></p>
                              <P>FECHA EN QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)</P>
                               <input id="date" type="text" name="FEC_ING" class="form-control" required placeholder="FECHA QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)">   
                               
                              <p></p>
                              
                                 <P>FECHA REAL DEL REGISTRO (*INFORMATIVO, CAMPO SERÁ INVISIBLE*)</P>                          
                               <input id="date2" type="text" name="FEC_SISTEMA" class="form-control"  readonly  value="<?php  echo date("Y-m-d")   ?>">   
                               
                              <p></p>
                              
                             
                              <P>CODIGO DEL VENDEDOR QUE SE REGISTRO EN EL SISTEMA TELEFONICA</P>
                              <input name="COD_ATIS" type="text" required class="form-control" readonly value="<?php  echo $rowsu['ANEXO_BREVE']   ?>">  
                              <p></p>
                              <P>NOMBRE DEL VENDEDOR</P>
                               <input name="VEND_ATIS" type="text" required class="form-control" readonly value="<?php  echo $rowsu['ANEX_DESCRIPCION']   ?>">
                              <p></p>
                              <P>CODIGO DEL VENDEDOR QUE REALIZO LA VENTA</P>
                               <input name="COD_VENDEDOR" type="text" required class="form-control" placeholder="CODIGO DEL VENDEDOR QUE REALIZO LA VENTA" maxlength="22">
                            <p></p>
                            <P>CANAL DE REGISTRO</P>
                              <input name="CANAL_REGISTRO" type="text" required class="form-control" placeholder="CANAL REGISTRO" maxlength="15">
                              <p></p>
                              <P>CLIENTE</P>
                               <input name="CLIENTE" type="text" required class="form-control" placeholder="CLIENTE" maxlength="255">
                              <p></p>
                              <P>DNI</P>
                               <input name="DNI" type="text" required class="form-control" placeholder="DNI" maxlength="15">
                              <p></p>
                              <P>DIRECCION</P>
                               <input name="DIRECCION" type="text" required class="form-control" placeholder="DIRECCION" maxlength="200">
                              <p></p>
                              
                              <P>DISTRITO</P>
                              <select name="DISTRITO" class="form-control">
                                    <option>Seleccione...</option>
                              <?php
							  $resultdi=mysql_query("SELECT  Codigo_General ,  NOMDIST FROM UBIGEO WHERE CODDPTO='14' AND CODPROV='01'");
							  while($rowdi=mysql_fetch_array($resultdi)){
								  $codgen=$rowdi['Codigo_General'];
								  $nomdis=$rowdi['NOMDIST'];
								  
								  printf("<option value='$codgen'>$nomdis</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                              
                              <p></p>
                              <P>TELEFONO 1</P>
                               <input name="TELECONT1" type="text" required class="form-control" placeholder="TELEFONO DE CONTACTO 1" maxlength="10">
                              <p></p>
                              <P>TELEFONO 2</P>
                              <input name="TELECONT2" type="text" required class="form-control" placeholder="TELEFONO DE CONTACTO 2" maxlength="10">
                              <p></p>
                              <P>PRODUCTO SOLICITADO</P>
                                  <select name="PRODUCTO_SOLICITA" class="form-control">
                                  <option>Seleccione...</option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								 
								  
								  printf("<option>$codpro</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                            <p></p>
                              <P>DESCRIPCION</P>
                                  <select name="DESCRIPCION_PAQUETE" class="form-control">
                                  <option>Seleccione...</option>
                              <?php
							  $resultds=mysql_query("SELECT * FROM CATALOGO");
							  while($rowds=mysql_fetch_array($resultds)){
								  
								  $descpro=utf8_encode($rowds['DESCR_PROD']);
								  
								  printf("<option>$descpro</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              <p></p>
                              
                              
                                              
                          
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
                
                
                <!-- /. ROW  -->
                <div class="row">
                   
                   <div class="col-lg-12">
                   
                   <p></p>
                   
                    <p>TODOS LOS REGISTROS</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SUPERVISOR</th>
                                        <th>FECHA VENTA</th>
                                        <th>FECHA REAL</th>
                                        <th>COD. VENDEDOR</th
                                        ><th>VENDEDOR</th>
                                      
                                         <th align="center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
								<?php
								
								$cuenta=1;
								$resultr=mysql_query("select * from VENTAS_RECIDENCIAL");
								while($rowr=mysql_fetch_array($resultr)){
									$id=$rowr['id'];
									$super=$rowr['COD_SUPERVISOR'];
									$fecin=$rowr['FEC_ING'];
									$fecsis=$rowr['FEC_SISTEMA'];
									$codatis=$rowr['COD_ATIS'];
									$venda=$rowr['VEND_ATIS'];
									$c=0;
									
								
										
									
									printf("
									
									
									 <tr>
                                        <td>$cuenta</td>
                                        <td>$super</td>
                                        <td>$fecin</td>
                                        <td>$fecsis</td>
                                        <td>$codatis</td>
                                         <td>$venda</td>
                                        
                                            <td align='center'><a href='' class='fa fa-search btn btn-info'></a> <a href='' class='fa fa-edit btn btn-success'></a> <a class='fa fa-eraser btn btn-danger' data-toggle='modal' data-target='#myModal$cuenta'></a>
											
																
						
						
						
						
											
											</td>
                                    </tr>
                                    
									
									
									");
									
									$cuenta++;
									
								}
								
							
								
								?>
                                
                                
                                   
                                   
                                </tbody>
                            </table>
                   
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