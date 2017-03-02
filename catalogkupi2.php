<?php include 'Kp2_Assets/header.php'; ?>

    <!-- Portfolio Start -->
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="container">
                  <div class="card">
					<?php include_once('Kp2_Assets/categoriapanel.php'); ?>
                  </div>
                  <div class="card" id="SocialMediaFBKupidos">
                      <div id="fb-root"></div>
                      <div class="fb-page" data-href="https://www.facebook.com/Kupi2-104758876271450/" data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Kupi2-104758876271450/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Kupi2-104758876271450/">Kupi2</a></blockquote></div>
                  </div>
                </div>
              </div>

              <div class="col-md-9">
                <div class="block">
                  <div class="portfolio-contant">

                    <ul id="portfolio-contant-active">                  
                    <!--Alert temporal-->
                      <small style="text-align:left">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Importante!</strong> <br>
                            1.- Puedes ver más productos pulsando en la categoria correspondiente a tu busqueda. <br>
                            2.- Realiza tu pedido con anticipación y consigue ofertas... ;)
                          </div>
                      </small>
                    
<?php 
	//catalogkupi2.php
	$categorias = $_GET["categoria"];
	//echo "la categoria es: ".$categorias;

	//script sql
	 $connect = mysqli_connect("localhost", "root", "", "db_tiendakupidos");  
	 $output = '';  
	 $sql = "

	SELECT
	  tbproducto.id,
	  tbproducto.nvchname,
	  tbproducto.nvchdescripcion,
	  tbproducto.nvchprecio,
	  tbproducto.nvchimg,
	  tbproducto.nvchfecha
	FROM
	  tbproducto
	INNER JOIN
	  tbcategoria ON tbproducto.nvchcategoria = tbcategoria.id
	WHERE
	  tbcategoria.nvchname LIKE '%".$categorias."%'
	 ";  
	 $result = mysqli_query($connect, $sql);  
	 $output .= '';  
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
	      </div>';  
	 echo $output;  
 ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    </body>
</html>


<?php include 'Kp2_Assets/footer.php'; ?>
<script>
  $("#pop").on("click", function() {
     $("#imagepreview").attr("src", $("#imageresource").attr("src")); // here asign the image to the modal when the user click the enlarge link
     $("#imagemodal").modal("show"); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });

  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>