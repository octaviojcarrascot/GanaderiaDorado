<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Raza Ganado</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Raza</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-razas btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-razas" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Raza</i></button>
        </div>
        <table id="tablaRazas" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>Nombre Raza</td>
                    <td>Color</td>
                    <td>Estado</td>
                    <td style="width: 10%;">Acciones</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</section>
<!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
<div class="modal fade" id="modal-gestionar-razas">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Raza</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Nombre Raza</label>
                            <input type="text" class="form-control" name="nombre_raza" id="txtNombre_Raza" placeholder="Ingrese Nombre Raza">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Color</label>
                            <input type="text" class="form-control" name="color_raza" id="txtColor_Raza" placeholder="Ingrese el Color">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado_raza" id="ddlEstado" class="form-control select2bs4" >
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>

                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <!--Footer del Modal-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>

            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){

         var Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 3000
                                    });

         /* $.ajax({
                  url:"ajax/razas.ajax.php",
                  method:"GET",
                  cache:false,
                  contentType:false,
                  processData:false,
                  success:function(respuesta){
                  console.log(respuesta);
                }

             })*/
             var table = $('#tablaRazas').DataTable({

                "ajax":{
                    "url": "ajax/razas.ajax.php",
                    "type": "POST",
                    "data": {
                        "tipo" : "1"
                    },
                    "dataSrc": ""
                },
                 "language":{
                                        "processing": "Procesando...",
                                        "lengthMenu": "Mostrar _MENU_ registros",
                                        "zeroRecords": "No se encontraron resultados",
                                        "emptyTable": "Ningún dato disponible en esta tabla",
                                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                                        "search": "Buscar:",
                                        "infoThousands": ",",
                                        "loadingRecords": "Cargando...",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Último",
                                            "next": "Siguiente",
                                        "previous": "Anterior"
                                    },
                                        "aria": {
                                            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                                            "sortDescending": ": Activar para ordenar la columna de manera descendente"
                                        },
                                            "buttons": {
                                                "copy": "Copiar",
                                                "colvis": "Visibilidad",
                                                "collection": "Colección",
                                                "colvisRestore": "Restaurar visibilidad",
                                                "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                                                "copySuccess": {
                                                    "1": "Copiada 1 fila al portapapeles",
                                                    "_": "Copiadas %d fila al portapapeles"
                                                },
                                                "copyTitle": "Copiar al portapapeles",
                                                "csv": "CSV",
                                                "excel": "Excel",
                                                "pageLength": {
                                                    "-1": "Mostrar todas las filas",
                                                    "1": "Mostrar 1 fila",
                                                    "_": "Mostrar %d filas"
                                                },
                                                "pdf": "PDF",
                                                "print": "Imprimir"
                                            },
                                            "autoFill": {
                                                "cancel": "Cancelar",
                                                "fill": "Rellene todas las celdas con <i>%d<\/i>",
                                                "fillHorizontal": "Rellenar celdas horizontalmente",
                                                "fillVertical": "Rellenar celdas verticalmentemente"
                                            },
                                    "decimal": ",",
                                                    "searchBuilder": {
                                                        "add": "Añadir condición",
                                                        "button": {
                                                            "0": "Constructor de búsqueda",
                                                            "_": "Constructor de búsqueda (%d)"
                                                        },
                                                        "clearAll": "Borrar todo",
                                                        "condition": "Condición",
                                                        "conditions": {
                                                            "date": {
                                                                "after": "Despues",
                                                                "before": "Antes",
                                                                "between": "Entre",
                                                                "empty": "Vacío",
                                                                "equals": "Igual a",
                                                                "notBetween": "No entre",
                                                                "notEmpty": "No Vacio",
                                                                "not": "Diferente de"
                                                            },
                                                            "number": {
                                                                "between": "Entre",
                                                                "empty": "Vacio",
                                                                "equals": "Igual a",
                                                                "gt": "Mayor a",
                                                                "gte": "Mayor o igual a",
                                                                "lt": "Menor que",
                                                                "lte": "Menor o igual que",
                                                                "notBetween": "No entre",
                                                                "notEmpty": "No vacío",
                                                                "not": "Diferente de"
                                                            },
                                                            "string": {
                                                                "contains": "Contiene",
                                                                "empty": "Vacío",
                                                                "endsWith": "Termina en",
                                                                "equals": "Igual a",
                                                                "notEmpty": "No Vacio",
                                                                "startsWith": "Empieza con",
                                                                "not": "Diferente de"
                                                            },
                                                            "array": {
                                                                "not": "Diferente de",
                                                                "equals": "Igual",
                                                                "empty": "Vacío",
                                                                "contains": "Contiene",
                                                                "notEmpty": "No Vacío",
                                                                "without": "Sin"
                                                            }
                                                        },
                                                "data": "Data",
                                                "deleteTitle": "Eliminar regla de filtrado",
                                                "leftTitle": "Criterios anulados",
                                                "logicAnd": "Y",
                                                "logicOr": "O",
                                                "rightTitle": "Criterios de sangría",
                                                "title": {
                                                    "0": "Constructor de búsqueda",
                                                    "_": "Constructor de búsqueda (%d)"
                                                },
                                                "value": "Valor"
                                            },
                                                "searchPanes": {
                                                    "clearMessage": "Borrar todo",
                                                    "collapse": {
                                                        "0": "Paneles de búsqueda",
                                                        "_": "Paneles de búsqueda (%d)"
                                                    },
                                                    "count": "{total}",
                                                    "countFiltered": "{shown} ({total})",
                                                    "emptyPanes": "Sin paneles de búsqueda",
                                                    "loadMessage": "Cargando paneles de búsqueda",
                                                    "title": "Filtros Activos - %d"
                                                },
                                            "select": {
                                                "1": "%d fila seleccionada",
                                                "_": "%d filas seleccionadas",
                                                "cells": {
                                                    "1": "1 celda seleccionada",
                                                    "_": "$d celdas seleccionadas"
                                                },
                                                "columns": {
                                                    "1": "1 columna seleccionada",
                                                    "_": "%d columnas seleccionadas"
                                                }
                                            },
                                                "thousands": ".",
                                                "datetime": {
                                                    "previous": "Anterior",
                                                    "next": "Proximo",
                                                    "hours": "Horas",
                                                    "minutes": "Minutos",
                                                    "seconds": "Segundos",
                                                    "unknown": "-",
                                                    "amPm": [
                                                        "am",
                                                        "pm"
                                                    ]
                                                },
                                                "editor": {
                                                    "close": "Cerrar",
                                                    "create": {
                                                        "button": "Nuevo",
                                                        "title": "Crear Nuevo Registro",
                                                        "submit": "Crear"
                                                    },
                                                    "edit": {
                                                        "button": "Editar",
                                                        "title": "Editar Registro",
                                                        "submit": "Actualizar"
                                                    },
                                                    "remove": {
                                                        "button": "Eliminar",
                                                        "title": "Eliminar Registro",
                                                        "submit": "Eliminar",
                                                        "confirm": {
                                                            "_": "¿Está seguro que desea eliminar %d filas?",
                                                            "1": "¿Está seguro que desea eliminar 1 fila?"
                                                        }
                                                    },
                                                    "error": {
                                                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                                                    },
                                                    "multi": {
                                                        "title": "Múltiples Valores",
                                                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                                                        "restore": "Deshacer Cambios",
                                                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                                                    }
                                                },
                                            "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
                                },

                                "columnDefs":[
                                        //ESTE CODIGO NUESTRA DENTRO DE LA TABLA EL CAMPO ACTIVO = 1, E INACTIVO = 0....
                                         {
                                             "targets": 3,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                                             "sortable": false,
                                             "render": function (data, type, full, meta){

                                                 if(data == 1){
                                                     return "<button type ='button' class='btn btn-bloc btn-primary btn-sm'>ACTIVO</button>"
                                                 }else{
                                                     return "<button type='button' class='btn btn-bloc btn-danger btn-sm'>INACTIVO</button>"
                                                 }
                                             }

                                         },
                                        {
                                        "targets": 4,
                                        "sortable": false,
                                        "render": function (data, type, full, meta){
                                            return "<center>" +
                                                        "<button type='button' class ='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-actualizar-razas'> " +
                                                            "<i class='fas fa-pencil-alt'></i> " +
                                                        "</button> " +
                                                        "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                                                            "<i class='fas fa-trash'></i> " +
                                                        "</button> " +
                                                    "</center>";
                                        }
                                    }
                                ],
                                 "colunms":[
                                    {"data":"id"},
                                    {"data":"nombre_raza"},
                                    {"data":"color_raza"},
                                    {"dada":"estado_raza"},
                                    {"data":"acciones"}
                                ]
             });

             //Aqui tenemos el Boton de Agregar la Raza
             $("#btnGuardar").on('click',function(){

                        swal.fire({
                            title:"!CONFIRMAR¡",
                            text:"Esta seguro que desea registrar la categoria.?",
                            icon:'warning',
                            showCancelButton: true,
                            confirmButtonText:"Si, deseo Confirmar",
                            cancelButtonText:"Cancelar"
                        }).then(resultado => {
                            if(resultado.value){

                                var nombre_raza =$("#txtNombre_Raza").val(),
                                    color_raza =$("#txtColor_Raza").val(),
                                    estado_raza =$("#ddlEstado").val();

                                var datos = new FormData();
                                    datos.append('nombre_raza',nombre_raza)
                                    datos.append('color_raza',color_raza)
                                    datos.append('estado_raza',estado_raza)

                                $.ajax({
                                    url:"ajax/razas.ajax.php",
                                    method:"POST",
                                    data: datos,
                                    cache:false,
                                    contentType:false,
                                    processData:false,
                                    success: function(respuesta){

                                        //console.log(respuesta);

                                        $("#modal-gestionar-razas").modal('hide');

                                        table.ajax.reload(null,false);

                                        $("#txtNombre_Raza").val("");
                                        $("#txtColor_Raza").val("");
                                        $("#ddlEstado").val([1]);

                                        Toast.fire({
                                                icon: 'success',
                                                title: respuesta
                                            })

                                    }
                                });

                            }
                            else{

                            }
                        })
             })
        })
</script>
