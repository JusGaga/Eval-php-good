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
        $request = $this->bdd->prepare("Insert into user(nom,prenom,email,password,adresse,adresse2,code_postal,telephone,role) values (:nom,:prenom,:email,:password,:adresse,:adresse2,:code_postal,:telephone,'user')");
        $request -> execute([
            ":nom"=> $data["nom"],
            ":prenom"=> $data['prenom'],
            ":email"=> $data["email"],
            ":password"=>$password,
            ":adresse" =>$data["address"],
            ":adresse2" =>$data["address2"] ? $data['address2'] : null,
            ":code_postal" =>$data["postal"],
            ":telephone" =>$data["tel"]
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
        $request = $this->bdd->prepare("SELECT nom,prenom,email,adresse,adresse2,code_postal,telephone,role FROM user WHERE id_us = :id");
        $request->execute([
            ':id' => $id
        ]);
        return $request->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfile($data)
    {
        $request = $this->bdd->prepare("Update user set nom=:nom ,prenom=:prenom,email=:email,adresse=:adresse,adresse2=:adresse2,code_postal=:code_postal,telephone=:telephone ");
        $request -> execute([
            ":nom"=> $data["nom"],
            ":prenom"=> $data['prenom'],
            ":email"=> $data["email"],
            ":adresse" =>$data["address"],
            ":adresse2" =>$data["address2"] ? $data['address2'] : null,
            ":code_postal" =>$data["postal"],
            ":telephone" =>$data["tel"]
        ]);

    }


}