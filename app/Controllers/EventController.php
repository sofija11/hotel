<?php

namespace App\Controllers;
use App\Models\Event;

class EventController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
   
    public function eventoviSvi(){
        $eventModel = new Event($this->db);

        $eventovi = $eventModel->getAllEvents();
        echo \json_encode($eventovi);
    }
    public function eventoviTop3(){
        $eventModel = new Event($this->db);
        $top3=$eventModel->getTop3Events();
        echo \json_encode($top3);

    }
}