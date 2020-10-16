<?php

namespace App\Controllers;
use App\Models\Ispis;

class IspisiController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
   
    public function slikeSve(){
        $model = new Ispis($this->db);

        $slike = $model->getAllPhotos();
        echo \json_encode($slike);
    }
    
}