<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserController {
   
    public function __construct() {
        $this->view=new View();
    }  // constructor
    public function loginVista(){
        $this->view->show("login.php", null);
    } // registrarVista
    public function login(){
        require 'model/UserModel.php';
        $nombre=$_POST['nombre'];
        $contrasenna=$_POST['contrasenna'];
        $user=new UserModel();
        $data=$user->login($nombre, $contrasenna);
		if($data['nombre']==null){
        	$message="error";
        	session_start();
        	$_SESSION['activo']=$data['nombre'];
        	//$_SESSION['role']=$data['role'];
        	session_start();
        	$_SESSION['activo']=$data['nombre'];
        	$_SESSION['role']=$data['role'];
        	$this->view->show("menu.php", $data);
        }

        
    } // login
}