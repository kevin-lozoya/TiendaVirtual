{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Carrito</h2>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="table-responsive">
        <table class="table">
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
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>200€</td>
              <td>2</td>
              <td>400€</td>
              <td>
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>200€</td>
              <td>2</td>
              <td>400€</td>
              <td>
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">Ordenador ASUS</th>
              <td>200€</td>
              <td>2</td>
              <td>400€</td>
              <td>
                <button type="submit" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-lg-4">
      <table class="table table-striped">
        <tbody>
          <tr class="totals key">
            <td colspan="1" class="text-left">
              <strong>Total</strong>
            </td>
            <td colspan="1" class="text-right">
              <strong>$600.000</strong>
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