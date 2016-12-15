<?php

error_reporting(0);

session_start(); 
$user=$_SESSION['user'];
if(!empty($_SESSION['user'])){ 

$COD=$user;





require 'complementos/credenciales.php';

$conuser=mysql_query("SELECT * FROM usuarios WHERE iduser = '$user'");
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
    <link rel="stylesheet" type="text/css" href="complementos/jquery.datetimepicker.css"/>
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
                        <a  href="registro.php"><i class="fa fa-user "></i>Registro de Datos</a>
                      
                    </li>
                     <li>
                        <a class="active-menu" href="pagos.php"><i class="fa fa-car "></i>Consulta de Pagos</a>
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
                
                
                
                
                <!-- /. ROW  -->
                <div class="row">
                   
                   <div class="col-lg-12">
                   
                   <p></p>
                   
                    <p>PAGOS POR VENTAS REALIZADAS</p>
                    <p></p>
                    <a data-toggle="modal" data-target="#myModalfiltro" class="btn btn-info">FILTRAR POR FECHAS</a>
                    
                    <!-- Modal -->
						<div class='modal fade' id='myModalfiltro' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						  <div class='modal-dialog'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						        <h4 class='modal-title' id='myModalLabel'> FILTRAR</h4>
						      </div>
						      <div class='modal-body'>
						      
                              <form action='pagos.php?filtro=1' method='post' enctype='multipart/form-data'>
                              
                              
                             
                             <p>SELECCIONE FECHA INICIAL</p>
                             
                             <input name="fechaini" placeholder="Fecha Inicial" class="form-control" type="text" id="datetimepicker1"/>
                             
                              <P></P>
                             
                             <P>SELECCIONES FECHA FINAL</P>
                             
                              <input name="fechafinal" placeholder="Fecha Final" class="form-control" type="text" id="datetimepicker2"/>
                            
                             
                             <script src="complementos/jquery.js"></script>
<script src="complementos/build/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

jQuery.datetimepicker.setLocale('es');

jQuery('#datetimepicker1').datetimepicker({
 i18n:{
  de:{
   months:[
    'Januar','Februar','März','April',
    'Mai','Juni','Juli','August',
    'September','Oktober','November','Dezember',
   ],
   dayOfWeek:[
    "So.", "Mo", "Di", "Mi", 
    "Do", "Fr", "Sa.",
   ]
  }
 },
 timepicker:false,
 format:'Y-m-d'
});




jQuery('#datetimepicker2').datetimepicker({
 i18n:{
  de:{
   months:[
    'Januar','Februar','März','April',
    'Mai','Juni','Juli','August',
    'September','Oktober','November','Dezember',
   ],
   dayOfWeek:[
    "So.", "Mo", "Di", "Mi", 
    "Do", "Fr", "Sa.",
   ]
  }
 },
 timepicker:false,
 format:'Y-m-d'
});


</script>
                             
                             
                             
                            
                           
                             <p></p>
                             <input class="form-control btn btn-info" name="" type="submit" value="FILTRAR">
                              
                                               
                          
                              
                              
                                              
                          
						      </div>
						      <div class='modal-footer'>
						        <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
		
                               
                                
                                </form>
						      </div>
						    </div>
						  </div>
						</div>  
                        <!--modal-->	
                    
                    
                    <p></p>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>NOMBRE</th>
                                        <th>ESTADO</th>
                                        <th>MOTIVO</th>
                                        <th>FECHA DE LA VENTA</th>
                                        <th>COMISION</th>
                                        <th>RETENCION</th
                                        ><th>TOTAL</th>
                                      
                                         <th align="center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
								<?php
								
								$cuenta=1;
								$comi=0;
								$rete=0;
								$tot=0;
								
								$filtro=$_GET['filtro'];
if($filtro==1){

$fecini=$_POST['fechaini'];
$ffinal=$_POST['fechafinal'];

$resultr=mysql_query("select * from VENTAS_RECIDENCIAL WHERE FEC_ING BETWEEN '$fecini' AND '$ffinal' ");

printf("

<p>MOSTRANDO REGISTROS DESDE $fecini HASTA $ffinal</p>

");

}
else{
								
								
								$resultr=mysql_query("select * from VENTAS_RECIDENCIAL order by FEC_ING DESC ");
								
}
								while($rowr=mysql_fetch_array($resultr)){
									$id=$rowr['id'];
									$supervisor=$rowr['COD_SUPERVISOR'];
									$fein=$rowr['FEC_ING'];
									$fesis=$rowr['FEC_SISTEMA'];
									$codven=$rowr['COD_VENDEDOR'];
									$nomven=$rowr['VEND_ATIS'];
									$cliente=$rowr['CLIENTE'];
									$dni=$rowr['DNI'];
									$direccion=$rowr['DIRECCION'];
									$distrito=$rowr['DISTRITO'];
									$telu=$rowr['TELECONT1'];
									$teld=$rowr['TELECONT2'];
									$pro=$rowr['PRODUCTO_SOLICITA'];
									$desc=$rowr['DESCRIPCION_PAQUETE'];
									$renta=$rowr['RENTA_FINAL'];
									$comision=$rowr['COMISION'];
									$com=number_format($comision, 2, '.', '');
									$retencion=$rowr['RETENCION'];
									$ret=number_format($retencion, 2, '.', '');
									$total=$rowr['TOTAL'];
									$to=number_format($total, 2, '.', '');
									$fpago=$rowr['FECHA_PAGO'];
									$reci=$rowr['RECIBO1'];
									$recid=$rowr['RECIBO2'];
									$estados=$rowr['ESTADOS'];
									$motivos=$rowr['MOTIVOS'];
									
									$comi=$comi+$comision;
									$rete=$rete+$retencion;
									$tot=$tot+$total;
									
									$c=0;
									
								
										
									
									printf("
									
									
									 <tr>
                                        <td>$cuenta</td>
                                      
                                        <td>$nomven</td>
										<td>$estados</td>
										<td>$motivos</td>
										<td>$fein</td>
                                        <td align='right'>$com</td>
                                        <td align='right'>$ret</td>
                                         <td align='right'>$to</td>
                                        
                                            <td align='center'><a href='' class='fa fa-search btn btn-info' data-toggle='modal' data-target='#myModal$cuenta'> Detalles</a>
											
													
			
						
											
											</td>
											
											
											 <!-- Modal -->
						<div class='modal fade' id='myModal$cuenta' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						  <div class='modal-dialog'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						        <h4 class='modal-title' id='myModalLabel'> DETALLES</h4>
						      </div>
						      <div class='modal-body'>
						      
                              <form action='insertar/registro.php' method='post' enctype='multipart/form-data'>
                              
                             
                              
                                <p>NOMBRE DEL VENDEDOR QUE REALIZO LA VENTA</p> 
								                     
                               <input type='disabled'  class='form-control' value='$nomven' readonly disabled>   
                               
                             
							  
							  <p></p>
							   <p>FECHA REAL DE REGISTRO</p>
                               <input id='date' type='text' name='FEC_ING' class='form-control'  value='$fein' readonly>   
                               
                              <p></p>
                           
                              <P>CLIENTE</P>
                               <input name='VEND_ATIS' type='text' required class='form-control'  value='$cliente' readonly>
                              <p></p>
                              <P>DNI</P>
                               <input name='COD_VENDEDOR' type='text' required class='form-control'  value='$dni' readonly >
                            <p></p>
                          
                              <P>DISTRITO</P>
                               <input name='CLIENTE' type='text' required class='form-control'  value='$distrito' readonly >
                              <p></p>
                              <P>TELECONT1</P>
                               <input name='DNI' type='text' required class='form-control'  value='$telu' readonly >
                              <p></p>
                       
                                 <P>PRODUCTO</P> 
                               <input name='TELECONT1' type='text' required class='form-control'  value='$pro' readonly>
                              <p></p>
                         
                               <P>RENTA FINAL</P>
                              <input name='TELECONT2' type='text' required class='form-control' value='$renta' readonly >
                              <p></p>
                               <P>COMISION</P>
                              <input name='TELECONT2' type='text' required class='form-control' value='$comision' readonly >
                              <p></p>
                               <P>RETENCION</P>
                              <input name='TELECONT2' type='text' required class='form-control' value='$retencion' readonly >
                              <p></p>
                               <P>TOTAL</P>
                              <input name='TELECONT2' type='text' required class='form-control'  value='$total' readonly >
                              <p></p>
                               <P>FECHA PAGO</P>
                              <input name='TELECONT2' type='text' required class='form-control'  value='$fpago' readonly >
                              <p></p>
							  <P>ESTADOS</P>
                              <input name='TELECONT2' type='text' required class='form-control'  value='$estados' readonly >
                              <p></p>
							  <P>MOTIVOS</P>
                              <input name='TELECONT2' type='text' required class='form-control'  value='$motivos' readonly >
                              <p></p>
                             
                              
                          
                              
                              
                                              
                          
						      </div>
						      <div class='modal-footer'>
						        <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
		
                               
                                
                                </form>
						      </div>
						    </div>
						  </div>
						</div>  
                        <!--modal-->	
											
											
                                    </tr>
                                    
									
									
									");
									
									$cuenta++;
									
								}
								
							
								
								?>
                                
                                
                                    <tr align="right">
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                        <th></th>
                                        <th></th>
                                        <td align="rigth"><strong><?php   echo  number_format($comi, 2, '.', '');  ?></strong></td>
                                        <td align="right"><strong><?php   echo  number_format($rete, 2, '.', '');  ?></strong></td>
                                        <td align="right"><strong><?php   echo  number_format($tot, 2, '.', '');  ?></strong></td>
                                      
                                         <td></td>
                                    </tr>
                                   
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