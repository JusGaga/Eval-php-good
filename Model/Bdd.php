<?php

class Bdd{
    private PDO $bdd;

    public function __construct(){
        $this->bdd = new PDO ("mysql:host=localhost;dbname=evalphp", "root","");
    }

    public function getBdd(){
        return $this->bdd;
    }
}