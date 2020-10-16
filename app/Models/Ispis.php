<?php
namespace App\Models;

class Ispis {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }

    
    public function getAllPhotos(){
        return $this->db->executeQuery("SELECT * FROM galerija"); 
    }
}
?>
