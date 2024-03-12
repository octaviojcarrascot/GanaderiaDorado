<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Feedlot</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Ganado al Feedlot</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--VENTANA MODAL PARA REGISTRO DE FEEDLOT-->
<div class="modal fade" id="modal-gestionar-feedlot">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Gestionar Feedlot</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <input type="hidden" id ="id_ganado" name ="caravana" value = "">
                            <label for="">Caravana</label>
                            <input type="text" class="form-control" name="caravana" id="txtCaravana" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Fecha:</label>
                            <input type="date" class="form-control" name="fecha_feedlot" id="txtFecha_feedlot" >
                         </div>
                    </div> 
            </div> 
            <div class="row">     
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="ddlFeedlot">Nombre Feedlot</label>
                            <select name="feedlot" id="ddlFeedlot" class="form-control select2bs4" >
                                <option value="0">Seleccione</option>
                                <option value="A1-Primera">A1-Primera</option>
                                <option value="A2-Segunda">A2-Segunda</option>
                                <option value="A3-Tercera">A3-Tercera</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-sm-6">
                        <div class="from-groud">
                            <label for="">peso</label>
                            <input type="text" class="form-control" name="Peso" id="txtPeso" placeholder="999">
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

<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="modal-gestionar-feedlot btnGuardarfeedlot">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-feedlot" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Ganado al Feedlot</i></button>
        </div>
        <table id="tablaFeedlot" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>Caravana</td>
                    <td>Fecha</td>
                    <td>Comentario</td>
                    <td>Peso</td>
                    <td style="width: 20%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>


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
        var table = $('#tablaFeedlot').DataTable({
             //aqui se cargar la tabla con el controlar..
            "ajax":{
                "url":"ajax/feedlot.ajax.php",
                "type":"POST",
                "data":{
                    "tipo": 1
                },
                "dataSrc":""
            },

            //este codigo es para cambiar el idioma...
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
                //ESTE CODIGO MUESTRA DENTRO DE LA TABLA EL CAMPO ACTIVO = 1, INACTIVO = 0....
                {
                    "targets": 5,
                    "sortable": false,
                    "render": function (data, type, full, meta){
                        return "<center>" +
                                "<button type='button' class ='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-usuarios'> " +
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
                        {"data":"id_feedlot"},
                        {"data":"nombre_feedlot"},
                        {"data":"fecha_feedlot"},
                        {"data":"comentario"},
                        {"data":"peso"},
                        {"data":"accion"}
                ]

        });
         //CODIGO PARA ABREGAR UN REGISTRO DE RODEO..
        $(".btnGuardarfeedlot").on('click',function(){
            alert("btnGuardar");
            accion = "registrar";
           
        });
        //CODIGO PARA ELIMINAR EL REGISTRO DE RODEO..
        $('#tablaFeedlot tbody').on('click','.btnEliminar',function(){

            var data = table.row($(this).parents('tr')).data();
            //$('#editId').val(data[0])
            var id_feedlot = data["id_feedlot"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id_feedlot',id_usu);

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
                            url:"ajax/usuarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                //console.log(respuesta);

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
        $('#tablaFeedlot tbody').on('click','.btnEditar',function(){

            var data = table.row($(this).parents('tr')).data();
              
                accion = "actualizar";
            
                $("#id_usu").val(data["id_usu"]);
                $("#txtNombre_Usu").val(data["nombre_usu"]);
                $("#txtApellido_Usu").val(data["apellido_usu"]);
                $("#txtUsuario").val(data["usuario"]);
                $("#txtClave").val(data["clave"]);
                $("#ddlEstado").val(data["estatus"]);
                $("#ddlPerfilP").val(data["perfil"]);

        });
        //Aqui tenemos el Boton de guardar la Raza desde la ventana modal....
        $("#btnGuardar").on('click',function(){
              alert ("estoy en el boton de guardar");
                var id_feedlot = $("#id_feedlot").val(),
                    nombre_feedlot =$("#ddlFeedlot").val();
                    fecha_feedlot =$("#txtFecha_feedlot").val();
                    id_ganado =$("#id_ganado").val();
                    comentario =$("#txtComentario").val(); 
                    peso = $("#txtPeso").val();
                   
                var datos = new FormData();       
                    datos.append('id_feedlot',id_feedlot);
                    datos.append('nombre_feedlot',nombre_feedlot);
                    datos.append('fecha_feedlot',fecha_feedlot);
                    datos.append('id_ganado',id_ganado);
                    datos.append('comentario',comentario);
                    datos.append('peso',peso);
                    datos.append('accion',accion);

                //AQUI ESTA EL ALERTA DE CONFIRMACION...
                swal.fire({
                    title:"!CONFIRMAR¡",
                    text:"Esta seguro que desea registrar los Datos?...",
                    icon:'warning',
                    showCancelButton: true,
                    confirmButtonText:"Si, deseo Confirmar",
                    cancelButtonText:"Cancelar"
                }).then(resultado => {
                    if(resultado.value){
                            
                        $.ajax({
                            url:"ajax/feedlot.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                                $("#modal-gestionar-feedlot").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                                table.ajax.reload(null,false);
                                
                                //PARA LIMPIAR LOS CAMPOS DEL MODAL
                                $("#id_feedlot").val("");
                                $("#ddlFeedlot").val("");
                                $("#txtFecha_feedlot").val("");
                                $("#id_ganado").val("");
                                $("#txtComentario").val("");
                                $("#txtPeso").val("");
                               

                                //QUI SE HACE LLAMADO AL MENSAJE QUE APARECE EN LA PARTE SUPERIOR DERECHA...
                                Toast.fire({
                                        icon: 'success',
                                        title: respuesta
                                    })

                            }
                        });
                    }else{
                    
                    }
                })
        })


    })



</script>