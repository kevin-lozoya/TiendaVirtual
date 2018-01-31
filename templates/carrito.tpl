{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Carrito</h2>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Precio Unidad</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Subtotal</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          {foreach $productos as $producto}
            <tr>
              <th scope="row"><a href="/producto.php?id={$producto.id}">{$producto.nombre}</a></th>
              <td>{$producto.precio}€</td>
              <td>{$producto.cantidad}</td>
              <td>{$producto.precio * $producto.cantidad}€</td>
              <td>
                <form action="borrarproductocarrito.php" method="post">
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
    <div class="col-lg-4">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td colspan="1" class="text-left">
              <strong>Total</strong>
            </td>
            <td colspan="1" class="text-right">
              <strong>{$precioTotal}€</strong>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="/checkout.php" class="btn btn-tienda btn-block">
        Proceder al Checkout
      </a>
    </div>
  </div>
</div>

{include file="footer.tpl"}