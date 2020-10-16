<?php

namespace App\Controllers;
use App\Models\Korisnik;

class RegisterController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    
    public function registerUser(){
        if(isset($_POST['kliknuto'])){
           
            $firstname=$_POST['fname'];
            $lastname=$_POST['lname'];
            $username=$_POST['uname'];
            $email=$_POST['mail'];
            $password=$_POST['pass'];
          
            //var_dump($_POST);
            $errors=[];

            $reFirstLast="/^[A-Z]{1}[a-z]{2,25}$/";
            $rePassword="/^(?=.*\d).{6,}$/";
            $reUsername="/^[a-zA-Z][a-zA-Z0-9-_]{3,32}$/";

            if(!preg_match($reFirstLast, $firstname)||empty($firstname)) {
                $errors[] = "Firstname is not in format or is empty";
            }
            if(!preg_match($reFirstLast, $lastname)||empty($lastname)) {
                $errors[] = "Lastname is not in format or is empty";
            }
            if(!preg_match($reUsername, $username)||empty($username)) {
                $errors[] = "Username is not in format or is empty";
            }
            if(!preg_match($rePassword, $password)||empty($password)) {
                $errors[] = "Password is not in format  or is empty";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)||empty($email)) {
                $errors[] = "Email is not in format or is empty";
            }
           
            if(count($errors) == 0) {
               
            
            try {
                $model = new Korisnik($this->db);
                $password = md5($password);
                $model->DodajKorisnika($firstname,$lastname,$username,$email,$password);
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
