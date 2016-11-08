  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Producto</li>
      </ol>
    </div>
    
    <div class="row" style='margin-top:20px'>
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Registro de Productos</div>
          <div class="panel-body">
            <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                     <tr>
                        <th style="">Nombre Producto </th>
                        <th style='min-width:250px'>Descripción </th>
                        <th style="width: 200px">Precio Producto</th>
                        <th style="">Imagen producto </th>
                        <th style="">Fecha Modificacion</th>
                        <th style="">Categoria </th>
                        <th style="">Configuracion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nvchname'); ?></td>
                            <td>
                                <p><?php echo $r->__GET('nvchdescripcion'); ?></p>
                            </td>
                            <td>S/. <?php echo $r->__GET('nvchprecio'); ?></td>
                            <td>
                                <?php if($r->__GET('nvchimg') != ''): ?>
                                    <img src="uploads/<?php echo $r->__GET('nvchimg'); ?>" style="width:100px;" />
                                <?php endif; ?> 
                            </td>
                            <td><?php echo $r->__GET('nvchfecha'); ?></td>
                            <td><?php echo $r->__GET('NAMECATEGORIA'); ?></td>
                            <td>
                                <a class='btn btn-primary btn-xs' href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class='btn btn-danger btn-xs' onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>" >
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12" style="padding: 30px; background-color: rgba(220, 220, 220, 0.42); margin:0 auto; width: 100%;">
            <p style="margin: 0 auto; text-align: center; color:black">Floreria Kupi2 &copy; Developed by <a href="http://www.devhuayra.com" class='txtfooter' target="_blank" style="background: linear-gradient(to left,#00BCD4,#8BC34A); color:white; padding: 3px; padding-right: 5px; padding-left: 5px; text-decoration: none; border-radius: 5px; font-size: 14px; font-family: 'Lobster', cursive;">devHuayra</a>.</p>
        </div>
    </div>     
    
  </div>
<!--END Container body-->