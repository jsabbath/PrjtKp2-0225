<h1 class="page-header">Productos</h1>
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Producto&a=Crud">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="">Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th style="width: 120px">Foto</th>
            <th style="">Fecha</th>
            <th style="">Categoria</th>
            <th style="">Opciones</th>
        </tr>
    </thead>
    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->__GET('nvchname'); ?></td>
            <td><?php echo $r->__GET('nvchdescripcion'); ?></td>
            <td>S/. <?php echo $r->__GET('nvchprecio'); ?></td>
            <td>
                <?php if($r->__GET('nvchimg') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('nvchimg'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td><?php echo $r->__GET('nvchfecha'); ?></td>
            <td><?php echo $r->__GET('nvchcategoria'); ?></td>
            <td>
                <a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                <br>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    
    <tfoot>
        <tr>
            <td colspan="8" class="text-center">
                <a href="?c=Producto&a=excel">Exportar a Excel</a>
            </td>
        </tr>
    </tfoot>
</table> 

    <script>
    //refrescar pagina con js
      /*(function(){
        setInterval(
          function(){
            document.location.reload()
          },1000)
          })()
    </script>