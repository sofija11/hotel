<?php
namespace App\Models;

class Admin {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }
    public function getAllCategories(){
        return $this->db->executeQuery("SELECT * FROM kategorija");
    }
   /* public function DodajKorisnika ($firstname, $lastname, $username, $email, $password) {

        $params = [$firstname, $lastname, $username, $email, $password];

        $query = "INSERT INTO korisnik values(NULL, ?, ?, ?, ?, ?,CURRENT_TIMESTAMP, 2)";

        $this->db->executeInsert($query, $params);
    }*/
    public function getAllUsers(){
        return $this->db->executeQuery("SELECT * FROM korisnik k inner join uloga u on u.uloga_id=k.uloga_id");
    }
    public function getAllMesagess(){
        return $this->db->executeQuery("SELECT p.idKorisnik,k.ime,k.prezime,p.naslov,p.poruka FROM poruka p inner join korisnik k ON p.idKorisnik=k.idKorisnik ");
    }
   
    // public function obrisiKorisnika(){
    //     
    // }
    public function deleteUser($id) {
        $params = [$id];

        $query = "DELETE FROM korisnik WHERE idKorisnik = ?";

        return $this->db->executeInsert($query, $params);
    }
    public function deleteSoba($id) {
        $params = [$id];

        $query = "DELETE FROM soba WHERE idSoba = ?";

        return $this->db->executeInsert($query, $params);
    } 
}

