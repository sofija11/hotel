<?php

namespace App\Controllers;
use App\Models\Admin;

class AdminController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    
    
    public function kategorijeSve(){
        $adminModel = new Admin($this->db);

        $kategorije = $adminModel->getAllCategories();
        echo \json_encode($kategorije);
    }
    public function korisniciSvi(){
        $adminModel = new Admin($this->db);

        $korisnici = $adminModel->getAllUsers();
        echo \json_encode($korisnici);
    }
    public function porukeSve(){
        $adminModel = new Admin($this->db);

        $poruke = $adminModel->getAllMesagess();
        echo \json_encode($poruke);
    }
    
    public function obrisiKorisnika(){
        if(isset($_GET['id'])){
           
        
            $id = $_GET['id'];
            
            try {
                $model = new Admin($this->db);
                $model->deleteUser($id);
                http_response_code(204); 
            }
            catch (\PDOException $ex) {
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        }
    
    }
    public function obrisiSobu(){
        if(isset($_GET['id'])){
           
        
            $id = $_GET['id'];
            
            try {
                $model = new Admin($this->db);
                $model->deleteSoba($id);
                http_response_code(204); 
            }
            catch (\PDOException $ex) {
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        }
    
    }
}