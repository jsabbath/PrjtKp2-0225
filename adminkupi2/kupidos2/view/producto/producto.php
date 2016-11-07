  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
      </ol>
    </div><!--/.row-->
    
    
    <div class="row" style='margin-top:20px'>
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Registro de Productos</div>
          <div class="panel-body">
            <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                     <tr>
                        <th style="">Producto </th>
                        <th>Descripción </th>
                        <th>Precio </th>
                        <th>Foto </th>
                        <th style="">Fecha modificaicón </th>
                        <th style="">Categoria </th>
                        <th style="">Opciones </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nvchname'); ?></td>
                            <td><?php echo $r->__GET('nvchdescripcion'); ?></td>
                            <td>S/. <?php echo $r->__GET('nvchprecio'); ?></td>
                            <td>
                                <?php if($r->__GET('nvchimg') != ''): ?>
                                    <img src="uploads/<?php echo $r->__GET('nvchimg'); ?>" style="width:100px;" />
                                <?php endif; ?> 
                            </td>
                            <td><?php echo $r->__GET('nvchfecha'); ?></td>
                            <td><?php echo $r->__GET('NAMECATEGORIA'); ?></td>
                            <td>
                                <!--a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a> 
                                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a-->

                                <a class='btn btn-primary btn-xs' href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    Editar
                                </a>
                                <a class='btn btn-danger btn-xs' onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>" >
                                    <span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" class="text-center">
                            <a href="?c=Producto&a=excel">Exportar a Excel</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div><!--/.row-->      
    
  </div><!--/.main-->
<!--END Container body-->