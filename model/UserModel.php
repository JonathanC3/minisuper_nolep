<?php

class UserModel {
    protected $db;
    
    public function __construct(){
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton();        
    } // constructor
    
    public function login($nombre, $contrasenna){
         $sql="call sp_login('".$nombre."','".$contrasenna."')";
         $consulta=$this->db->prepare($sql);
         $consulta->execute();
         $datos = $consulta->fetch(PDO::FETCH_ASSOC);
         $consulta->CloseCursor();
         return $datos;
    } // fin login
    
            
public function registrar($codigo, $nombre){
        $consulta=$this->db->prepare('call sp_registrar("'.$codigo.'","'.$nombre.'")');
        $consulta->execute();
        $consulta->CloseCursor();
    } // fin registrar
    public function actualizar($codigoN, $nombreN){
        $consulta=$this->db->prepare('call sp_actualizar("'.$codigoN.'","'.$nombreN.'")');
        $consulta->execute();
        $consulta->CloseCursor();
        $resultado="El codigo ".$codigoN." ha cambiado su nombre a ".$nombreN;
        return $resultado;
    } // fin registrar
} // fin clase

?>