<?php 

include "../require.php";
include "require.php";

$columna = "estudiantes";
$columnaId = "estu_id";

switch($_SERVER["REQUEST_METHOD"]){
   case "GET":
      $stmt = $con->query("SELECT * FROM estudiantes");

      echo json_encode(["data" => $stmt->fetchAll()]);
      break;
   case "POST":
      // print_r($_POST);
      $estu_cedula = $_POST["estu_cedula"];
      $estu_apellido = $_POST["estu_apellido"];
      $estu_nombre = $_POST["estu_nombre"];
      $estu_grado = $_POST["estu_grado"];
      $estu_seccion = $_POST["estu_seccion"];
      $estu_genero = $_POST["estu_genero"];

      $stmt = $con->query("INSERT INTO estudiantes(estu_cedula, estu_apellido, estu_nombre, estu_grado, estu_seccion, estu_sexo) VALUES('$estu_cedula', '$estu_apellido', '$estu_nombre', '$estu_grado', '$estu_seccion', '$estu_genero')");

      echo json_encode(["success" => true]);
      break;
      case "DELETE":
         $_DELETE = json_decode(file_get_contents("php://input"), true);

         eliminarRegistro($columna, $columnaId, $_DELETE["id"], $con);
      
      break;
}