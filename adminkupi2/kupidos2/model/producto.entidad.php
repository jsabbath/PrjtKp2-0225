<?php
    class Producto
    {
        private $id;
        private $nvchname;
        private $nvchdescripcion;
        private $nvchprecio;
        private $nvchimg;
        private $nvchfecha;
        private $nvchcategoria;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }