<?php
include_once "Bdd.php";
class Users
{
    private PDO $bdd;

    public function __construct()
    {
        $bddClass = new Bdd();
        $this->bdd = $bddClass->getBdd();
    }

    public function register($data)
    {
        $password = password_hash($data["password"], PASSWORD_BCRYPT);
        $request = $this->bdd->prepare("INSERT INTO user (nom,prenom,email,password,adresse,adresse2,codePostal,tel,role) VALUES (:nom,:prenom,:email,:password,:adresse,:adresse2,:codePostal,:tel,'user')");
        $request -> execute([
            ":nom"=> $data["nom"],
            ":prenom"=> $data['prenom'],
            ":email"=> $data["email"],
            ":password"=>$password,
            ":adresse" =>$data["address"],
            ":adresse2" =>$data["address2"],
            ":codePostal" =>$data["postal"],
            ":tel" =>$data["tel"]
        ]);
    }

    public function verifyUser($data)
    {
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL) ? $data['email'] : null;

        $request = $this->bdd->prepare("SELECT * FROM user WHERE email = :email");
        $request->execute([
            ':email' => $email
        ]);
        return $request->fetch(PDO::FETCH_ASSOC);
    }

    public function getprofile($id)
    {
        $request = $this->bdd->prepare("SELECT nom,prenom,email,adresse,adresse2,codePostal,tel,role FROM user WHERE id_us = :id");
        $request->execute([
            ':id' => $id
        ]);
        return $request->fetch(PDO::FETCH_ASSOC);
    }
}