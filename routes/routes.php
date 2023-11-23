<?php


use App\Controller\UserController;
use App\Model\UserModel;

require_once 'Route.php';
require_once '../Controller/UserController.php';
require_once '../config/database/conn.php';
require_once '../Model/UserModel.php';

use App\Route\Route;


Route::get('/StructureMVC/teste',UserController::class,'index',UserModel::class);


echo Route::redirect($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);