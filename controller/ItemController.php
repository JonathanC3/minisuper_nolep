<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ItemController {
   
    public function __construct() {
        $this->view=new View();
    }  // constructor
    public function administrativoView(){
        $this->view->show("administrativo.php", null);
    } // registrarVista
    
    public function loginView(){
        $this->view->show("login.php", null);
    } // registrarVista
    public function actualizarVista(){
        $this->view->show("actualizarVista.php", null);
    } // registrar
    public function registrar(){
        require 'model/ItemModel.php';
        //obtiene los datos del formulario
        $codigo=$_POST["nombre"];
        $nombre=$_POST["contrasenna"];
        //instancia el modelo
        $items=new ItemModel();
        $data['registro']=$items->registrar($codigo, $nombre);
        $data['listado']=$items->listar();
        $this->view->show("listar.php", $data);
    } //registrar
    public function actualizar(){
        require 'model/ItemModel.php';
        //obtiene los datos del formulario
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        //instancia el modelo
        $items=new ItemModel();
        $data=$items->actualizar($codigo, $nombre);
        //$data['listado']=$items->listar();
        $this->view->show("actualizarVista.php", $data);
    } //registrar
    public function proceso(){
            require 'modelo/ItemModel';
          $user = $_POST["user"];
          $pass = $_POST["pass"];
          $items=new ItemModel();
          $items->proceso($user, $pass);
    }
} // fin clase
