<?php
require_once "security.php";
require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require "includes/conexion.php";
require "template/header.php";
?>

<main class="p-4">

   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalProfesor">
      Nuevo Profesor
   </button>

   <div class="table-responsive w-100 px-3">
      <table class="table table-bordered table-sm w-100" id="tabla-profesores">
         <thead class="thead-dark">
            <tr>
               <th>Cedula</th>
               <th>Apellido</th>
               <th>Nombre</th>
               <th>Materia</th>
               <th>Género</th>
               <th></th>
            </tr>
         </thead>
         <tbody></tbody>
      </table>
   </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalProfesor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información de Profesor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="formulario-profesor">
               <div class="form-group">
                  <label for="prof_cedula">Cédula</label>
                  <input type="text" class="form-control" id="prof_cedula" name="prof_cedula">
               </div>

               <div class="form-group">
                  <label for="prof_apellido">Apellido</label>
                  <input type="text" class="form-control" id="prof_apellido" name="prof_apellido">
               </div>

               <div class="form-group">
                  <label for="prof_nombre">Nombre</label>
                  <input type="text" class="form-control" id="prof_nombre" name="prof_nombre">
               </div>

               <div class="form-group">
                  <label for="prof_sexo">Género</label>
                  <select class="form-control" id="prof_sexo" name="prof_sexo">
                     <option>M</option>
                     <option>F</option>
                  </select>
               </div>

               <div class="form-group">
                  <label for="prof_materia">Materia</label>
                  <input type="text" class="form-control" id="prof_materia" name="prof_materia">
               </div>

            </form>
         </div>
         <div class="modal-footer">
            <span type="button" class="btn btn-primary" onclick="guardarEstudiante()">Guardar</span>
         </div>
      </div>
   </div>
</div>

<script>
   function guardarEstudiante() {
      const datos = new FormData($("#formulario-profesor")[0])

      $.ajax({
         method: "POST",
         url: "ajax/profesores.php",
         contentType: false,
         processData: false,
         data: datos,
         success: res => {
            dataTable.ajax.reload()
         }
      })
   }

   let dataTable = $("#tabla-profesores").DataTable({
      ajax: {
         url: "ajax/profesores.php",
         dataSrc: "data",
      },
      columns: [{
            data: "prof_cedula"
         },
         {
            data: "prof_apellido"
         },
         {
            data: "prof_nombre"
         },
         {
            data: "prof_mater"
         },
         {
            data: "prof_sexo"
         },
         {
            data: null,
            // render: function(data, type, row) {
            //    return ` <div class="btn-group btn-group-sm">
            //             <button class='btn btn-danger'>
            //                <i class="fa-solid fa-trash"></i>
            //             </button>
            //             </div>
            //             `
            // }
         }
      ],
      "language": {
         "lengthMenu": "Mostrar _MENU_ registros por pagina",
         "zeroRecords": "No se encontraron resultados en su busqueda",
         "searchPlaceholder": "Buscar registros",
         "info": "Mostrando  de _START_ al _END_  de  _TOTAL_ registros",
         "infoEmpty": "No existen registros",
         "infoFiltered": "",
         "search": "Buscar:",
         "processing": "Procesando...:",
         "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
         },
      }
   })
</script>