<?php

namespace App\Controllers;
use App\Models\Korisnik;

class RegisterAdmin extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    
    public function registerUserA(){
        if(isset($_POST['kliknutoA'])){
           
            $firstnameA=$_POST['fnameA'];
            $lastnameA=$_POST['lnameA'];
            $usernameA=$_POST['unameA'];
            $emailA=$_POST['mailA'];
            $passwordA=$_POST['passA'];
          
           // var_dump($_POST);
            $errorsA=[];

            $reFirstLast="/^[A-Z]{1}[a-z]{2,25}$/";
            $rePassword="/^(?=.*\d).{6,}$/";
            $reUsername="/^[a-zA-Z][a-zA-Z0-9-_]{3,32}$/";

            if(!preg_match($reFirstLast, $firstnameA)||empty($firstnameA)) {
                $errorsA[] = "Firstname is not in format or is empty";
            }
            if(!preg_match($reFirstLast, $lastnameA)||empty($lastnameA)) {
                $errorsA[] = "Lastname is not in format or is empty";
            }
            if(!preg_match($reUsername, $usernameA)||empty($usernameA)) {
                $errorsA[] = "Username is not in format or is empty";
            }
            if(!preg_match($rePassword, $passwordA)||empty($passwordA)) {
                $errorsA[] = "Password is not in format  or is empty";
            }
            if(!filter_var($emailA, FILTER_VALIDATE_EMAIL)||empty($emailA)) {
                $errorsA[] = "Email is not in format or is empty";
            }
           
            if(count($errorsA) == 0) {
               
            
            try {
                $model = new Korisnik($this->db);
                $password = md5($passwordA);
                $model->DodajKorisnika($firstnameA,$lastnameA,$usernameA,$emailA,$password);
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
