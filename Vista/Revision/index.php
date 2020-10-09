  </nav> 
</div>

<!-- body -->
<div class="container-fluid">
  <div class="col-xl-15 col-lg-14">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="row justify-content-center">
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h2 text-gray-900 mb-4">Revisión de estado de solicitud</h1>
              </div>
              <div class="text-left">
                <span>
                  *Ingrese el número de solicitud y código de acceso</br>
                  *Revise la bandeja de entrada del correo registrado para obtener los datos de ingreso
                </span>
              </div>
              <form class="user" method="POST" name="formulario" id="formulario">
                <div class="container">
                  </br>
                  <div class="row">
                    <span>Datos de ingreso</span>
                  </div>
                  <hr>                  
                  <div class="form-group">
                    <input type="text" class="form-control" name="numSolcitud" placeholder="Número de solicitud">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="codAcceso" placeholder="Código de acceso">
                  </div>
                  <!-- <div class="form-group">
                    <input type="text" class="form-control" name="fecha" placeholder="fecha">
                  </div> -->
                  <button type="submit" data-toggle="modal" data-target="#resumenModal" name="btnRegistrarSolicitud" class="btn btn-primary btn-block">Ingresar</button>
                  <div class="form-group">
                  <p class="mb-1 text-danger">
                    <?= $datos;?>
                  </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>                  
        </div>
      </div>
    </div>
</div>