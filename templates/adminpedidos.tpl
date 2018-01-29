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
            <tr>
              <th>1</th>
              <td>01/06/2018</td>
              <td>Pendiente</td>
              <td>
                <a href="#">
                  <i class="fa fa-check text-success" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
            <tr>
              <th>2</th>
              <td>12/06/2018</td>
              <td>Enviado</td>
              <td></td>
            </tr>
            <tr>
              <th>3</th>
              <td>23/06/2018</td>
              <td>Pendiente</td>
              <td>
                <a href="#">
                  <i class="fa fa-check text-success" aria-hidden="true"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}