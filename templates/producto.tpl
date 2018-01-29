{include file="header.tpl"}

<div id="cuerpo" class="container">
  <div class="titulo mb-4">
    <h2>Nombre producto</h2>
  </div>
  <div class="row">
    <div class="col-lg-6 mb-2 mb-lg-0 text-center">
      <img class="img-fluid" src="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/400/500?1439530880" alt="imagen producto" />
    </div>
    <div class="col-lg-6">
      <form>
        <div class="form-group row">
          <label class="col-sm-3">Precio:</label>
          <div class="col-sm-9">
            <span class="form-precio-producto">659€</span>
          </div>
        </div>
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
        <div class="form-group row">
          <label class="col-sm-3">Disponibilidad:</label>
          <div class="col-sm-9">
            <span class="text-danger font-weight-bold">Agotado</span>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3">Descripción:</label>
          <div class="col-sm-9 text-justify">
            The DualShock®4 Wireless Controller for PlayStation®4 defines the next generation of play, combining revolutionary new features with intuitive, precision controls. Improved analog sticks and trigger buttons allow for unparalleled accuracy with every move while innovative new technologies such as the multi-touch, clickable touch pad, integrated light bar, and internal speaker offer exciting new ways to experience and interact with your games. And with the addition of the Share button, celebrate and upload your greatest gaming moments on PlayStation®4 with the touch of a button. 
          </div>
        </div>
        
      </form>
    </div>
  </div>
  
</div>

{include file="footer.tpl"}