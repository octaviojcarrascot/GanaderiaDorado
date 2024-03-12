function funcionAgrargarFeedlot() {
    
                alert("funcicion guardar principal");
                var accion = "registrar";
                //AQUI LLAMAMOS EL MENSAJE DE INFORMACION...
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
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
                            url: "../ajax/feedlot.ajax.php",
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
        
     
    }