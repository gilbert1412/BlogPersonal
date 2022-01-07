<div class="card-header">
    <h3 class="card-title">Registro de los Roles del Sistema</h3>
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
            <tr>
                <td>1</td>
                <td>Administrador</td>
                <td><span class="badge bg-success">Activo</span></td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Autores</td>
                <td><span class="badge bg-danger">Inactivo</span></td>
                <td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                </td>
            </tr>
           

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