<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Fallecimiento</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Fallecimiento</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-fallecimientos btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-fallecimientos" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Fallecimiento</i></button>
        </div>
        <table id="tablafallecimientos" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>Caravana</td>
                    <td>Fecha</td>
                    <td>Rodeo</td>
                    <td>Lugar</td>
                    <td style="width: 20%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>

<!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
<div class="modal fade" id="modal-gestionar-fallecimientos" id="tablafallecimientos">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">

            <!--Header-->
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Gestionar Fallecimiento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="">Caravana</label>
                            <input type="text" class="form-control" name="txtId_ganado" id="txt" placeholder="Ingrese Numero de Caravana">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Fecha :</label>
                            <input type="date" class="form-control" name="fecha" id="txtFecha" >
                         </div>
                    </div> 
            </div> 
            <div class="row">     
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="ddlEstatus">Estatus</label>
                            <select name="estatus" id="ddlEstatus" class="form-control select2bs4" >
                                <option value="0">Seleccione</option>
                                <option value="1">Fallecido</option>
                                <option value="2">Vivo</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="ddlRodeo">Rodeo</label>
                            <select name="rodeo" id="ddlRodeo" class="form-control select2bs4" >
                                <option value="0">Seleccione</option>
                                <option value="1">Vaca</option>
                                <option value="2">Toro</option>
                                <option value="3">Vaquillona</option>
                                <option value="4">Novillo</option>
                                <option value="5">Ternera</option>
                                <option value="6">Ternero</option>

                            </select>
                        </div>
                    </div>       
                </div>
                 <div class="row">
                      
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="comment">Comentarios:</label>
                            <textarea class="form-control"  id="txtComentario"></textarea>
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

    var accion = "";

    //AQUI LLAMAMOS EL MENSAJE DE INFORMACION...
    var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
    });
     //Aqui mostramos los datos en la tabla....    
    var table = $('#tablafallecimientos').DataTable({
         //aqui se cargar la tabla con el controlar..
            "ajax":{
                    "url": "ajax/fallecimientos.ajax.php",
                    "type": "POST",
                    "data": {
                        "tipo" : "1"
                    },
                    "dataSrc": ""
            },
            //este codigo es para cambiar el idioma.
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
            //aqui se nuestra en el datable los registros....
            "columnDefs":[
                {
                    "targets": 5,
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
                //aqui se define las columnas del tabla....
                "colunms":[
                        {"data":"id_falleci"},
                        {"data":"id_ganado"},
                        {"data":"lugar_faleci"},
                        {"data":"fecha_falleci"},
                        {"data":"comentario"},
                        {"data":"accion"}
                ]

    });
      //CODIGO PARA ABREGAR UN REGISTRO DE RODEO..
        $(".btn-agregar-fallecimientos").on('click',function(){

                accion = "registrar";

        });
          //CODIGO PARA ELIMINAR EL REGISTRO DE RODEO..
        $('#tablafallecimientos tbody').on('click','.btnEliminar',function(){

            var data = table.row($(this).parents('tr')).data();
            //$('#editId').val(data[0])
            var id_falleci = data["id_falleci"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id_falleci',id_falleci);

            

                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea eliminar el Registro?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){

                        $.ajax({
                            url:"ajax/fallecimientos.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                console.log(respuesta);

                                table.ajax.reload(null,false);

                                Toast.fire({
                                    icon: 'success',
                                    title: respuesta
                                })

                            }
                        });

                    }else{

                    }
                })

        });
         //CODIGO PARA EDITAR EL REGISTRO DE RODEO.. INCOMPLETO.....
        $('#tablafallecidos tbody').on('click','.btnEditar',function(){

                var data = table.row($(this).parents('tr')).data();
                    accion = "actualizar";
                    $("#id_falleci").val(data["id_falleci"]);
                    $("#txtCaravana").val(data["caravana"]);
                    $("#txtNumero").val(data["numero"]);
                    $("#ddlSexo").val(data["sexo"]);
                    $("#ddlCategoria").val(data["categoria"]);
                    $("#txtPeso").val(data["peso"]);
                    $("#ddlRaza").val(data["id_raza"]);

        });


})


</script>