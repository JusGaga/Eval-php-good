<?php

class Admin
{
    private PDO $bdd;

    public function __construct()
    {
        $bddClass = new Bdd();
        $this->bdd = $bddClass->getBdd();
    }


}