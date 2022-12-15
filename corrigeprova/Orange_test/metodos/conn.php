<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";
$port = 3306;

try{
    $conect = new PDO("mysql:host=$host; dbname=".$dbname, $user, $pass);
    //echo"Conexão com o banco de dados realizada com sucesso";
}catch(PDOException $err){
    //echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado ". $err->getMessage ();
}
?>