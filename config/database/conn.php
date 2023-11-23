<?php
namespace App\Connect;

use Dotenv;
use PDO;
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

class ConnectDB{
   
    private static $pdo;

    function __construct()
    {
        $pdo = self::$pdo;
    }

    public static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=mvc', $_ENV['DATABASE_USER'],$_ENV['DATABASE_PASSWORD']);
        return $pdo;
    }


}

