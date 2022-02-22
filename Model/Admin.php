<?php
include_once "Bdd.php";

class Admin
{
    private PDO $bdd;

    public function __construct()
    {
        $bddClass = new Bdd();
        $this->bdd = $bddClass->getBdd();
    }

    public function getAllUsers()
    {

        $request = $this->bdd->prepare("Select id_us,nom,prenom,email,telephone,role from user ");
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        $request = $this->bdd->prepare("Select id_us,nom,prenom,email,telephone,role from user where id_us = :id");
        $request->execute([
            ":id" =>$id
        ]);
        return $request->fetch(PDO::FETCH_ASSOC);
    }

    public function updatebyid($id,$data)
    {
        $request = $this->bdd->prepare("Update user set nom = :nom,prenom=:prenom,email=:email,telephone=:telephone,role=:role where id_us=:id");
        $request->execute([
            ":nom"=> $data["nom"],
            ":prenom" => $data["prenom"],
            ":email" => $data["email"],
            ":telephone" => $data["tel"],
            ":role"=> $data["role"],
            ":id" => $id
        ]);
    }

    public function GetListAllPets()
    {
        $request = $this->bdd->prepare("select animal.id_pet as aid_pet,animal.nom as anom,date_naissance,photo,description,est_adopter,races.nom,especes.nom from animal left join est2 on est2.id_pet = animal.id_pet left join races on races.id_race = est2.id_race left join especes on especes.id_es = races.id_es");
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function AddRaces($data)
    {
        $request = $this->bdd->prepare("insert into races (nom,id_es) values (:nom,:id_es)");
        $request->execute([
            ":nom" => $data["nom"],
            ":id_es" => $data["especes"]
        ]);

    }

    public function AddEspeces($data)
    {
        $request = $this->bdd->prepare("insert into especes (nom) values (:nom)");
        $request->execute([
            ":nom" => $data["nom"]
        ]);
    }

    public function getEspeces()
    {
        $request = $this->bdd->prepare("select * from especes");
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function AddPets($data)
    {
        $request = $this->bdd->prepare("insert into animal(nom,date_naissance,photo,description,est_adopter,id_es) values (:nom,:date_naissance,:photo,:description,'0',:id_es)");
        $request->execute([
            ":nom" => $data["nom"],
            ":date_naissance" => $data["date_naissance"],
            ":photo" => $data["photo"],
            ":description" => $data["description"],
            ":id_es"=>$data["id_es"]
        ]);
    }

    public function getAnimalById($id)
    {

        $request = $this->bdd->prepare("Select * from animal where id_pet = :id");
        $request->execute([
            ":id"=> $id
        ]);
        return $request->fetch(PDO::FETCH_ASSOC);
    }

    public function UpdatePets($id,$data)
    {
        $request =  $this->bdd->prepare("Update animal set nom=:nom,date_naissance=:date_naissance,photo=:photo,description=:description,id_es=:id_es where id_pet=:id");
        $request->execute([
            ":nom"=>$data['nom'],
            ":date_naissance"=>$data['date_naissance'],
            ":photo"=>$data["photo"],
            ":description"=>$data['description'],
            ":id_es"=>$data["id_es"],
            ":id"=> $id
        ]);
    }


}