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
      <h3>Administrar Pedidos</h3>
    
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Pedido</th>
              <th scope="col">Fecha</th>
              <th scope="col">Estado</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          {foreach $pedidos as $pedido }
            <tr>
              <th>{$pedido.id}</th>
              <td>{$pedido.fecha}</td>
              <td>{$pedido.estado}</td>
              <td>
                <button type="button" class="close float-none mr-2" data-toggle="modal" data-target="#pedido{$pedido.id}">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
                {if $pedido.estado == 'Pendiente'}
                <a href="cambiarestadopedidoenviado.php?id={$pedido.id}">
                  <i class="fa fa-check text-success" aria-hidden="true"></i>
                </a>
                {/if}
              </td>
            </tr>
            <div class="modal fade" id="pedido{$pedido.id}" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Pedido {$pedido.id}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                </div>
              </div>
            </div>
          {/foreach}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}