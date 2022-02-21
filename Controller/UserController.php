<?php

if(session_status() === PHP_SESSION_NONE){
    session_start();
}

include_once "../Model/Users.php";
$userClass = new Users();

$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

if(isset($_GET["register"])){
    $userClass -> register($data);
    echo json_encode($data);
    header("Location:/");
}else if(isset($_GET["login"])){
    $user = $userClass->verifyUser($data);
    $password = $data['password'];
    $verif = password_verify($password, $user['password']);
    var_dump($verif);
    if($verif){
        $_SESSION['user']['id']= $user['id_us'];
        $_SESSION['user']['nom']= $user['prenom']." ".$user['nom'];
        $_SESSION['user']['email'] = $user['email'];
        $_SESSION['user']['role'] = $user['role'];
        echo json_encode($_SESSION);
    }
}else if(isset($_GET['disconnect'])) {

    $_SESSION = array();

    session_destroy();

    unset($_SESSION);
    header('Location:/');
}else if(isset($_GET['user'])){
    $profileUser = $userClass -> getprofile($_SESSION["user"]['id']);
    include_once "../View/Profile.php";
}else if(isset($_GET['edit'])){
    $UserInfo = $userClass -> getprofile($_SESSION['user']['id']);
    include_once '../View/ProfileEdit.php';

}else if(isset($_GET["update"])){
    $userClass -> updateProfile($data);
    echo json_encode($data);

}