$(document).ready(function(){
    grilla();
});

function grilla(){
    $.ajax({
        url:'tema/tblTema.php',
        success:function(response){
            $('#cargarTablaTema').load("tema/tblTema.php");
        }
    });
}


function insertarTema(){
    
     
    $.ajax({
        type: "POST",
        url: "../../controlador/ControllerTema.php?accion=add",
        data: $('#FrmInsertar').serialize(),
        success: function (response) {
            response=response;
            if(response==1){
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                  });
                    Toast.fire({
                      icon: 'success',
                      title: 'Registro Agregado de Manera Correcta :)'
                    });
                  
                $('#modalTema').modal('hide');
                grilla();
                $('#FrmInsertar')[0].reset();
                
               
            }else{
                console.log(response);
            }

        }
    });
    return false;
}
function obtenerTema(idtemau){
    $.ajax({
        type:"POST",
        data:'idtemau=' + idtemau,
        url:"../../controlador/ControllerTema.php?accion=obtener",
       success:function(respuesta){
           respuesta=jQuery.parseJSON(respuesta);
           $('#txtIdu').val(respuesta['idTema']);
           $('#txtTemau').val(respuesta['descripcion']);
           console.log(respuesta);
           
       }

    });
    return false;
}
function modifiarTema(){

    
    $.ajax({
        type: "POST",
        url: "../../controlador/ControllerTema.php?accion=editar",
        data: $('#FrmModificar').serialize(),
        success: function (response) {
            response=response;
            if(response==1){
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                  });
                    Toast.fire({
                      icon: 'success',
                      title: 'Registro Editado de Manera Correcta :)'
                    });
                   
                $('#ModalEditarTema').modal('hide');
                grilla();
                $('#FrmModificar')[0].reset();
            }else{
                console.log(response);
            }

        }
    });
    return false;
}
function obtenerTemaEliminar(idTema){
    Swal.fire({
        title: 'Eliminar',
        text: "Seguro de eliminar el registro ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "../../controlador/ControllerTema.php?accion=eliminar",
                data:'idTema=' + idTema,
                success: function (response) {
                    response=response;
                    if(response==1){
                        Swal.fire(
                            'Eliminado',
                            'El registro se elimino Correctamente',
                            'success'
                          );   
                       
                        grilla();
                       
                    }else{
                        console.log(response);
                    }
        
                }
            });
            return false;
         
        }
      })
   
}

