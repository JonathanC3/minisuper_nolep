<?php


class ItemModel {
    protected $db;
    
    public function __construct(){
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton(); 

    } // constructor
    /*
    public function listar($nombre, $contrasenna){
         $sql="call sp_login('".$nombre."','".$contrasenna."')";
         $consulta=$this->db->prepare($sql);
         $consulta->execute();
         $n_registros=$consulta->rowCount();
         if($n_registros!=0){
                return "menu.php";
         }else{
            return "registrar.php";
         }
    }*/ // fin listar
    public function proceso($user, $pass){
            $sql="call sp_login('".$nombre."','".$contrasenna."')";
            $consulta=$this->db->prepare($sql);
            $consulta->execute();
            $n_registros=$consulta->rowCount();
            print_r($consulta->fetchAll());
    }
}
