  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Producto</li>
      </ol>
    </div><!--/.row-->


    <!--Requerido-->
    <div class="row" style="margin-top: 25px">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Formulario Productos</div>
          <div class="panel-body" style="margin-top: -40px">
            <h4 class="page-header">
                <?php echo $alm->__GET('id') != null ? $alm->__GET('nvchname') : 'Nuevo Registro'; ?>
            </h4>
            <ol class="breadcrumb">
              <li><a href="?c=Producto">producto</a></li>
              <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('nvchname') : 'Nuevo Registro'; ?></li>
            </ol>

            <form id="frm-alumno" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                
                <div class="row" style="margin: 20px">
                  <div class="col-lg-5">
                    <div class="form-group">
                        <label>Producto</label>
                        <input type="text" name="nvchname" value="<?php echo $alm->__GET('nvchname'); ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
                    </div>  
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="nvchprecio" value="<?php echo $alm->__GET('nvchprecio'); ?>" class="form-control" placeholder="Precio del producto" data-validacion-tipo="requerido|email" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label>Categoria</label>
                        <!--select persona-->
                        <select name="nvchcategoria" style='text-transform:uppercase' class="form-control" id="">
                          <?php
                             $connect = mysqli_connect("localhost", "root", "", "db_tiendakupidos");  
                             $output = '';  
                             $sql = "
                                SELECT
                                  tbcategoria.id,
                                  tbcategoria.nvchname as namecategoria
                                FROM
                                  tbcategoria";  
                             $result = mysqli_query($connect, $sql);  
                             $output .= '';  
                             if(mysqli_num_rows($result) > 0)  
                             {  
                                  while($row = mysqli_fetch_array($result))  
                                  {  
                                       $output .= "  
                                            <option value='".$row['id']."'>
                                                ".$row['namecategoria']."
                                            </option>
                                       ";  
                                  }  
                                  $output .= '  
                                       
                                  ';  
                             }  
                             else  
                             {  
                                  $output .= '
                                  ';  
                             }  
                             $output .= '';  
                             echo $output;  
                          ?> 
                        </select>
                    </div>
                  </div>                  
                </div>

                <div class="row" style="margin: 20px">
                  <div class="col-lg-8">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" name="nvchdescripcion" value="<?php echo $alm->__GET('nvchdescripcion'); ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:10" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                        <label>Fecha de Creación</label>
                        <!--input readonly type="date" name="nvchfecha" value="<?php echo $alm->__GET('nvchfecha'); ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" /-->
                        <input readonly type="hidden" name="nvchfecha" value="<?php echo $hoy; ?>" class="form-control datepicker" placeholder="Fecha de Creacion" data-validacion-tipo="requerido"/>

                        <p type="text" name="" id='demo2' name="nvchfecha" >
                        </p>
                           <script>
                              var myVar = setInterval(myTimer, 1000);

                              function myTimer() {
                                  var d = new Date();
                                  document.getElementById("demo2").innerHTML = d.getFullYear()+ "-" +(d.getMonth() +1)+ "-" + d.getDate()+' '+d.toLocaleTimeString();
                              }
                          </script>
                    </div>
                  </div>
                </div>
                
                <div class="row" style="margin: 20px">
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="hidden" name="nvchimg" value="<?php echo $alm->__GET('nvchimg'); ?>" />
                            <input type="file" name="nvchimg" placeholder="Ingrese una imagen" />
                        </div>     
                    </div>
                </div>
                <div class="row" style="margin: 20px">
                  <div class="col-xs-5">
                        <?php if($alm->__GET('nvchimg') != ''): ?>
                            <div class="img-thumbnail text-center">
                                <img src="uploads/<?php echo $alm->__GET('nvchimg'); ?>" style="width:50%;" />
                            </div>
                        <?php endif; ?>            
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>


    <script>
        $(document).ready(function(){
            $("#frm-alumno").submit(function(){
                return $(this).validate();
            });
        })
    </script>