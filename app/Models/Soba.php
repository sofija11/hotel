<?php
namespace App\Models;

class Soba {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }

    public function getAllEAvaileableRooms(){
        return $this->db->executeGet("SELECT * FROM soba");
    }
    public function getAllCategories(){
        return $this->db->executeGet("SELECT * FROM kategorija");
    }

    public function getServices(){
        return $this->db->executeGet("SELECT * FROM servis");
    }
    public function getRoomsAvailable($brojGostiju){
        return $this->db->executeQueryWithParams("SELECT * FROM soba WHERE broj_osoba = ?",[$brojGostiju]);
    }
    public function DodajSobu ($soba,$opis,$nova_putanja,$brojSoba,$brojOsoba,$cena,$zvezdice,$idKategorijeS) {

        $params = [$soba,$opis,$nova_putanja,$brojSoba,$brojOsoba,$cena,$zvezdice,$idKategorijeS];

        $query = "INSERT INTO soba(idSoba,nazivSoba,opis,src,broj_soba,broj_osoba,cena,zvezdice,idKategorija)  values ( NULL,?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->executeInsert($query, $params);
    }
    public function FiltrirajSobu ($kategorije) {
        $k=implode( ", ", $kategorije );
        
        
        

        $query = "SELECT * FROM soba WHERE idKategorija = ? OR idKategorija= ? OR idKategorija=?";
        $params =  [$k];
        $this->db->executeQueryWithParams($query, $params);
    }
    public function getRoom($idS){
        return $this->db->executeQueryWithParams("SELECT * FROM soba WHERE idSoba = ?",[$idS]);
    }
    public function upisiRez($idKor,$idSobe,$od,$out){
        $params = [$idKor,$idSobe,$od,$out];

        $query = "INSERT INTO rezervacija values(NULL,? ,?, ?, ?)";
    
        $this->db->executeInsert($query, $params);
    }
}
?>
