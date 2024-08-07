<?php 


include "../require.php";
include "require.php";

$columna = "profesores";
$columnaId = "prof_id";

switch($_SERVER["REQUEST_METHOD"]){
   case "GET":
      $stmt = $con->query("SELECT * FROM profesores");

      echo json_encode(["data" => $stmt->fetchAll()]);
      break;
   case "POST":
      $prof_cedula = $_POST["prof_cedula"];
      $prof_nombre = $_POST["prof_nombre"];
      $prof_apellido = $_POST["prof_apellido"];
      $prof_materia = $_POST["prof_materia"];
      $prof_sexo = $_POST["prof_sexo"];


      $stmt = $con->query("INSERT INTO profesores(prof_cedula, prof_nombre, prof_apellido, prof_sexo, prof_mater) VALUES('$prof_cedula', '$prof_nombre', '$prof_apellido', '$prof_sexo', '$prof_materia')"); 

      echo json_encode(["success" => true]);
      
      break;
   case "DELETE":
      $_DELETE = json_decode(file_get_contents("php://input"), true);

      eliminarRegistro($columna, $columnaId, $_DELETE["id"], $con);
      
      break;
}

