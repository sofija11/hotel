<?php

namespace App\Controllers;
use App\Models\Soba;

class InsertRoomController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    
   public function insertRoom(){

    if(isset($_POST['sobaSend'])){
      
    $soba = $_POST['nazivSobe'];
    $opis = $_POST['opis'];
    $slika = $_FILES['slika'];
    $cena=$_POST['cena'];
    $brojOsoba=$_POST['brojOsoba'];
    $brojSoba = $_POST['brojSoba'];
    $zvezdice = $_POST['zvezdice'];
    $idKategorijeS=$_POST['kategorijaaS'];
    $ime_fajla = $slika['name'];
    $tip_fajla = $slika['type'];
    $velicina_fajla = $slika['size'];
    $tmp_putanja = $slika['tmp_name'];
      $errorsRoom = [];
        $dozvoljeni_formati = array("image/jpg", "image/jpeg",
            "image/png");
                if(!in_array($tip_fajla, $dozvoljeni_formati)){
                    $errorsRoom[] = "Type is not good!";
                          }
                if($velicina_fajla > 3000000){
                        $errorsRoom[] = "File must be less than 3MB";
                          }
                if(empty($soba)){
                        $errorsRoom[] = "Room is required field.";
                          }
                if(empty($opis)){
                        $errorsRoom[] = "Caption is required field.";
                           }
                if(empty($cena)){
                        $errorsRoom[] = "Price is required field.";
                          }
                if(empty($brojOsoba)){
                        $errorsRoom[] = "Number of people is required field.";
                          }
                if(empty($brojSoba)){
                        $errorsRoom[] = "Number of rooms is required field.";
                            }
                if(empty($zvezdice)){
                        $errorsRoom[]="Stars required.";
                            }
                if(empty($idKategorijeS)){
                        $errorsRoom[]="Category required";
                }
                    if(count($errorsRoom)!=0){
                        $status = 400; 
                       
                       
                       
                }
                    else{
                        $novNaziv =  $ime_fajla;
                        $nova_putanja= "app/assets/images/room-list/.$novNaziv";
                        if(move_uploaded_file($tmp_putanja, $nova_putanja)){
                       
                       
                        try {
                            $model = new Soba($this->db);
                            $model->DodajSobu($soba,$opis,$nova_putanja,$brojSoba,$brojOsoba,$cena,$zvezdice,$idKategorijeS);
                            http_response_code(201); 
                            $this->redirect("index.php?page=admin");
                           
                        
                        }
                            
                        catch (\PDOException $ex) {
                            echo json_encode(['message'=> $ex->getMessage()]);
                            http_response_code(500);
                          
                        }
                    }
}
    } }}