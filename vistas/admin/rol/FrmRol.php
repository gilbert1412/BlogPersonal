
<br><br>
    <!-- Main content -->
    <section class="content">
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalRol">
        Agregar Nuevo Rol
      </button>
    </section>
    <br>
    <!-- /.content -->

    <!-- Tabla-->
    <div class="card" id="cargarTablaRol">
      <?php include 'tblRol.php';?>
    </div>
    <!-- Fin Tabla-->
    

    <div class="modal fade" id="modalRol">
          <div class="modal-dialog">
            <div class="modal-content bg-secondary">
              <div class="modal-header">
                <h4 class="modal-title">Nuevo Rol</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="post">
                <div class="modal-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Adminis...">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-outline-light">Save changes</button>
                </div>
              </form>
            </div>
          
          </div>
          
      </div>