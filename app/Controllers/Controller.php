<?php

namespace App\Controllers;

class Controller {

    protected function view($fileName, $data = []){
       
        // extract($data);
        include "app/Views/fixed/top.php";
        include "app/Views/fixed/head.php";
        include "app/Views/fixed/meni.php";
        include "app/Views/pages/".$fileName.".php";        
      /*  include "app/Views/fixed/register.php";
        include "app/Views/fixed/login.php";*/
        include "app/Views/fixed/futer.php";
       
    }
    protected function redirect($page) {
        header("Location: " . $page);
    }

    protected function json($data = null, $statusCode = 200) {
        header("content-type: application/json");
        http_response_code($statusCode);
        echo json_encode($data);
    }
}