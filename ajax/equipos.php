<?php 

include "../require.php";
include "require.php";

$columna = "equipos";
$columnaId = "equi_id";

switch($_SERVER["REQUEST_METHOD"]){
   case "GET":
      $stmt = $con->query("SELECT * FROM equipos");

      echo json_encode(["data" => $stmt->fetchAll()]);
      break;
   case "POST":
      // print_r($_POST);
      $equi_ip_dispo = $_POST["equi_ip_dispo"];
      $tipo_dispo = $_POST["tipo_dispo"];
      $esta_dispo = "Disponible";

      $stmt = $con->query("INSERT INTO equipos(equi_ip_dispo, tipo_dispo, esta_dispo) VALUES('$equi_ip_dispo', '$tipo_dispo', '$esta_dispo')");

      echo json_encode(["success" => true]);
      break;
   case "DELETE":
      $_DELETE = json_decode(file_get_contents("php://input"), true);

      eliminarRegistro($columna, $columnaId, $_DELETE["id"], $con);
      
      break;
}