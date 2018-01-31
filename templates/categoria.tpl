{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo">
    <h2>Categoria: {$categoria.nombre}</h2>
  </div>
  <div class="row">
    {foreach $productos as $producto }
    <div class="col-xs-12 col-sm-6 col-md-4 my-2 tarjeta-producto">
      <div>
        <a href="/producto.php?id={$producto.id}">
          <img src="{$producto.imagen}" class="img-fluid">
        </a>
      </div>
      <div class="text-center">
        <a href="/producto.php?id={$producto.id}">
          {$producto.nombre}
        </a>
      </div>
      <div class="text-center">
        <h3>
          <strong>{$producto.precio}€</strong>
        </h3>
      </div>
    </div>
    {/foreach}
  </div>
</div>

{include file="footer.tpl"}