<?php 

namespace App\Controllers;
use App\Models\Korisnik;



class LoginController extends Controller {
    private $db;


    public function __construct($db) {
        $this->db = $db;
    }


    public function login() {
     
        
        $errors = [];
       if(isset($_POST['sendL'])){
        if(!isset($_POST["passwordL"])) {
            array_push($errors, "Password is required.");
        }

        if(!isset($_POST["usernameL"])) {
            array_push($errors, "Username is required.");
        }
        if(count($errors)) {
            $this->view('reservation', [
                "errors" => $errors
            ]);
            exit;
        }

        try {
            $model = new Korisnik($this->db);
            $user = $model->findByUsernameAndPassword($_POST["usernameL"],$_POST["passwordL"]);

            if($user != null) {
                $_SESSION["user"] = $user;
             $_SESSION["uloga"] = $user->uloga_id;
            }
            // $this->view('events', [
            //     "user" => $user
            // ]);
        if($_SESSION['uloga']!=1){
         $this->redirect("index.php");
        }else{
            $this->redirect("index.php?page=admin");
        }
           
        }catch(\PDOException $ex) {
             $this->redirect("index.php");
            echo json_encode(['message'=> $ex->getMessage()]);
            http_response_code(500);
        }

       }

        // if(!$erros) {
        //     array_push($errors, "Invalid username and password combination.");
        // }
       
    }
        public function logout() {
          /*  $_SESSION["user"] = null;
            $_SESSION["uloga"] = null;*/
            session_destroy();
            $this->redirect("index.php");
            
        }
    
}
