<?php
include_once '../../../config/Conexion.php';
$con=new Conexion();

$consulta="SELECT * FROM tblTemas ORDER BY idTema DESC ";
$stm=$con->conectar()->prepare($consulta); 
$stm->execute();
$datos=$stm->fetchAll();



?>




<div class="card-header">
    <h3 class="card-title">Registro de los Temas en el Sistema</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador=1;
            foreach ($datos as $value) {
                
                ?>
                <tr>
                    <td><?=  $contador++;?></td>
                    <td><?= $value['descripcion']?></td>
                    <td>
                        <?php
                            if($value['estado']==1){
                                ?>
                                    <span class="badge bg-success">Activo</span>
                                <?php
                            }else{
                                ?>
                                    <span class="badge bg-danger">Inactivo</span>
                                <?php
                            }
                        ?>
                    </td>
                    
                    <td class="text-center py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                            <button  class="btn btn-info"  btn-warning"
                                data-toggle="modal" data-target="#ModalEditarTema"
                                onclick="obtenerTema(<?php echo $value['idTema']?>)">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button type="button"
                                onclick="obtenerTemaEliminar(<?php echo $value['idTema']?>)"
                                class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                           
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false,
       "autoWidth": false
    });
  });
</script>