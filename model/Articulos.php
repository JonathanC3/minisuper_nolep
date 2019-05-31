<?php
    class Articulos{
        private $nombre;
        private $precio;
        private $descripcion;
        private $imagen;
        
        public function __construct() {
            $a = func_get_args();
            $n = func_num_args();
            if(method_exists($this, $f='__construct'.$n)){
                call_user_func_array(array($this, $f), $a);
            }
        }//constructor


        public function __construct1($nombre) {
            $this->nombre = $nombre;
        }//constructor1
        
        public function __construct2($nombre,$precio, $descripcion, $imagen) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
            $this->imagen = $imagen;
        }//constructor2
        
        public function __toString() {
            return "Nombre: ".$this->nombre." Apellidos: ".$this->apellidos;//con . concatena
        }//toString __ es una funcion ya creada
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }//setNombre
        
        public function getNombre(){
            return $this->nombre;
        }//getNombre
        
        public function setPrecio($precio){
            $this->precio = $precio;
        }//setPrecio
        
        public function getPrecio(){
            return $this->precio;
        }//getPrecio
        public function setDescripcion($descripcion){
            $this->descripcion = $imagen;
        }//setDescripcion
        
        public function getDescripcion(){
            return $this->descripcion;
        }//getDescripcion
        public function setImagen($imagen){
            $this->imagen = $imagen;
        }//setImagen
        
        public function getImagen(){
            return $this->imagen;
        }//getImagen

    }//Fin de clase
?>