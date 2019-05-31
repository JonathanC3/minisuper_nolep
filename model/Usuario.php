<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author jonathan
 */
class Usuario {
    private $nombre;
    private $role;
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
        
        public function __construct2($nombre,$role) {
            $this->nombre = $nombre;
            $this->role = $role;
            }//constructor2
        
        public function __toString() {
            return "Nombre: ".$this->nombre." Role ".$this->role;//con . concatena
        }//toString __ es una funcion ya creada
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }//setNombre
        
        public function getNombre(){
            return $this->nombre;
        }//getNombre
        
        public function setRole($role){
            $this->role = $role;
        }//setPrecio
        
}
