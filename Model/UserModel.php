<?php

namespace App\Model;
require_once 'Model.php';
use PDO;


class UserModel implements Model{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(){
        
    }

    public function read(){
      
    }

    public function update(){

    }

    public function delete(){

    }
}