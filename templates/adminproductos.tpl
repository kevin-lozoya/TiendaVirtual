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
            <form action="/db/producto/insertar.php" method="post">
              <div class="modal-header">
                <h5 class="modal-title">Nuevo producto</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="nombre" required>
                </div>
                <div class="form-group">
                  <label for="categoria">Categoría</label>
                  <select name="categoria" class="form-control" id="categoria" required>
                  {foreach $categorias as $categoria}
                    <option value="{$categoria.id}">{$categoria.nombre}</option>
                  {/foreach}
                  </select>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" min="0" class="form-control" id="stock" required>
                  </div>
                  <div class="form-group col-6">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" class="form-control" id="precio" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="imagen">URL Imagen</label>
                  <input type="text" name="imagen" class="form-control" id="imagen" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- FIN modal añadir producto -->

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
          {foreach $productos as $producto}
            <tr>
              <th scope="row">{$producto.nombre}</th>
              <td>{$producto.stock}</td>
              <td>{$producto.precio}€</td>
              <td>
                <form action="/db/producto/borrar.php" method="post">
                  <input type="hidden" name="id" value="{$producto.id}">
                  <button type="submit" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </form>                
              </td>
            </tr>
          {/foreach}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}