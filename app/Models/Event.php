<?php
namespace App\Models;

class Event {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }

    public function getAllEvents(){
        return $this->db->executeQuery("SELECT * FROM dogadjaj");
    }
    public function getTop3Events(){
        return $this->db->executeQuery("select * FROM dogadjaj ORDER by datum DESC limit 3");
    }
    public function datumSamo($datum){
       
        $timestamp = strtotime($datum);
    $yearmonthday = date('Y m d', $timestamp);
    echo $yearmonthday;
    
    }
    
}
?>
