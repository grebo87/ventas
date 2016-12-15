<?php

error_reporting(1);
ini_set('display_errors', '1');
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
      <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
      <script src="complementos/jquery.maskedinput.js" type="text/javascript"></script>

      
      <script>
jQuery(function($){
   $("#date").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date2").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date3").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date4").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date5").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date6").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date7").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date8").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date9").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date10").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date11").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date12").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date13").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#datec").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date14").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date15").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
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
                
               <!--  <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
						  Nuevo Registro
						</button>  -->
                        
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
						      
                              <form action='registro.php' method='post' enctype='multipart/form-data'>
                              
                              
                             
                             <p>FILTRAR</p>
                             <select name="filtro" class="form-control">
                             <option value="1">SIN FILTRO</option>
                             <option>DNI</option>
                             <option>TELEFONO1</option>
                             <option>TELEFONO2</option>
                             <option>ORDEN_TRABAJO_OT_CONTRATA</option>
                             <option>EXPEDIENTE</option>
                         
                             </select>
                             <p></p>
                             <input type="text" class="form-control" name="campo">
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
                                      <th>VENDEDOR</th>
                                        <th>CLIENTE</th>
                                        <th>ESTADOS</th>
                                      
                                         <th align="center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
								<?php
								
								$cuenta=1;
								
								
								$filtro=$_POST['filtro'];
								
								
								if($filtro == "1"){
									
									$fecini=$_POST['fechaini'];
								$ffinal=$_POST['fechafinal'];
									
									$resultr=mysql_query("select * from VENTAS_RECIDENCIAL WHERE FEC_ING between '$fecini' and '$ffinal'");
										$fecini=$_POST['fechaini'];
								$ffinal=$_POST['fechafinal'];
									printf("<h2><strong>FILTRO:</strong> ENTRE $fecini Y $ffinal </h2>");
									}
									
									else{
								
									$fecini=$_POST['fechaini'];
								$ffinal=$_POST['fechafinal'];
								
								
									$campo=$_POST['campo'];
								printf("<h2><strong>FILTRO:</strong> $filtro ENTRE $fecini Y $ffinal </h2>");
								
							
								
								$resultr=mysql_query("select * from VENTAS_RECIDENCIAL WHERE $filtro = '$campo' AND FEC_ING between '$fecini' and '$ffinal'");
								
									};
								
								
								
								//$resultr=mysql_query("select * from VENTAS_RECIDENCIAL");
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
									
									$esreci1=$rowr['estado_recibo1'];
									$MONTOA=$rowr['Monto_recibo1'];
									$FEVEN1=$rowr['Fecha_vence_recibo1'];
									$ES2=$rowr['estado_recibo2'];
									$MONO=$rowr['Monto_recibo2'];
									$FEVENR=$rowr['Fecha_vence_recibo1'];
									
									
									$c=0;
									
								
										
									
									printf("
									
									
									 <tr>
                                        <td>$cuenta</td>
                                        
                                        <td>$fein</td>
                                        <td>$fesis</td>
                                        <td>$codven</td>
										<td>$cliente</td>
                                         <td>$ESTADOS</td>
                                        
                                            <td align='center'><a data-toggle='modal' data-target='#myModal1$cuenta' class='btn btn-info'>1</a> <a  class='btn btn-success' data-toggle='modal' data-target='#myModal2$cuenta'> 2</a> 
											
																
						
						
						
						
											
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
                                  <select name="PRODUCTO_SOLICITA" class="form-control">
                                  <option><?php  echo $PRODUCTO_ORIGEN ?></option>
                              <?php
							  $resultpr=mysql_query("SELECT * FROM CATALOGO order by DESCR_PROD");
							  while($rowpr=mysql_fetch_array($resultpr)){
								  $codpro=$rowpr['COD_PROD'];
								  $desc=utf8_encode($rowpr['DESCR_PROD']);
                  //$desc=$rowpr['DESCR_PROD'];
								 
								  
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
                  //$desc= $rowpr['DESCR_PROD'];
                  
								 
								  
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
						
						
						
						 <!-- Modal -->
						<div class='modal fade' id='myModal2$cuenta' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						  <div class='modal-dialog'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						        <h4 class='modal-title' id='myModalLabel'> DETALLES 2</h4>
						      </div>
						      <div class='modal-body'>
						      
                              <form action='actualizar/registro2.php?numid=$idven' method='post' enctype='multipart/form-data'>
                              
							    <p>SEG VEND</p>
							   <input name='SEG_VEND' type='text'   class='form-control'  value='$SEGVEND' maxlength='20' readonly>
							   <p>TRATAMIENTO</p>
							   <input name='TRATAMIENTO' type='text'   class='form-control'   value='$TRATAMIENTO'  maxlength='20'>
							    <p>PERMUTACION</p>
							   <input name='PERMUTACION' type='text'   class='form-control'   value='$PERMUTACION'  maxlength='10'>
							  							   <p>RENTA INICIAL</p>
							   <input name='RENTA_INICIAL' type='number'   class='form-control'   value='$RENTA_INICIAL'  maxlength='20'>
							   <!--<p>PRODUCTO_SOLICITA</p>
							   <input name='PRODUCTO_SOLICITA' type='text'   class='form-control'   value='$PRODUCTO_SOLICITA'>
							    <p>DESCRIPCION PAQUETE</p>
							   <input name='DESCRIPCION_PAQUETE' type='text'   class='form-control'   value='$DESCRIPCION_PAQUETE'>-->
							   <p>RENTA FINAL</p>
							   <input name='RENTA_FINAL' type='number'   class='form-control'   value='$RENTA_FINAL'>
							      <p>TROBA</p>
							   <input name='TROBA' type='text'   class='form-control'   value='$TROBA' maxlength='10'>
							   <p>ORDEN TRABAJO OT CONTRATA</p>
							   <input name='ORDEN_TRABAJO_OT_CONTRATA' type='text'   class='form-control'   value='$ORDEN_TRABAJO_OT_CONTRATA'  maxlength='10'>
							   <p>EXPEDIENTE</p>
							   <input name='EXPEDIENTE' type='text'   class='form-control'   value='$EXPEDIENTE'  maxlength='10'>
							   <p>PEDIDO</p>
							   <input name='PEDIDO' type='text'   class='form-control'   value='$PEDIDO'  maxlength='15'>
							   <p>INSCRIPCION</p>
							   <input name='INSCRIPCION' type='text'   class='form-control'   value='$INSCRIPCION'>
							   <p>TELE ASIG COD CLIENTE</p>
							   <input name='TELE_ASIG_COD_CLIENTE' type='text'   class='form-control'   value='$TELE_ASIG_COD_CLIENTE'>
                              <p>FECHA INSCRIP</p>
							   <input id='date5$cuenta' name='FECHA_INSCRIP' type='text'   class='form-control'   value='$FECHA_INSCRIP'>
							  						   
							   <p>FECHA ORDEN</p>
							   <input id='date4$cuenta' name='FECHA_ORDEN' type='text'   class='form-control'   value='$FECHA_ORDEN'>
							    <p>FECHA INST</p>
							   <input id='date5$cuenta' name='FECHA_INST' type='text'   class='form-control'   value='$FECHA_INST'>
							   <p>FECHA CANCEL</p>
							   <input id='datec$cuenta' name='FECHA_CANCEL' type='text'   class='form-control'   value='$FECHA_CANCEL'>
							   <p></p>
							     <p>ESTADOS</p>
							   ");
							   ?>
                               <select name="ESTADOS" class="form-control">
                               <option>SELECCIONE...</option>
                               <?php  
							   $reest=mysql_query("select * from ESTADOS");
							   while($rowes=mysql_fetch_array($reest)){
							   
							   $codestado=$rowes['COD_ESTADO'];
							   $descestado=$rowes['DESCR_ESTADO'];
							   printf("<option>$descestado</option>");
							   
							   }
							   
							   
							   ?>
                               
                               <script>
jQuery(function($){
   $("#date<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date2<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date3<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date4<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date5<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date6<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date7<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date8<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date9<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date10<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date11<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date12<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#date13<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   $("#datec<?php  echo $cuenta   ?>").mask("9999-99-99",{placeholder:"YYYY-MM-DD"});
   
   $("#phone").mask("(999) 999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");
});
</script>
                               
                               
                               </select>
                               
                               <P></P>
                               <p>MOTIVOS</p>
                                <select name="MOTIVOS" class="form-control">
                               <option>SELECCIONE...</option>
                               <?php  
							   $reest=mysql_query("select * from MOTIVOS");
							   while($rowes=mysql_fetch_array($reest)){
							   
							   $codemov=$rowes['COD_MOTIVO'];
							   $descmov=$rowes['DESCR_MOTIVO'];
							   printf("<option>$descmov</option>");
							   
							   }
							   
							   
							   ?>
                               
                               
                               </select>
                               
                               <?php
							   
							   printf("
							   
							   
							  
							   
							   
							    <p>OBSERVACION</p>
							   <input name='OBSERVACION' type='text'   class='form-control'   value='$OBSERVACION'  maxlength='500'>
							    <p>OBSERVACION BACK Y CONVER</p>
							   <input name='OBSERVACION_BACK_Y_CONVER' type='text'   class='form-control'   value='$OBSERVACION_BACK_Y_CONVER'  maxlength='500'>
							     <p>CODIGO EXPERTO</p>
							   <input name='CODIGO_EXPERTO' type='text'   class='form-control'   value='$CODIGO_EXPERTO'  maxlength='10'>
							   <p>FECHA CALIDAD</p>
							   <input id='date12$cuenta' name='FECHA_CALIDAD' type='text'   class='form-control'   value='$FECHA_CALIDAD'>
							   <p>ESTADO CALIDAD</p>
							   <input name='ESTADO_CALIDAD' type='text'   class='form-control'   value='$ESTADO_CALIDAD'  maxlength='15'>
							   <p>CALIDAD</p>
							   <input name='CALIDAD' type='text'   class='form-control'   value='$CALIDAD'  maxlength='200'>
							   <p>DETALLE</p>
							   <input name='DETALLE' type='text'   class='form-control'   value='$DETALLE' maxlength='200'>
							   <p>RECIBO1</p>
							   <input name='RECIBO1' type='text'   class='form-control'   value='$RECIBO1'  maxlength='15'>
							   <p>RECIBO2</p>
							   <input name='RECIBO2' type='text'   class='form-control'   value='$RECIBO2'  maxlength='15'>
							   <p>Fecha Devol</p>
							   <input id='date13$cuenta' name='Fecha_Devol' type='text'   class='form-control'   value='$Fecha_Devol'>
							   <p>DSPRODUCTO</p>
							   <input name='DSPRODUCTO' type='text'   class='form-control'   value='$DSPRODUCTO'  maxlength='100'>
							   <p>DSOBSERVACION</p>
							   <input name='DSOBSERVACION' type='text'   class='form-control'   value='$DSOBSERVACION' maxlength='150'>
							   <p>nuPenalidad</p>
							   <input name='nuPenalidad' type='text'   class='form-control'   value='$nuPenalidad'>
							   <p>dsEstadoGestion</p>
							   <input name='dsEstadoGestion' type='text'   class='form-control'   value='$dsEstadoGestion'  maxlength='15'>
							
								 <p></p>
                              
							
									
							  
							  
                                 <p>Estado Recibo 1</p>
                               <select name='estado_recibo1' class='form-control'>
							   <option>$esreci1</option>
                             <option>MOROSO</option>
                             <OPTION>AL DIA</OPTION>
                             <option>NO EMITIDA</option>
                             </select>
                              
                            <p></p>
                            
							
							
									
								
							
							
							
                            <p>MONTO RECIBO 1</p>
                              <input type='number' name='Monto_recibo1' class='form-control' value='$MONTOA'>
                              <p></p>
                              <p>FECHA VENCIMIENTO RECIBO 1 </p>
                               <input id='date' type='text' name='Fecha_vence_recibo1' class='form-control'   value='$FEVEN1'>
                               <P></P>
                              <p>Estado Recibo 2</p>
                               <select name='estado_recibo2' class='form-control'>
							   <option>$ES2</option>
                             <option>MOROSO</option>
                             <OPTION>AL DIA</OPTION>
                             <option>NO EMITIDA</option>
                             </select>
                              
                              <p></p>
                              <p>MONTO RECIBO 2</p>
                              <input type='number' name='Monto_recibo2' class='form-control' value='$MONO'>
                              <p></p>
                                <p>FECHA VENCIMIENTO RECIBO 2 </p>
                               <input id='date2' type='text' name='Fecha_vence_recibo1' class='form-control'  value='$FEVENR'>
                            
									
				
                            
                                              
                          
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
<?php
}else{ 
 
//header('Location: login.html');
echo "<script language='javascript'>window.location='login.html'</script>;";

}
?>