<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

include_once "../Model/Admin.php";
$adminClass = new Admin();

if(isset($_SESSION['user'])&& $_SESSION["user"]["role"] === 'admin'){
    if(isset($_GET['UserList'])){
        $users = $adminClass->getAllUsers();
        include_once "../View/UserList.php";
    }else if(isset($_GET['EditUser'])&& isset($_GET['id'])){

        $user = $adminClass->getUserById($_GET['id']);
        include_once "../View/AdminEditUser.php";

    }else if( isset($_GET['Update'])&& isset($_GET["id"])){

        $adminClass->updatebyid($_GET['id'],$data);
        echo json_encode($data);

    }else if( isset($_GET['Pets'])){

        $pets = $adminClass->GetListAllPets();
        include_once "../View/PetList.php";

    }else if(isset($_GET['AddRacesConfirm'])){

        $adminClass->AddRaces($data);
        echo json_encode($data);

    }else if (isset($_GET["AddEspecesConfirm"])){

        $adminClass->AddEspeces($data);
        echo json_encode($data);

    }else if(isset($_GET["AddPetsConfirm"])){

        $adminClass->AddPets($data);

    }else if(isset($_GET["AddPets"])){

        $especes = $adminClass->getEspeces();
        include_once '../View/AddPets.php';

    }else if(isset($_GET['AddRaces'])){

        $especes = $adminClass->getEspeces();
        include_once '../View/AddRacesPets.php';

    }else if(isset($_GET['AddEspeces'])){

        include_once "../View/AddEspecesPets.php";

    }else if(isset($_GET["Edit"])&&isset($_GET["id"])){

        $especes = $adminClass->getEspeces();
        $animal = $adminClass -> getAnimalById($_GET["id"]);
        include_once "../View/EditAnimal.php";

    }else if(isset($_GET['UpdatePetsConfirm'])&&isset($_GET["id"])){

        $adminClass -> UpdatePets($_GET['id'],$data);
        echo json_encode($data);
    }
}
