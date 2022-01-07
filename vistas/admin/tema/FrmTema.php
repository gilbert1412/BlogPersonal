
<br><br>
    <!-- Main content -->
    <section class="content">
      <button type="button" class="btn btn-secondary swalDefaultSuccess" data-toggle="modal" data-target="#modalTema">
        Agregar Nuevo Tema
      </button>
     
    </section>
    <br>
    <!-- /.content -->

    <!-- Tabla-->
    <div class="card" id="cargarTablaTema"></div>
    <!-- Fin Tabla-->
    

    <div class="modal fade" id="modalTema">
          <div class="modal-dialog">
            <div class="modal-content bg-secondary">
              <div class="modal-header">
                <h4 class="modal-title">Nuevo Tema</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="FrmInsertar" onsubmit="return insertarTema()" method="post" >
                <div class="modal-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                    </div>
                    <input type="text" class="form-control" name="txtTema" id="txtTema" placeholder="Agregar Tema">
                    
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                  
                  <button  class="btn btn-colorDos" name="boton">Registrar <i class="fas fa-w fa-check"></i>
                </div>
              </form>
            </div>
          
          </div>
          
      </div>

      <!--modificar Modal -->
      <div class="modal fade" id="ModalEditarTema">
          <div class="modal-dialog">
            <div class="modal-content bg-secondary">
              <div class="modal-header">
                <h4 class="modal-title">Editar Tema</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="FrmModificar" onsubmit="return modifiarTema()" method="post" >
                <div class="modal-body">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                    </div>
                    <input type="text" hidden class="form-control" name="txtIdu" id="txtIdu" placeholder="Agregar Tema">
                    <input type="text" class="form-control" name="txtTemau" id="txtTemau" placeholder="Agregar Tema">
                    
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                  
                  <button  class="btn btn-colorDos" name="boton">Editar <i class="fas fa-w fa-check"></i>
                </div>
              </form>
            </div>
          
          </div>
          
      </div>

      
    <script>
        var url = "tema/tema.js";
        $.getScript(url);
    </script>