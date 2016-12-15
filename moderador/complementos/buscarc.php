<?php



  
      $buscar = $_POST['b'];
	  $c = $_GET['cuenta'];
        
      if(!empty($buscar)) {
            buscar($buscar);
			
      }
        
      function buscar($b) {
		  
		  		  session_start();
$user=$_SESSION['user'];

require 'credenciales.php';




		  

		  
            $con = mysql_connect('localhost','innovass_admnbd', 'JeNLD[B[5PDE');
            mysql_select_db('innovass_base', $con);
        
            $sql = mysql_query("SELECT * FROM ANEXO WHERE  ANEX_CODIGO = '$b' ",$con);
			

              
            $contar = @mysql_num_rows($sql);
              
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
				    $c=$_GET['cuenta'];
				   printf("
				 <script>
				  document.getElementById('busquedac$c').value='';
				    </script>
				  ");
            }else{
				
		
			
			
			
			$count=1;
              while($rowp=mysql_fetch_array($sql)){
				  $anex=$rowp['ANEX_CODIGO'];
               $nombre=$rowp['ANEX_DESCRIPCION'];
			  $c=$_GET['cuenta'];
								
				 printf("
								  
								
							      
								  <script>
								  
								 
								  document.getElementById('nameven2$c').value='$nombre';
								  
								  </script>
                            
								  
								  ");
             //   echo $prefijo." - "."<a>".$nombre."</a>"."<br />";
            }
			$count++;
        }
  }
 
	   printf("
	     </tbody>
                          </table>
						  </div>
	   ");
?>