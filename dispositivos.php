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
   <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalEquipos">
      Nuevo Equipo
   </button>

   <div class="table-responsive w-100 px-3">
      <table class="table table-bordered table-sm w-100" id="tabla-profesores">
         <thead class="thead-dark">
            <tr>
               <th>IP</th>
               <th>Tipo de dispositivo</th>
               <th>Estado</th>
               <th></th>
            </tr>
         </thead>
         <tbody></tbody>
      </table>
   </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalEquipos" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información de Profesor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="formulario-equipo">
               <div class="form-group">
                  <label for="equi_ip_dispo">IP</label>
                  <input type="text" class="form-control" id="equi_ip_dispo" name="equi_ip_dispo">
               </div>

               <div class="form-group">
                  <label for="tipo_dispo">Tipo de dispositivo</label>
                  <input type="text" class="form-control" id="tipo_dispo" name="tipo_dispo">
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
         url: "ajax/equipos.php",
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
         url: "ajax/equipos.php",
         dataSrc: "data",
      },
      columns: [{
            data: "equi_ip_dispo"
         },
         {
            data: "tipo_dispo"
         },
         {
            data: "esta_dispo"
         },
         {
            data: null,
            render: function(data, type, row) {
               return ` <div class="btn-group btn-group-sm">
                         <button class='btn btn-danger' onclick="eliminarRegistro(${row.equi_id})">
                            <i class="fa-solid fa-trash"></i>
                         </button>
                         </div>
                         `
            }
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

   function eliminarRegistro(id){
      $.ajax({
         url: "ajax/equipos.php",
         method: "DELETE",
         contentType: "application/json",
         data: JSON.stringify({
            id: id
         }),
         success: res => {
            dataTable.ajax.reload()
            alert("Eliminado correctamente")
         }
      })
   }
</script>