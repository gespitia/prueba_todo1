<div class="modal fade" id="crearProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ingrese los datos del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/crearProducto">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">Nombre Producto</span>
                        </div>
                        <input type="text" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">Referencia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" name="referencia" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">Localización&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" name="localizacion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">Proveedor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" name="provedor_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                </div>
            </div>
              <div class="row">
                <div class="input-group input-group-sm mb-3 col-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Minimo</span>
                    </div>
                        <input type="text" name="min" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                <div class="input-group input-group-sm mb-3 col-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Maximo</span>
                    </div>
                        <input type="text" name="max" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary"/>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>

