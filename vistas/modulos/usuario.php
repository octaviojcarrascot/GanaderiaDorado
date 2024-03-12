<section class="content-header">

    <div class="contrainer-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Usuarios</h1>
            </div> 

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href = "index.php">Inicio / </a>
                    </li>

                    <li class="breadcrumb-itm active">Gestionar Usuarios</li>
                </ol>
            </div>

        </div>
    </div>
</section>
<!--contentenido-->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-usuarios btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-usuarios" data-dismiss="modal"><i class="fas fas-plus-square">Agregar Usuario</i></button>
        </div>
        <table id="tablaUsuarios" class="table table-striped table-bordered nowrap" style="width: 100%;">
            <thead class="btn-info">
                <tr>
                    <td style="width: 5%;">Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Usuario</td>
                    <td>Contraseña</td>
                    <td style="width: 10%;">Estado</td>
                    <td>Perfil</td>
                    <td style="width: 20%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

</section>

<!--VENTANA MODAL PARA REGISTRO Y ACTUALIZACION-->
<div class="modal fade" id="modal-gestionar-usuarios">

    <div class="modal-dialog modal.lg">

        <div class="modal-content">
            <!--Header-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Usuarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body del Modal-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <input type="hidden" id ="id_usu" name ="nombre_usu" value = "">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" name="nombre_usu" id="txtNombre_Usu" placeholder="Ingrese el Nombre Usuario">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Apellido:</label>
                            <input type="text" class="form-control" name="apellido_usu" id="txtApellido_Usu" placeholder="Ingrese el Apellido Usuario">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Usuario:</label>
                            <input type="text" class="form-control" name="usuario" id="txtUsuario" placeholder="Ingrese el Usuario">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="">Contraseña:</label>
                            <input type="text" class="form-control" name="clave" id="txtClave" placeholder="Ingrese la Clave">
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="from-groud">
                            <label for="ddlEstado">Estado</label>
                            <select name="estatus" id="ddlEstado" class="form-control select2bs4" >
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="from-groud">
                            <label for="ddlEstadoP">Perfil</label>
                            <select name="perfil" id="ddlPerfilP" class="form-control select2bs4" >
                                <option value="1">Administrador</option>
                                <option value="0">Trabajador</option>

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

         var accion = "";
        //AQUI LLAMAMOS EL MENSAJE DE INFORMACION...
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
         //Aqui mostramos los datos en la tabla....
        var table = $('#tablaUsuarios').DataTable({
             //aqui se cargar la tabla con el controlar..
            "ajax":{
                "url":"ajax/usuarios.ajax.php",
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
                                        "targets": 5,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                                        "sortable": false,
                                        "render": function (data, type, full, meta){

                                            if(data == 1){
                                                return "<button type ='button' class='btn btn-bloc btn-primary btn-sm'>ACTIVO</button>"
                                            }else{
                                                return "<button type ='button' class='btn btn-bloc btn-danger btn-sm'>INACTIVO</button>"
                                            }
                                        }
                                        
                                    },
                                    {
                                        //ESTE CODIGO MUESTRA DENTRO DE LA TABLA EL CAMPO ADMINISTRADOR = 1, TRABAJADOR = 0....
                                     "targets": 6,// INDICA EL NUMERO DE LA COLUMNA DONDE SE VA COLOCAR EL EFECTO..
                                        "sortable": false,
                                        "render": function (data, type, full, meta){

                                            if(data == 1){
                                                return "<button type ='button' class='btn btn-bloc btn-primary btn-sm'>ADMINISTRADOR</button>"
                                            }else{
                                                return "<button type ='button' class='btn btn-bloc btn-danger btn-sm'>TRABAJADOR</button>"
                                            }
                                        }
                                        
                                    },
                
                {
                    "targets": 7,
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
                        {"data":"id_usu"},
                        {"data":"nombre_usu"},
                        {"data":"apellido_usu"},
                        {"data":"usuario"},
                        {"data":"clave"},
                        {"data":"estatus"},
                        {"data":"perfil"},
                        {"data":"accion"}
                ]

        });
         //CODIGO PARA ABREGAR UN REGISTRO DE RODEO..
        $(".btn-agregar-usuarios").on('click',function(){
            
            accion = "registrar";
           
        });
        //CODIGO PARA ELIMINAR EL REGISTRO DE RODEO..
        $('#tablaUsuarios tbody').on('click','.btnEliminar',function(){

            var data = table.row($(this).parents('tr')).data();
            //$('#editId').val(data[0])
            var id_usu = data["id_usu"];

            var datos = new FormData();
            datos.append('accion',"eliminar")
            datos.append('id_usu',id_usu);

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
        $('#tablaUsuarios tbody').on('click','.btnEditar',function(){

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

                var id_usu = $("#id_usu").val(),
                    nombre_usu =$("#txtNombre_Usu").val();
                    apellido_usu =$("#txtApellido_Usu").val();
                    usuario =$("#txtUsuario").val();
                    clave =$("#txtClave").val(); 
                    estatus = $("#ddlEstado").val();
                    perfil = $("#ddlPerfilP").val();

                var datos = new FormData();
                    datos.append('id_usu',id_usu);
                    datos.append('nombre_usu',nombre_usu);
                    datos.append('apellido_usu',apellido_usu);
                    datos.append('usuario',usuario);
                    datos.append('clave',clave);
                    datos.append('estatus',estatus);
                    datos.append('perfil',perfil);
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
                            url:"ajax/usuarios.ajax.php",
                            method:"POST",
                            data: datos,
                            cache:false,
                            contentType:false,
                            processData:false,
                            success: function(respuesta){

                                //ESTA FUNCION ES PARA OCULTAR EL MODAL..
                                $("#modal-gestionar-usuarios").modal('hide');
                                //AQUI RECARGAMOS LA TABLA..
                                table.ajax.reload(null,false);

                                //PARA LIMPIAR LOS CAMPOS DEL MODAL
                                $("#id_usu").val("");
                                $("#txtNombre_Usu").val("");
                                $("#txtApellido_Usu").val("");
                                $("#txtUsuario").val("");
                                $("#txtClave").val("");
                                $("#ddlEstado").val([1]);
                                $("#ddlPerfilP").val([1]);

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