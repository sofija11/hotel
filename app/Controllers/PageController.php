<?php

namespace App\Controllers;
use App\Models\Korisnik;


class PageController extends Controller {
    private $db;


    public function __construct($db) {
        $this->db = $db;
    }

    public function home() {
        $this->view("home");
    }
    public function rooms() {
        $this->view("rooms");
    }
    public function gallery() {
        $this->view("gallery");
    }
    public function events() {
        $this->view("events");
    }
    public function contact() {
        $this->view("contact");
    }
    public function detail() {
        $this->view("detail");
    }
    public function reservation() {
        $this->view("reservation");
    }
    public function admin() {
       
            $this->view("adminPanel");
        }
       
    
    


   
}