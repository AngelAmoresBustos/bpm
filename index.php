<!DOCTYPE html>
<html lang="en">
<head>
  <title>Labgenesis - BMP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">  
  <link rel="stylesheet" href="css/sweetalert.css">
</head>
<body>
  <div class="container-fluid">
		<nav class="navbar navbar-expand-lg container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
			<a class="navbar-brand" href="index.php">
				<img src="images/logo.png" style="height: 2.5rem;" alt="Labgenesis">
			</a>
      <h3>Laboratorio Génesis</h3>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  </div>
		</nav>	
  </div>
  
  <div class="container">
    <div class="pt-4 text-center">
      <h1>BUENAS PRÁCTICAS DE MANUFACTURA</h1>
    </div>
  
    <div class="row pt-3">
      <div class="col-md-3">
        <div class="card bg-warning text-center">
          <img class="card-img-top" src="images/lavarmanos.jpg" alt="Card image" id="i1">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de aseo del personal</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-success">
          <img class="card-img-top" src="images/limepazadebanios.jpg" alt="Card image" id="i2">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de limpieza y desinfección de baños</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-primary">
          <img class="card-img-top" src="images/edificios.jpg" alt="Card image"  id="i3">
          <div class="card-body text-center">
            <h4 class="card-title">Registro de limpieza y desinfección de edificios</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-danger">
          <img class="card-img-top" src="images/otro.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-center">Registro otro</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-3">
        <div class="card bg-info">
          <img class="card-img-top" src="images/SinFoto.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de .... #5</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-secondary">
          <img class="card-img-top" src="images/SinFoto.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de ..... #6</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-danger">
          <img class="card-img-top" src="images/SinFoto.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de ...... #7</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card bg-navy">
          <img class="card-img-top" src="images/SinFoto.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title text-center">Registro de ...... N</h4>
          </div>
        </div>
      </div>
    </div>   <!-- row  -->
  </div>  <!-- container  -->

  <!-- The Modal para registro de aseo de personal   -->
  <div class="modal fade" id="modalPersonal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title"><i class="fa fa-user"></i> Registro de aseo de personal</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="operario">Nombre del Operario</label>
                <input type="text" class="form-control" id="operario" nanme="operario">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" nanme="fecha">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" class="form-control" id="hora" nanme="hora">
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-6">
              <p>CABELLO RECOGIDO</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="cabello" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="cabello" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN MAQUILLAJE</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="maquillaje" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="maquillaje" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN BARBA/BIGOTE</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="barba" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="barba" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN ACCESORIOS</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="accesorios" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="accesorios" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN UÑAS CORTADAS LIMPIAS/SIN ESMALTE</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="unias" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="unias" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN LACERACIONES EN LAS MANOS</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="manos" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="manos" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>SIN PERFUME/COLONIA</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="perfume" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="perfume" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>UNIFORME LIMPIO</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="uniforme" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="uniforme" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>COFIA</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="cofia" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="cofia" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>MASCARILLA</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="mascarilla" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="mascarilla" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>ZAPATOS</p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="zapatos" type="radio" value="cumple" /> Cumple
              </p>
            </div>
            <div class="col-md-3">
              <p>
                <input class="py-2 my-auto" name="zapatos" type="radio" value="nocumple" /> No cumple
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="inconformidad">Inconformidad</label>
                <input type="text" class="form-control" name="inconformidad">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="accion">Acción correcteiva</label>
                <input type="text" class="form-control" name="accion">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="supervisor">Supervisor</label>
                <input type="password" class="form-control" name="supervisor">
              </div>
            </div>
          </div>
          
        </div>

        <!-- Modal footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary pull-lef" data-bs-dismiss="modal"><i class="fa fa-close"></i> Cancelar </button>
          <button type="button" class="btn btn-success pull-rigth" data-bs-dismiss="modal"><i class="fa fa-check"></i> Aceptar </button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal para registro de limpieza y desinfeccion de baños   -->
  <div class="modal fade" id="modalBanios">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title"><i class="fa fa-users"></i> Registro de limpieza y desinfección de baños/vestidores</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="area">Area</label>
                <input type="text" class="form-control" id="area" name="area">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="horaInicio">Hora inicio</label>
                <input type="time" class="form-control" id="horaInicio" name="horaInicio">
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-3">
              <p>TECHO</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoLimpieza" id="techoLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoDesinfeccion" id="techoDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoNoAplica" id="techoNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PAREDES</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesLimpieza" id="paredesLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesDesinfeccion" id="paredesDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesNoAplica" id="paredesNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>VENTAS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasLimpieza" id="ventanasLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasDesinfeccion" id="ventanasDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasNoAplica" id="ventanasNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PUERTAS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasLimpieza" id="puertasLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasDesinfeccion" id="puertasDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasNoAplica" id="puertasNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>MUEBLES</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesLimpieza" id="mueblesLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesDesinfeccion" id="mueblesDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesNoAplica" id="mueblesNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>DUCHAS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="duchasLimpieza" id="duchasLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="duchasDesinfeccion" id="duchasDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="duchasNoAplica" id="duchasNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>LAVAMANOS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="lavamanosLimpieza" id="lavamanosLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="lavamanosDesinfeccion" id="lavamanosDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="lavamanosNoAplica" id="lavamanosNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>INODOROS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="inodorosLimpieza" id="inodorosLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="inodorosDesinfeccion" id="inodorosDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="inodorosNoAplica" id="inodorosNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PISOS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaLimpieza" id="pisoaLimpieza">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaDesinfeccion" id="pisoaDesinfeccion">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaNoAplica" id="pisoaNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="horaFin">Hora fin</label>
                <input type="time" class="form-control" id="horaFin" name="horaFin">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="responsable">Responsable</label>
                <input type="text" class="form-control" id="responsable" name="responsable">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="firma">Firma</label>
                <input type="password" class="form-control" id="firma" name="firma">
              </div>
            </div>
          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary pull-lef" data-bs-dismiss="modal"><i class="fa fa-close"></i> Cancelar </button>
          <button type="button" class="btn btn-success pull-rigth" data-bs-dismiss="modal"><i class="fa fa-check"></i> Aceptar </button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal para registro de limpieza y desinfeccion de edificios   -->
  <div class="modal fade" id="modalEdificios">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title"><i class="fa fa-bank"></i> Registro de limpieza y desinfección de edificios</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="areaEdificios">Area</label>
                <input type="text" class="form-control" id="areaEdificios" name="areaEdificios">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="fechaEdificios">Fecha</label>
                <input type="date" class="form-control" id="fechaEdificios" name="fechaEdificios">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="horaInicioEdificios">Hora inicio</label>
                <input type="time" class="form-control" id="horaInicioEdificios" name="horaInicioEdificios">
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-3">
              <p>TECHO</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoLimpiezaEdificios" id="techoLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoDesinfeccionEdificios" id="techoDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="techoNoAplicaEdificios" id="techoNoAplicaEdificios">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PAREDES</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesLimpiezaEdificios" id="paredesLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesDesinfeccionEdificios" id="paredesDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="paredesNoAplicaEdificios" id="paredesNoAplicaEdificios">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>VENTAS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasLimpiezaEdificios" id="ventanasLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasDesinfeccion" id="ventanasDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ventanasNoAplicaEdificios" id="ventanasNoAplicaEdificios">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PUERTAS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasLimpiezaEdificios" id="puertasLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasDesinfeccionEdificios" id="puertasDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="puertasNoAplica" id="puertasNoAplica">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>MUEBLES</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesLimpiezaEdificios" id="mueblesLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesDesinfeccionEdificios" id="mueblesDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="mueblesNoAplicaEdificios" id="mueblesNoAplicaEdificios">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-3">
              <p>PISOS</p>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaLimpiezaEdificios" id="pisoaLimpiezaEdificios">
                      Limpieza
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaDesinfeccionEdificios" id="pisoaDesinfeccionEdificios">
                      Desinfección
                    </label>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pisoaNoAplicaEdificios" id="pisoaNoAplicaEdificios">
                      No aplica
                    </label>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="horaFinEdificios">Hora fin</label>
                <input type="time" class="form-control" id="horaFinEdificios" name="horaFinEdificios">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="responsableEdificios">Responsable</label>
                <input type="text" class="form-control" id="responsableEdificios" name="responsableEdificios">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="firmaEdificios">Firma</label>
                <input type="password" class="form-control" id="firmaEdificios" name="firmaEdificios">
              </div>
            </div>
          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary pull-lef" data-bs-dismiss="modal"><i class="fa fa-close"></i> Cancelar </button>
          <button type="button" class="btn btn-success pull-rigth" data-bs-dismiss="modal"><i class="fa fa-check"></i> Aceptar </button>
        </div>

      </div>
    </div>
  </div>

  <br>
  <footer class="text-center">
      <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.angelamores.com" target="_blank">Angel Amores Software Solutions</a>.</strong> All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/adminlte.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script>
    $("#i1").click(function(){$("#modalPersonal").modal("show");});
    $("#i2").click(function(){$("#modalBanios").modal("show");});
    $("#i3").click(function(){$("#modalEdificios").modal("show");});
  </script>
</body>
</html>