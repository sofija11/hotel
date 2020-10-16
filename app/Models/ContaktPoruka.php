<?php
namespace App\Models;

class ContaktPoruka {
    private $db;


public function __construct(DB $db){
    $this->db =$db;

}
public function upisiPoruke($naslov,$poruka,$idKorisnik){
    $params = [$naslov, $poruka, $idKorisnik];

    $query = "INSERT INTO poruka values(NULL, ?, ?,CURRENT_TIMESTAMP, ?)";

    $this->db->executeInsert($query, $params);

}

}