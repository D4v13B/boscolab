<?php
session_set_cookie_params(60 * 60 * 24 * 365);
session_start();

// if (isset($_SESSION["admin_id"])) {
//    header("Location: admin/");
// }

require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require "includes/conexion.php";
require "template/header.php";

// Verificamos si la variable $_SESSION esta establecida y vamos a la tienda   
//if(isset($_SESSION['admin_id'])){
//header('Location:admin');
//}else if(isset($_SESSION['cliente'])){
//header('Location:profile.php');
//}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // print_r($_POST);

   if (empty($_POST['user_email']) or empty($_POST['user_password'])) {
      $error = 'Tienes un error en los campos';
   } else {
      $user_email = htmlspecialchars(filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL));
      $user_password = $_POST['user_password'];
      //HASEHAMOS LA PASSWORD
      // $user_password = hash('sha512', $user_password);
      // echo $user_password;

      try {
         //Preparamos la consulta y la ejecutamos
         $stmt = $con->prepare("SELECT * FROM usuarios WHERE (usua_nombre = '$user_email' OR usua_email = '$user_email') AND usua_password = '$user_password'");
         $stmt->execute();
      } catch (PDOException $e) {
         echo $e->getMessage();
      }

      //Verificamos la existencia del usuario y guardamos los resultados en la variable $respuesta
      if ($respuesta = $stmt->fetch()) {
         //Setiamos la variable superglobal SESSION y se recarga la pagina
         // print_r($respuesta);

         $stmt = $con->prepare("UPDATE usuarios SET usua_last_login = now() WHERE usua_id = :usua_id");
         $stmt->execute([":usua_id" => $respuesta["usua_id"]]);

         $_SESSION["admin_id"] = $respuesta["usua_id"];
         $_SESSION["admin_name"] = $respuesta["usua_nombre"];

         header('Location:index.php');
      } else {
         $error = "Este usuario no existe o la contreseña no es correcta";
      }
   }
}

require 'views/login.view.php';
