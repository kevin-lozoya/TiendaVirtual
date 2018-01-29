{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Registro</h2>
  </div>
  <div class="card">
    <div class="card-body">
      <form>
        <h5 class="card-title">Datos de Usuario</h5>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre de Usuario">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Contraseña">
          </div>
          <div class="form-group col-md-6">
            <label for="passwordConfirm">Confirmar contraseña</label>
            <input type="password" class="form-control" id="passwordConfirm" placeholder="Contraseña">
          </div>
        </div>
        <hr>
        <h5 class="card-title">Datos de Envío</h5>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombrecompleto">Nombre completo</label>
            <input type="text" class="form-control" id="nombrecompleto">
          </div>
          <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad">
          </div>
          <div class="form-group col-md-4">
            <label for="provincia">Provincia</label>
            <input type="text" class="form-control" id="provincia">
          </div>
          <div class="form-group col-md-2">
            <label for="codigoPostal">CP</label>
            <input type="text" class="form-control" id="codigoPostal">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="recuerdame">
            <label class="form-check-label" for="recuerdame">
              Recuérdame
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-tienda">Acceder</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}