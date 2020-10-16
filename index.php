<?php

require_once "App/config/autoload.php";
require_once "App/config/database.php";

use app\Models\DB;
use app\Controllers\PageController;
use app\Controllers\RegisterController;
use app\Controllers\LoginController;
use app\Controllers\EventController;
use app\Controllers\ContactController;
use app\Controllers\SobaController;
use app\Controllers\RegisterAdmin;
use app\Controllers\AdminController;
use app\Controllers\InsertRoomController;
use app\Controllers\IspisiController;



$db = new DB(SERVER, DATABASE, USERNAME, PASSWORD);

$pageController = new PageController($db);
$registerController = new RegisterController($db);
$loginController = new LoginController ($db);
$eventController = new EventController ($db);
$contactController=new ContactController($db);
$sobaController=new SobaController($db);
$registerAdminController=new RegisterAdmin($db);
$adminController=new AdminController($db);
$insertRoom=new InsertRoomController($db);
$ispisController=new IspisiController($db);

if(isset($_GET['page'])){
 
    switch($_GET['page']){
        case "home":
            $pageController->home();//prikaz home page
            break;
           
        case "rooms":
            
            $pageController->rooms();
           break;
        case "gallery":
            $pageController->gallery();//prikaz galerije
            break;   
        case "events":
            $pageController->events();
            //prikaz eventova
           break;
        case "contact":
            $pageController->contact();//prikaz contact strane
            break;
        case "admin":
            $pageController->admin();//prikaz ADMINA koji moram da sredim
            break;
            exit;
            case "detail":
                $pageController->detail();//prikaz detalj sobe,MORAM DA SREDIM, IYBACITI PO POTREBI
            break;
            exit;
        case "reservation":
                $pageController->reservation();//strana rezervacija
            break;
            exit;
        case "registerUser":
                $registerController->registerUser();//registruje Korisnika
            break;
            exit;
        case "do-login":
                $loginController->login();// logovanje korisnika
                exit;
            break;
        case "logout":
                $loginController->logout();//logautuje
                
            break;
            case "prikazEventovaSvih"://dohvatam eventove iz baze sve
                $eventController->eventoviSvi();
                exit;
            break;
            case "prikazSoba":
                $sobaController->sveSobe();
                exit;
            break;
            case "prikazK":
                $sobaController->sveKategorije();
                exit;
            break;
            case "probajTop3"://dohvatam top 3 eventa iz baze 
                $eventController->eventoviTop3();
                exit;
            break;
            case "probajSlike":
                $ispisController->slikeSve();
                exit;
            break;
            case "contactPoruka":
                $contactController->unesiPoruku();
            break;
            exit; 
            case "ajde":
                $sobaController->sviServisi();
            break;
            exit; 
            //ADMINPANEL
            case "registerUserA":
                $registerAdminController->registerUserA();//registruje Korisnika
            break;
            case "probajKategorije"://ovde dohvatam kategorije
                $adminController->kategorijeSve();
            break;
            case "probajKorisnike"://ovde dohvatam korisnike
                $adminController->korisniciSvi();
            break;
            case "probajPoruke"://ovde dohvatam poruke
                $adminController->porukeSve();
            break;
            case "obrisiKorisnika":
                $adminController->obrisiKorisnika();
            break;
            case "obrisiSobu":
                $adminController->obrisiSobu();
            break;
            case "insertRoom":
                $insertRoom->insertRoom();
            break;
            case "probajCheck":
                $sobaController->filtrirajPoKat();
            break;
            case "available":
                $sobaController->available();
            break;
            case "dohvatiSobuJednu":
                $sobaController->dohvatiSobu();
            break;
            case "posaljiR":
                $sobaController->unesiRezeraciju();
            break;
            
                
        
    }
} else {
    $pageController->home();
}
