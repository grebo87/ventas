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
$nombreuser=$rowser['nombre_us']." ".$rowser['apellido_us'];


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

 <link rel="stylesheet" type="text/css" href="complementos/jquery.datetimepicker.css"/>

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
                        
                        
                        
                         <a data-toggle="modal" data-target="#myModalfiltro" class="btn btn-info">FILTRAR</a>
                    
                    <!-- Modal -->
						<div class='modal fade' id='myModalfiltro' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						  <div class='modal-dialog'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						        <h4 class='modal-title' id='myModalLabel'> FILTRAR</h4>
						      </div>
						      <div class='modal-body'>
						      
                              <form action='registro.php?filtro=1' method='post' enctype='multipart/form-data'>
                              
                              
                            
                             <p></p>
                              <p>SELECCIONE FECHA INICIAL</p>
                             
                             <input name="fechaini" placeholder="Fecha Inicial" class="form-control" type="text" value="<?php  echo date("Y-m-d")  ?>" id="datetimepicker1"/>
                             
                              <P></P>
                             
                             <P>SELECCIONES FECHA FINAL</P>
                             
                              <input name="fechafinal" placeholder="Fecha Final" class="form-control" value="<?php  echo date("Y-m-d")  ?>" type="text" id="datetimepicker2"/>
                            
                             
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
                             
                               </form>
                             
                             <p></p>
                             
                                                     
                                     
                            
                              
                                               
                          
                              
                              
                                              
                          
						      </div>
						      <div class='modal-footer'>
						        <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
		
                               
                                
                              
						      </div>
						    </div>
						  </div>
						</div>  
                        <!--modal-->	
                        
                        
                        
                         <!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel"> Nuevo Registro</h4>
						      </div>
						      <div class="modal-body">
						      
                              <form id="form" action="insertar/registro.php" method="post" enctype="multipart/form-data">
                              
                            
                             
                              <?php
							  $resultsu=mysql_query("select * from ANEXO WHERE ANEXO_BREVE = '$user'");
							  $rowsu=mysql_fetch_array($resultsu);
							  
							  
							  ?>
                              <P>SUPERVISOR</P>
                              <input type="text" class="form-control" value="<?php echo $rowsu['ANEX_DESCRIPCION']   ?>" readonly>
                              <input name="COD_SUPERVISOR" type="hidden" required class="form-control" placeholder="SUPERVISOR" maxlength="11"  value="<?php   echo $rowsu['ANEX_CODIGO'] ?>"
                              <p></p>
                              <P>FECHA EN QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)</P>
                               <input id="date" type="text" name="FEC_ING" class="form-control" required placeholder="FECHA QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)">   
                               
                              <p></p>
                              
                                                     
                               <input id="date2" type="hidden" name="FEC_SISTEMA" class="form-control"  readonly  value="<?php  echo date("Y-m-d")   ?>">   
                               
                              <p></p>
                              
                             
                              <P>CODIGO DEL VENDEDOR QUE SE REGISTRO EN EL SISTEMA TELEFONICA</P>
                              <input autocomplete="off" id="busquedab" name="COD_ATIS" type="text" required class="form-control"  value="">  
                              
                               <div id="resultadob">
                                  
                             </div>
                              
                              
                               <script>




  $(document).ready(function(){
        var consultab;
        //hacemos focus al campo de búsqueda
        $("#busquedab").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#busquedab").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consultab = $("#busquedab").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "complementos/buscarb.php",
                    data: "b="+consultab,
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultadob").html("<p align='center'><img src='complementos/hourglass.gif'width='40' /></p>");
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                    $("#resultadob").empty();
                    $("#resultadob").append(data);                                                             
                    }
              });                                                                         
        });                                                     
});       


</script>
                              
                              
                              
                              
                              <p></p>
                              <P>NOMBRE DEL VENDEDOR</P>
                               <input name="VEND_ATIS" type="text" required class="form-control" readonly id="nameven" >
                              <p></p>
                              <P>CODIGO DEL VENDEDOR QUE REALIZO LA VENTA</P>
                               <input autocomplete="off" name="COD_VENDEDOR" id="busquedac" type="text" required class="form-control" placeholder="CODIGO DEL VENDEDOR QUE REALIZO LA VENTA" maxlength="22">
                               
                               <div id="resultadoc">
                                  
                             </div>
                               
                                <script>




  $(document).ready(function(){
        var consultac;
        //hacemos focus al campo de búsqueda
        $("#busquedac").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#busquedac").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consultac = $("#busquedac").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "complementos/buscarc.php",
                    data: "b="+consultac,
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultadoc").html("<p align='center'><img src='complementos/hourglass.gif'width='40' /></p>");
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                    $("#resultadoc").empty();
                    $("#resultadoc").append(data);                                                             
                    }
              });                                                                         
        });                                                     
});       


</script>
                                <p></p>
                              <P>NOMBRE DEL VENDEDOR QUE REALIZA LA VENTA</P>
                               <input name="VEND_ATIS2" type="text" required class="form-control" readonly id="nameven2" >
                            <p></p>
                            <P>CANAL DE REGISTRO</P>
                              <input name="CANAL_REGISTRO" type="text" required class="form-control" placeholder="CANAL REGISTRO" maxlength="15">
                              <p></p>
                              <P>CLIENTE</P>
                               <input name="CLIENTE" type="text" required class="form-control" placeholder="CLIENTE" maxlength="255">
                              <p></p>
                              <P>DNI</P>
                               <input name="DNI" type="number" required class="form-control" placeholder="DNI" maxlength="15">
                              <p></p>
                              <P>DIRECCION</P>
                               <input name="DIRECCION" type="text" required class="form-control" placeholder="DIRECCION" maxlength="200">
                              <p></p>
                              
                              <P>DISTRITO</P>
                              <select required name="DISTRITO" class="form-control">
                                    <option>Seleccione...</option>
                              <?php
							  $resultdi=mysql_query("SELECT  Codigo_General ,  NOMDIST FROM UBIGEO WHERE CODDPTO='14' AND CODPROV='01' order by NOMDIST");
							  while($rowdi=mysql_fetch_array($resultdi)){
								  $codgen=$rowdi['Codigo_General'];
								  $nomdis=$rowdi['NOMDIST'];
								  
								  printf("<option value='$codgen'>$nomdis</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                              
                              <p></p>
                              <P>TELEFONO 1</P>
                               <input name="TELECONT1" type="number" required class="form-control" placeholder="TELEFONO DE CONTACTO 1" maxlength="10">
                              <p></p>
                              <P>TELEFONO 2</P>
                              <input name="TELECONT2" type="number" class="form-control" placeholder="TELEFONO DE CONTACTO 2" maxlength="10">
                              <p></p>
                              <P>PRODUCTO ACTUAL</P>
                                  <select name="PRODUCTO_ORIGEN" class="form-control">
                                  <option>Seleccione...</option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO order by DESCR_PROD");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								  $desc=utf8_encode($rowpr['DESCR_PROD']);
								 
								  
								  printf("<option value='$codpro'>$desc</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                            <p></p>
                              <p></p>
                              <P>PRODUCTO SOLICITADO</P>
                                  <select required name="PRODUCTO_SOLICITA" class="form-control">
                                  <option>Seleccione...</option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO order by DESCR_PROD");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								    $desc=utf8_encode($rowpr['DESCR_PROD']);
								 
								  
								  printf("<option value='$codpro'>$desc</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              <p></p>
                           
                            
                              
                              
                                              
                          
						      </div>
						      <div class="modal-footer">
						        <button onClick="borrar()" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                
                                <script>
function borrar() {
    document.getElementById("form").reset();
}
</script>
		
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
                                        
                                        <th>FECHA VENTA</th>
                                        <th>FECHA REAL</th>
                                        <th>VENDEDOR</th
                                        ><th>CLIENTE</th>
                                      
                                         <th align="center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
								<?php
								
								$cuenta=1;
								
								$filtro=$_GET['filtro'];
								if($filtro == 1){
									
									$fecini=$_POST['fechaini'];
								$ffinal=$_POST['fechafinal'];
									
									$resultr=mysql_query("select * from VENTAS_RECIDENCIAL WHERE FEC_ING between '$fecini' and '$ffinal'");
										
									printf("<h2><strong>FILTRO:</strong> ENTRE $fecini Y $ffinal </h2>");
									}
									
									else{
								
								
								
								$resultr=mysql_query("select * from VENTAS_RECIDENCIAL");
								
									};
								while($rowr=mysql_fetch_array($resultr)){
									$idven=$rowr['NUM_ID'];
									$supervisor=$rowr['COD_SUPERVISOR'];
									$fein=$rowr['FEC_ING'];
									$fesis=$rowr['FEC_SISTEMA'];
									$codven=$rowr['COD_VENDEDOR'];
									
									$resultven=mysql_query("select * from ANEXO where ANEX_CODIGO = '$codven'");
									$rowven=mysql_fetch_array($resultven);
									
									$canal=$rowr['CANAL_REGISTRO'];
									$nomven=$rowven['ANEX_DESCRIPCION'];
									$cliente=$rowr['CLIENTE'];
									$dni=$rowr['DNI'];
									$direccion=$rowr['DIRECCION'];
									$distrito=$rowr['DISTRITO'];
									
									$resultdis=mysql_query("select * from UBIGEO where Codigo_General = '$distrito'");
									$rowdis=mysql_fetch_array($resultdis);
									
									$distritod=$rowdis['NOMDIST'];
									$telu=$rowr['TELECONT1'];
									$teld=$rowr['TELECONT2'];
									$pro=$rowr['PRODUCTO_SOLICITA'];
									$desc=$rowr['DESCRIPCION_PAQUETE'];
									$renta=$rowr['RENTA_FINAL'];
									$comision=$rowr['COMISION'];
									$comision=number_format($comisionL, 2, '.', '');
									$retencion=$rowr['RETENCION'];
									$retencion=number_format($retencion, 2, '.', '');
									$total=$rowr['TOTAL'];
									$total=number_format($total, 2, '.', '');
									$fpago=$rowr['FECHA_PAGO'];
									$reci=$rowr['RECIBO1'];
									$recid=$rowr['RECIBO2'];
									$atis=$rowr['COD_ATIS'];
									
									if($fpago=='0000-00-00'){
										$fpago="YYYY-MM-DD";
										};
									
									
									
									//SEGUNDOS CAMPOS
									$SEGVEND="RESIDENCIAL";
									$TRATAMIENTO=$rowr['TRATAMIENTO'];
									$PERMUTACION=$rowr['PERMUTACION'];
									$PRODUCTO_ORIGEN=$rowr['PRODUCTO_ORIGEN'];
									
									$RENTA_INICIAL=$rowr['RENTA_INICIAL'];
									$RENTA_INICIAL=number_format($RENTA_INICIAL, 2, '.', '');
									$PRODUCTO_SOLICITA=$rowr['PRODUCTO_SOLICITA'];
									$DESCRIPCION_PAQUETE=$rowr['DESCRIPCION_PAQUETE'];
									$RENTA_FINAL=$rowr['RENTA_FINAL'];
									$RENTA_FINAL=number_format($RENTA_FINAL, 2, '.', '');
									
									$TROBA=$rowr['TROBA'];
									$ORDEN_TRABAJO_OT_CONTRATA=$rowr['ORDEN_TRABAJO_OT_CONTRATA'];
									$EXPEDIENTE=$rowr['EXPEDIENTE'];
									$PEDIDO=$rowr['PEDIDO'];
									$INSCRIPCION=$rowr['INSCRIPCION'];
									$TELE_ASIG_COD_CLIENTE =$rowr['TELE_ASIG_COD_CLIENTE'];
									$FECHA_INSCRIP=$rowr['FINSCRIP'];
									if($FECHA_INSCRIP=='0000-00-00'){
										$FECHA_INSCRIP="YYYY-MM-DD";
										};
									$FECHA_ORDEN=$rowr['FECHA_ORDEN'];
									if($FECHA_ORDEN=='0000-00-00'){
										$FECHA_ORDEN="YYYY-MM-DD";
										};
									$FECHA_INST=$rowr['FECHA_INST'];
									if($FECHA_INST=='0000-00-00'){
										$FECHA_INST="YYYY-MM-DD";
										};
									$FECHA_CANCEL=$rowr['FECHA_CANCEL'];
									if($FECHA_CANCEL=='0000-00-00'){
										$FECHA_CANCEL="YYYY-MM-DD";
										};
									$ESTADOS=$rowr['ESTADOS'];
									$MOTIVOS=$rowr['MOTIVOS'];
									$OBSERVACION=$rowr['OBSERVACION'];
									$OBSERVACION_BACK_Y_CONVER=$rowr['OBSERVACION_BACK_Y_CONVER'];
									$CODIGO_EXPERTO=$rowr['CODIGO_EXPERTO'];
									$FECHA_CALIDAD=$rowr['FECHA_CALIDAD'];
									if($FECHA_CALIDAD=='0000-00-00'){
										$FECHA_CALIDAD="YYYY-MM-DD";
										};
									$ESTADO_CALIDAD=$rowr['ESTADO_CALIDAD'];
									$CALIDAD=$rowr['CALIDAD'];
									$DETALLE=$rowr['DETALLE'];
									$RECIBO1=$rowr['RECIBO1'];
									$RECIBO2=$rowr['RECIBO2'];
									$Fecha_Devol=$rowr['Fecha_Devol'];
									if($Fecha_Devol=='0000-00-00'){
										$Fecha_Devol="YYYY-MM-DD";
										};
									$DSPRODUCTO=$rowr['DSPRODUCTO'];
									$DSOBSERVACION=$rowr['DSOBSERVACION'];
									$nuPenalidad=$rowr['nuPenalidad'];
									$dsEstadoGestion=$rowr['dsEstadoGestion'];
									$estado_import =$rowr['estado_import'];
									
									$c=0;
									
										
									
									printf("
									
									
									 <tr>
                                        <td>$cuenta</td>
                                      
                                        <td>$fein</td>
                                        <td>$fesis</td>
                                        <td>$nomven</td>
                                         <td>$cliente</td>
                                        
                                            <td align='center'> <a data-toggle='modal' data-target='#myModal1$cuenta'  class='fa fa-edit btn btn-success'></a>
											
																
						
						
						
						
											
											</td>
											
											
											
											
											 <!-- Modal -->
						<div class='modal fade' id='myModal1$cuenta' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						  <div class='modal-dialog'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						        <h4 class='modal-title' id='myModalLabel'> DETALLES</h4>
						      </div>
						      <div class='modal-body'>
						      
                              <form action='actualizar/registro.php?numid=$idven' method='post' enctype='multipart/form-data'>
                              
							    <p>SUPERVISOR</p>
								<input  type='text' class='form-control' placeholder='SUPERVISOR' maxlength='11' value='$nomven' readonly>
								
							   <input name='COD_SUPERVISOR' type='hidden' required class='form-control' placeholder='SUPERVISOR' maxlength='11' value='$supervisor'>
                              
                              
                           <P>FECHA EN QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)</P>
                               <input id='date10' type='text' name='FEC_ING' class='form-control' required VALUE='$fein' placeholder='FECHA QUE EL SUPERVISOR INDICA LA VENTA (YYYY-MM-DD)'>   
                              <p></p>
                             
                               <input id='date11' type='hidden' name='FEC_SISTEMA' class='form-control'  value='$fesis'>   
                               
                              <p></p>
							  
							   <P>CODIGO DEL VENDEDOR QUE SE REGISTRO EN EL SISTEMA TELEFONICA</P>
                              
							  
                              <p></p>
							  
							  <input onBlur='validata$cuenta()' autocomplete='off' id='busquedab$cuenta' name='COD_ATIS' type='text' required class='form-control'  value='$atis'>  
							  
							  ")  ?>
							  
							   
                              
                               <div id="resultadob<?php  echo $cuenta   ?>">
                                  
                             </div>
                              
                              
                               <script>




  $(document).ready(function(){
        var consultab<?php  echo $cuenta   ?>;
        //hacemos focus al campo de búsqueda
        $("#busquedab<?php  echo $cuenta   ?>").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#busquedab<?php  echo $cuenta   ?>").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consultab<?php  echo $cuenta   ?> = $("#busquedab<?php  echo $cuenta   ?>").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "complementos/buscarb.php?cuenta=<?php  echo $cuenta   ?>",
                    data: "b="+consultab<?php  echo $cuenta   ?>,
					
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultadob<?php  echo $cuenta   ?>").html("<p align='center'><img src='complementos/hourglass.gif'width='40' /></p>");
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                    $("#resultadob<?php  echo $cuenta   ?>").empty();
                    $("#resultadob<?php  echo $cuenta   ?>").append(data);                                                             
                    }
              });                                                                         
        });                                                     
});       


</script>

<script>
function validata<?php   echo $cuenta ?>(){
	var bus= document.getElementById("busquedab<?php   echo $cuenta ?>").value;
	
	if(bus == ''){
		
		document.getElementById("nameven<?php   echo $cuenta ?>").value="";
		
		
	};
	
	
	
}




</script>
                     
							  
							  <?php
							  
							  printf("
							   <p>NOMBRE DEL VENDEDOR</p>
                              <input  name='VEND_ATIS' type='text' required class='form-control'  value='$nomven' readonly id='nameven$cuenta'>
							
                              <p></p>
                              
                                <p>CODIGO DEL VENDEDOR QUE REALIZO LA VENTA</p>                      
                               <input onBlur='validatad$cuenta()'  type='text' id='busquedac$cuenta' autocomplete='off' name='COD_ATIS' class='form-control' value='$codven' >   
                               
                              <p></p> ")  ?>
                              
                            
                               
                               <div id="resultadoc<?php  echo $cuenta   ?>">
                                  
                             </div>
                               
                                <script>




  $(document).ready(function(){
        var consultac<?php  echo $cuenta   ?>;
        //hacemos focus al campo de búsqueda
        $("#busquedac<?php  echo $cuenta   ?>").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#busquedac<?php  echo $cuenta   ?>").keyup(function(e){
                                      
              //obtenemos el texto introducido en el campo de búsqueda
              consultac<?php  echo $cuenta   ?> = $("#busquedac<?php  echo $cuenta   ?>").val();
              //hace la búsqueda                                                                                  
              $.ajax({
                    type: "POST",
                    url: "complementos/buscarc.php?cuenta=<?php  echo $cuenta   ?>",
                    data: "b="+consultac<?php  echo $cuenta   ?>,
                    dataType: "html",
                    beforeSend: function(){
                    //imagen de carga
                    $("#resultadoc<?php  echo $cuenta   ?>").html("<p align='center'><img src='complementos/hourglass.gif'width='40' /></p>");
                    },
                    error: function(){
                    alert("error petición ajax");
                    },
                    success: function(data){                                                    
                    $("#resultadoc<?php  echo $cuenta   ?>").empty();
                    $("#resultadoc<?php  echo $cuenta   ?>").append(data);                                                             
                    }
              });                                                                         
        });                                                     
});       


</script>
                    
                    
                    <script>
function validatad<?php   echo $cuenta ?>(){
	var bus= document.getElementById("busquedac<?php   echo $cuenta ?>").value;
	
	if(bus == ''){
		
		document.getElementById("nameven2<?php   echo $cuenta ?>").value="";
		
		
	};
	
	
	
}




</script>           
                              
                              
                              
                              <?php
							  
							  printf("
							  
							   <p></p>
                              <P>NOMBRE DEL VENDEDOR QUE REALIZA LA VENTA</P>
                               <input name='VEND_ATIS2' type='text' required class='form-control' value='$nomven' readonly id='nameven2$cuenta' >
                                
                            <P>CANAL DE REGISTRO</P>
                              <input name='CANAL_REGISTRO' type='text' required class='form-control' placeholder='CANAL REGISTRO' value='$canal' maxlength='15'>
                              <p></p>
                             
                             
                              <P>CLIENTE</P>
                               <input name='CLIENTE' type='text' required class='form-control'  value='$cliente' maxlength='255'>
                              <p></p>
                              <P>DNI</P>
                               <input name='DNI' type='text' required class='form-control'  value='$dni'  maxlength='15' >
                            <p></p>
                            <P>DIRECCION</P>
                              <input name='DIRECCION' type='text' required class='form-control'  value='$direccion'  maxlength='200' >
                             ");
							 
							 ?>
                         
						  <P>DISTRITO</P>
                              <select name="DISTRITO" class="form-control">
                                    <option value="<?php  echo $distrito  ?>"><?php    echo $distritod ?></option>
                              <?php
							  $resultdi=mysql_query("SELECT  Codigo_General ,  NOMDIST FROM UBIGEO WHERE CODDPTO='14' AND CODPROV='01' order by NOMDIST");
							  while($rowdi=mysql_fetch_array($resultdi)){
								  $codgen=$rowdi['Codigo_General'];
								  $nomdis=$rowdi['NOMDIST'];
								  
								  printf("<option value='$codgen'>$nomdis</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                              
                              <p></p>
                              <P>TELECONT1</P>
                                 <input name="TELECONT1" type="text" required class="form-control" placeholder="TELEFONO DE CONTACTO 1" maxlength="10" value="<?php  echo $telu  ?>">
                              
                              <?php
						 
						 printf("
                              
							   
							   
							   
                              <p></p>
                              <P>TELECONT2</P>
                               <input name='TELECONT2' type='text' required class='form-control'  value='$teld' maxlength='10' >
                              <p></p>
							  
							  ");
							  ?>
							  <p></p>
                             
                              <p></p>
							   <P>PRODUCTO ACTUAL</P>
                                  <select name="PRODUCTO_ORIGEN" class="form-control">
                                  <option><?php  echo $PRODUCTO_ORIGEN ?></option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO order by DESCR_PROD");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								  $desc=utf8_encode($rowpr['DESCR_PROD']);
								 
								  
								  printf("<option value='$codpro' >$desc</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                              
                               <P>PRODUCTO SOLICITADO</P>
                                  <select name="PRODUCTO_SOLICITA" class="form-control">
                                  <option><?php  echo $pro  ?></option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO order by DESCR_PROD");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								  $desc=utf8_encode($rowpr['DESCR_PROD']);
								 
								  
								  printf("<option value='$codpro' >$desc</option>");
								  
								  
							  }
							  ?>
                              
                              
                              </select>
                              
                              
                              <?php
							  
							  printf("
                             
                            
                                              
                          
						      </div>
						      <div class='modal-footer'>
							   <input class='btn btn-info' name='Guardar' type='submit' value='Guardar'>
							  
						           <a href='registro.php' class='btn btn-default'>Cancelar</a>
		
                               
                                
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