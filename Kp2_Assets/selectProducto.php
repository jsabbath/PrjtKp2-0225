<?php  

 $connect = mysqli_connect("localhost", "root", "", "db_tiendakupidos");  
 //$connect = mysqli_connect("dbtiendakupidos.db.9941338.hostedresource.com", "dbtiendakupidos", "kupiDos@devH12", "dbtiendakupidos");

 //Autor: Héctor Vivanco - Fecha: 27/02/2017
 //Permite listar los productos en orden y paginado
 //INI-MODIFICACION-1
  if(!empty($_GET['page'])){ 
		$Paginacion = $_GET['page'];
		$pag = $_GET['page'];
		$pag = ($pag-1)*12;
	}else{ 
		$Paginacion = 1;
	    $pag = 0; 
	}
 $output = '';  
 $sql = "SELECT * FROM tbproducto ORDER BY id ASC limit ".$pag." , 12";  
 $result = mysqli_query($connect, $sql);

 $SqlContador = "SELECT count(*) FROM tbproducto";
 $ResultadoContador = mysqli_query($connect, $SqlContador);
 if(mysqli_num_rows($ResultadoContador) > 0)  
 {  
      while($row = mysqli_fetch_array($ResultadoContador))  
      {
      		$CantidadProductos = $row[0];
      }
 } 
 $ResultadoPaginas = $CantidadProductos / 12;
 $CantidadPaginas = floor($ResultadoPaginas);
 $RestoProductos = $CantidadProductos / 12;
 if($RestoProductos > 0)
 	$CantidadPaginas = $CantidadPaginas + 1;
 //FIN-MODIFICACION-1

 $output .= ' ';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="adminkupi2/kupidos2/uploads/'.$row["nvchimg"].'" alt="Card image cap">
                  <div class="card-block">
                    <span class="tag tag-danger">S/. '.$row["nvchprecio"].'</span>
                    <h6 class="card-title">'.$row["nvchname"].'</h6>
                    <!--p class="card-text"><small class="text-muted">'.$row["nvchfecha"].'</small></p-->

                    <!--Buton abre el modal de imagen-->
					<button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#'.$row["id"].'">
						Ver Detalles
					</button>
					<div class="fb-like" data-href="https://www.kupi2.com/product/'.$row["id"].'" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                  </div>

				<!--Modal que recibe parametro id con la imagen-->
				<div id="'.$row["id"].'" class="modal fade bd-example-modal-lg" tabindex="-1" width="900" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					        <h5 class="modal-title">'.$row["nvchname"].' - S/.'.$row["nvchprecio"].'</h5>
				      	</div>
					    <div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col-md-5">
							            <img src="adminkupi2/kupidos2/uploads/'.$row["nvchimg"].'" class="" width="400">
							            <p class="card-text" style="text-align:left">
							            	<small><strong>Descripción: </strong></small><br>
							            	<small>'.$row["nvchdescripcion"].'</small>
							            </p>
							            <small style="text-align:left">
								            <div class="alert alert-danger alert-dismissible fade in" role="alert">
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
											  </button>
											  <strong>Importante!</strong> Haz tu pedido dos dias antes.
											</div>
							            </small>
									</div>
									<div class="col-md-7">
										<div class="fb-comments" data-href="www.kupi2.com/product/'.$row["id"].'" data-numposts="3" width="auto">
										</div>
									</div>
								</div>
							</div>
						</div>
					    <!--div class="modal-footer">
					    	<button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">
					    		Cerrar
					    	</button>
					    </div-->
				    </div>
				  </div>
				</div>
				<!--END Modal que recibe parametro id con la imagen-->
                </div>
              </div>
           ';  
      }  
      $output .= '  
           <!--tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Agregar</button></td>  
           </tr-->  
      ';
 }  
 else  
 {  
      $output .= '
      	<div class="alert alert-danger" role="alert">
		  <strong>UPPS!!</strong> Aun no tenemos productos con esta categiria, pero aun tenemos mas categorías :).
		</div>
      ';  
 }  
 $output .= '
    </tbody>
    </table>  
      </div>
      <br>';  

 echo $output;
 //Autor: Héctor Vivanco - Fecha: 27/02/2017
 //Permite listar los productos en orden y paginado
 //INI-MODIFICACION-2
 echo '<br>';
      echo '<div class="container-fluid">
		<br>
		<nav>
			<ul class="pagination pagination-lg">';
				for($i = 1 ; $i <= $CantidadPaginas ;$i++)
				{
					if($i == 1)
					{
						if($Paginacion != 1)
						{
							echo '<li><a href="index.php?page='.($Paginacion-1).'">&laquo;</a></li>';
		               		echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
		               	}
			            else
			            { 
			            	echo '<li class="disabled"><a href="#">&laquo;</a></li>';
			                echo '<li class="active"><a href="#">'.$i.'</a></li>';
			            }
					}
					else
					{
						if($i == $CantidadPaginas)
						{
							if($Paginacion != $CantidadPaginas)
							{
			               		echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
			               		echo '<li><a href="index.php?page='.($Paginacion+1).'">&raquo;</a></li>';
			               	}
				            else
				            { 
				                echo '<li class="active"><a href="#">'.$i.'</a></li>';
				                echo '<li class="disabled"><a href="#">&raquo;</a></li>';
				            }
						}
						else
							echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
					}
				}
echo			'</ul>
		</nav>';
echo '<br>';
//FIN-MODIFICACION-2
 ?>