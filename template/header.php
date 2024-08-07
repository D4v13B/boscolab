<!DOCTYPE html>
<html lang="es">

<head>

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Boscolab</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo $_ENV["RUTA"] ?>dist/css/adminlte.min.css">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="<?php echo $_ENV["RUTA"] ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <!-- Toastr -->
      <link rel="stylesheet" href="<?php echo $_ENV["RUTA"] ?>plugins/toastr/toastr.min.css">
   </head>
</head>
<!-- jQuery -->
<script src="<?php echo $_ENV["RUTA"] ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $_ENV["RUTA"] ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $_ENV["RUTA"] ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<header>
   <!--BARRA DE NAVEGACIÓN-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <a class="navbar brand" target="_blank" href="https://institutotecnicodonbosco.edu.pa/">
            <img src="img/1.png" width="200" height="50" class="d-inline-block align-top" alt="">
         </a>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contenidoMenu" aria-controls="contenidoMenu" aria-expanded="false" aria-label="Mostrar/Ocultar Navegación">
            <span class="navar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="contenidoMenu">
            <!--ENLACE-->
            <ul class="navbar-nav me-auto">
               <li class="nav-item">
                  <a href="http://localhost/boscolab/" class="nav-link">Inicio</a>
               </li>


               <!--MOVEMENT-->
               <li class="nav-item">
                  <a target="_blank" href="movimientos.php" class="nav-link">Movimientos</a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                     Administración
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="profesores.php">Profesores</a>
                     <a class="dropdown-item" href="estudiantes.php">Estudiantes</a>
                     <a class="dropdown-item" href="dispositivos.php">Dispositivos</a>
                  </div>
               </li>
            </ul>
         </div>
   </nav>
</header>