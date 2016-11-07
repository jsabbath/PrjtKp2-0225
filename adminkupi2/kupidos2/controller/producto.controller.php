<?php
require_once 'model/producto.entidad.php';
require_once 'model/producto.model.php';

class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ProductoModel();
    }
    
    //funcion index que invoca a los componentes del view producto
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->__SET('id',$_REQUEST['id']);
        $alm->__SET('nvchname',$_REQUEST['nvchname']);
        $alm->__SET('nvchdescripcion',$_REQUEST['nvchdescripcion']);
        $alm->__SET('nvchprecio',$_REQUEST['nvchprecio']);
        $alm->__SET('nvchimg',$_REQUEST['nvchimg']);
        //$alm->__SET('nvchfecha',          $_REQUEST['nvchfecha']);
        
        if( !empty( $_FILES['nvchimg']['name'] ) ){
            $foto = date('ymdhis') . '-' . strtolower($_FILES['nvchimg']['name']);
            move_uploaded_file ($_FILES['nvchimg']['tmp_name'], 'uploads/' . $foto);
            
            $alm->__SET('nvchimg', $foto);
        }
        
        $alm->__SET('nvchfecha',$_REQUEST['nvchfecha']);
        $alm->__SET('nvchcategoria',$_REQUEST['nvchcategoria']);

        if($alm->__GET('id') != '' ? 
           $this->model->Actualizar($alm) : 
           $this->model->Registrar($alm));
        
        header('Location: index.php');
    }
    
    public function Excel(){
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=mi_archivo.xls");
        header("Pragma: no-cache");
        header("Expires: 0");    
        
        require_once 'view/producto/producto-excel.php';
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}