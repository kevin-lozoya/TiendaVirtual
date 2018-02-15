{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>{$producto.nombre}</h2>
  </div>
  <div class="row">
    <div class="col-lg-6 mb-2 mb-lg-0 text-center">
      <img class="img-fluid" src="{$producto.imagen}" alt="imagen producto" />
    </div>
    <div class="col-lg-6">
      <form action="/carrito/anyadirproducto.php" method="post">
        <div class="form-group row">
          <label class="col-sm-3">Precio:</label>
          <div class="col-sm-9">
            <span class="form-precio-producto">{$producto.precio}€</span>
          </div>
        </div>
        {if $producto.stock != '0'}
          <input type="hidden" name="id" value="{$producto.id}"/>
          <div class="form-group row">
            <label class="col-sm-3">Cantidad:</label>
            <div class="col-sm-9">
              <input class="form-control" type="number" name="cantidad" id="cantidad" value="1" min="1">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3"></label>
            <div class="col-sm-9">
              <input class="btn btn-tienda" value="Añadir al carrito" type="submit">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3">Disponibilidad:</label>
            <div class="col-sm-9">
              <span class="text-success font-weight-bold">Disponible</span>
            </div>
          </div>
        {else}
          <div class="form-group row">
            <label class="col-sm-3">Disponibilidad:</label>
            <div class="col-sm-9">
              <span class="text-danger font-weight-bold">Agotado</span>
            </div>
          </div>
        {/if}
      </form>
    </div>
  </div>
  
</div>

{include file="footer.tpl"}