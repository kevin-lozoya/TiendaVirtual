{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Registro</h2>
  </div>
  <div class="card">
    <div class="card-body">
      <form action="signin.php" method="post">
        <h5 class="card-title">Datos de Usuario</h5>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre">Nombre de Usuario</label>
            <input name="nick" required type="text" class="form-control" id="nick" placeholder="Nombre de Usuario">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Correo Electrónico</label>
            <input name="email" required type="email" class="form-control" id="email" placeholder="Correo electrónico">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Contraseña</label>
            <input name="password" type="password" required class="form-control" id="password" placeholder="Contraseña">
          </div>
          <div class="form-group col-md-6">
            <label for="passwordConfirm">Confirmar contraseña</label>
            <input name="passwordconfirm" type="password" required class="form-control" id="passwordConfirm" placeholder="Contraseña">
          </div>
        </div>
        <hr>
        <h5 class="card-title">Datos de Envío</h5>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombrecompleto">Nombre completo</label>
            <input name="fullname" type="text" class="form-control" id="fullname">
          </div>
          <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input name="direccion" type="text" class="form-control" id="direccion">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="ciudad">Ciudad</label>
            <input name="ciudad" type="text" class="form-control" id="ciudad">
          </div>
          <div class="form-group col-md-4">
            <label for="provincia">Provincia</label>
            <input name="provincia" type="text" class="form-control" id="provincia">
          </div>
          <div class="form-group col-md-2">
            <label for="codigoPostal">CP</label>
            <input name="cp" type="text" class="form-control" id="codigoPostal">
          </div>
        </div>
        <button type="submit" class="btn btn-tienda">Registrar</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}