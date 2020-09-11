<?php
//
//require_once "functions.php";
//
//
////$pdo = connectToDb();
////$tasks = getAll($pdo, 'tasks);
//try {
//    $pdo = new PDO("mysql:dbname=kontura; host=localhost", "root", "");
//} catch (PDOException $e) {
//    die('Could not connect. Error: ' . $e->getMessage() );
//}
//dd($pdo);
//
//
//$query = $pdo->prepare("SELECT * FROM  tasks");
//
//$query->execute();
//
//$tasks = $query-> fetchAll(PDO::FETCH_OBJ);
//
//
//require_once "index.view.php";




//MINE PART STARTS HERE
use App\Core\Request;
use App\Core\Router;

require_once "vendor/autoload.php";
require_once "core/bootstrap.php"; //this lifts up the application (db..)

Router::loadRoutes()
    ->direct(Request::uri(), Request::method());
