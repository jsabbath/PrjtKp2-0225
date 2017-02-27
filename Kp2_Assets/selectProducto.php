<?php  

 $connect = mysqli_connect("localhost", "root", "", "db_tiendakupidos");  
 //$connect = mysqli_connect("dbtiendakupidos.db.9941338.hostedresource.com", "dbtiendakupidos", "kupiDos@devH12", "dbtiendakupidos");  
 $output = '';  
 $sql = "SELECT * FROM tbproducto ORDER BY id ASC limit 12";  
 $result = mysqli_query($connect, $sql);  
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
                  </div>

				<!--Modal que recibe parametro id con la imagen-->
				<div id="'.$row["id"].'" class="modal fade bd-example-modal-lg" tabindex="-1" width="900" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
					    <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					        <h5 class="modal-title">
					        	'.$row["nvchname"].' - S/.'.$row["nvchprecio"].'
					        </h5>
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
							            <script>
										  (function(d, s, id) {
										    var js, fjs = d.getElementsByTagName(s)[0];
										    if (d.getElementById(id)) return;
										    js = d.createElement(s); js.id = id;
										    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
										    fjs.parentNode.insertBefore(js, fjs);
										  }(document, "script", "facebook-jssdk"));
										</script>
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
      </div>';  

 echo $output;  
 ?>

 	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1396296787079032";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>