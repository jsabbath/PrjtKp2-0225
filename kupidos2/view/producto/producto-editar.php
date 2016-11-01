<?php //require_once('functionall.php');?>

<h1 class="page-header">
    <?php echo $alm->__GET('id') != null ? $alm->__GET('nvchname') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">producto</a></li>
  <li class="active"><?php echo $alm->__GET('id') != null ? $alm->__GET('nvchname') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
    
    <div class="form-group">
        <label>Producto</label>
        <input type="text" name="nvchname" value="<?php echo $alm->__GET('nvchname'); ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="nvchdescripcion" value="<?php echo $alm->__GET('nvchdescripcion'); ?>" class="form-control" placeholder="Ingrese Descripcion" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="nvchprecio" value="<?php echo $alm->__GET('nvchprecio'); ?>" class="form-control" placeholder="Precio del producto" data-validacion-tipo="requerido|email" />
    </div>
    
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
      tbcategoria
";  
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
    
    <div class="form-group">
        <label>Fecha de Creación</label>
        <input readonly type="date" name="nvchfecha" value="<?php echo $alm->__GET('nvchfecha'); ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Foto</label>
                <input type="hidden" name="nvchimg" value="<?php echo $alm->__GET('nvchimg'); ?>" />
                <input type="file" name="nvchimg" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('nvchimg') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('nvchimg'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>