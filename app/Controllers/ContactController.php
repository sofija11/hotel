<?php

namespace App\Controllers;
use App\Models\ContaktPoruka;

class ContactController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
   
    public function unesiPoruku(){
        if(isset($_POST['kl'])){
           
            $naslovP=$_POST['naslov'];
            $poruk=$_POST['poruka'];
            $id=$_POST['id'];
            
          
            //var_dump($_POST);
            $errors=[];

            
            $RenaslovP='/^[A-Za-z]{4,25}$/';
            $ReporukaP='/^[ a-zA-Z0-9,#.?-]+/';
        

            if(!preg_match($RenaslovP, $naslovP)||empty($naslovP)) {
                $errors[] = "Caption is not in format or is empty";
            }
            if(!preg_match($ReporukaP, $poruk)||empty($poruk)) {
                $errors[] = "Message is not in format or is empty";
            }
           
            if(count($errors) == 0) {
               
            
            try {
                $model = new ContaktPoruka($this->db);
                $model->upisiPoruke($naslovP,$poruk,$id);
                http_response_code(201); 
            }
            catch (\PDOException $ex) {
                
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        }


           
        }
    }
 

   
}
