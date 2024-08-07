<?php 

// require "vendor/autoload.php";
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ ."/../...");
// $dotenv->load();
// require "includes/conexion.php";

function eliminarRegistro($tabla, $columna, $id, $con){
   $stmt = $con->query("DELETE FROM $tabla WHERE $columna = $id");
}