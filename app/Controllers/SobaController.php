<?php

namespace App\Controllers;
use App\Models\Soba;

class SobaController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
   
    public function sveSobe(){
        $sobeModel = new Soba($this->db);

        $sobe = $sobeModel->getAllEAvaileableRooms();
        echo \json_encode($sobe);
    }
    public function sveKategorije(){
        $sobeModel = new Soba($this->db);

        $kategorije = $sobeModel->getAllCategories();
         echo \json_encode($kategorije);
    }
    public function sviServisi(){
        $sobeModel = new Soba($this->db);

        $servisi = $sobeModel->getServices();
         echo \json_encode($servisi);
    }
   public function filtrirajPoKat(){
    if(isset($_POST['kategorije'])){
        $kategorije=$_POST['kategorije'];
        try{
            $model = new Soba($this->db);
            $model->FiltrirajSobu ($kategorije);
            http_response_code(204); 
        

        }
        catch (\PDOException $ex) {
            echo json_encode(['message'=> $ex->getMessage()]);
            http_response_code(500);
          
        }
    }
    }
    public function available(){
        if(isset($_POST['poslato'])){
            $brojGostiju=$_POST['brojGostiju'];
          

            try{
                $model = new Soba($this->db);
                $sobeA=$model-> getRoomsAvailable($brojGostiju);
                 echo \json_encode($sobeA);
            }
            catch (\PDOException $ex) {
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        }

    }
    public function dohvatiSobu(){
        if(isset($_POST['idS'])){
            $idS=$_POST['idS'];

            try{
                $model = new Soba($this->db);
                $sobA=$model-> getRoom($idS);
                 echo \json_encode($sobA);

            }
            catch (\PDOException $ex) {
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        }
    }
    public function unesiRezeraciju(){
        if(isset($_POST['kliknutaRez'])){
            $idKor=$_POST['idKor'];
            $idSobe=$_POST['idSobe'];
            $od=$_POST['od'];
            $out=$_POST['out'];
            
           try {
                $model = new Soba($this->db);
                $model->upisiRez($idKor,$idSobe,$od,$out);
                http_response_code(201); 
            }
            catch (\PDOException $ex) {
                echo json_encode(['message'=> $ex->getMessage()]);
                http_response_code(500);
              
            }
        


           
        }
    }
 

}