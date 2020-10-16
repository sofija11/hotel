<?php
namespace App\Models;

class Korisnik {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }
    
    public function DodajKorisnika ($firstname, $lastname, $username, $email, $password) {

        $params = [$firstname, $lastname, $username, $email, $password];

        $query = "INSERT INTO korisnik values(NULL, ?, ?, ?, ?, ?,CURRENT_TIMESTAMP, 2)";

        $this->db->executeInsert($query, $params);
    }
    public function find($id) {
        $data = $this->db->executeGet("select * from korisnik where idKorisnik = " . $id);
        
        if(!count($data)) {
            return null;
        }

        return $data[0];
    }

    public function findByUsernameAndPassword($username, $password) {
        $data = $this->db->executeGet("select * from korisnik where 
        korisnicko = '" . $username. "'" . " AND lozinka = '" .  md5($password) . "'");
       // lozinka = '" . md5($password) . "'" . " AND korisnicko_ime = '" . $username . "'");
        
        if(!count($data)) {
            return null;
        }

        return $data[0];
    }

}