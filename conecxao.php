<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-type, Authorization, X-Requested-With');
header('Content-Type: application/json; charset=utf-8');


$banco = 'app_ionic';
$host = 'mysql669.umbler.com';
$usuario = 'jeferson_assis';
$senha = 'senhadificil1';

//dados do banco no servidor local

/*$banco = 'ionic';
$host = 'localhost';
$usuario = 'root';
$senha = '';*/

try {

    $pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha");

}catch(Exception $e){
    echo 'Erro ao conectar com o banco '.$e;

}

?>