{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Panel de Usuario</h2>
  </div>
  <div class="row">
    <div class="col-lg-3">
      {{include file="menu_usuario.tpl"}}
    </div>
    <div class="col-lg-9 mt-3 mt-lg-0">
      <h3>Administrar Productos</h3>
      <button type="button" class="btn btn-outline-secondary mb-3" data-toggle="modal" data-target="#modalNuevoProducto">
        Añadir Producto
      </button>
      <!-- Modal para añadir producto -->
      <div class="modal fade" id="modalNuevoProducto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Nuevo producto</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                  <label for="categoria">Categoría</label>
                  <select class="form-control" id="categoria">
                    <option>Eligen categoría</option>
                    <option>Placas Base</option>
                    <option>Procesadores</option>
                    <option>Targetas Gráficas</option>
                  </select>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="stock">Stock</label>
                    <input type="number" min="0" class="form-control" id="stock">
                  </div>
                  <div class="form-group col-6">
                    <label for="precio">Precio</label>
                    <input type="text" min="0" class="form-control" id="precio">
                  </div>
                </div>
                <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" class="form-control-file" id="imagen">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Stock</th>
              <th scope="col">Precio</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>10</td>
              <td>200€</td>
              <td>
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>10</td>
              <td>200€</td>
              <td>
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>10</td>
              <td>200€</td>
              <td>
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}