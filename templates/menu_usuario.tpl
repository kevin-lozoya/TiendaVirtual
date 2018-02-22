<div class="card">
  <div class="list-group list-group-flush">
    <a href="/usuario.php" class="list-group-item btn btn-outline-secondary">Datos de usuario</a>
    {if $usuario.id_grupo == 1}
    <a href="/adminproductos.php" class="list-group-item btn btn-outline-secondary">Administrar Productos</a>
    <a href="/adminpedidos.php" class="list-group-item btn btn-outline-secondary">Administrar Pedidos</a>
    {/if}
  </div>
</div>