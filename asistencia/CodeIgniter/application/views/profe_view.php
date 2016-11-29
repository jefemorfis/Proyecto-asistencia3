<p>
  <h1 class="text-center bg-primary col-md-6 col-xs-offset-3"> Que tal profesor: </h1>
</p>
<div class="text-center">
  <img src="http://facetas.ens.uabc.mx/imagenes/slides/portada/sl03.jpg"  width=500 height=150>
</div>
<br>

<h2 class="text-center bg-info">
  A continuación le presentamos lo siguiente:
</h2>

<div class="modal-footer">

  <p class="text-center bg-warning">
    ¿Desea registrar otro alumno?
    <div class="text-center">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
        Registrar
      </button>

    </div>
    <!-- Modal -->
    <form class="" action="/CodeIgniter/index.php/User/register" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title bg-success" id="myModalLabel">Registrar alumno: </h4>
          </div>
          <div style="background-color:blue;"class="modal-body text-center">
    				<div class="">
    				    <p>Nombre de Usuario:</p>
    				    <p><input type="text" name="username" value="" required="Favor de introducir algo"></p>
    				    <p>Nombre</p>
    				    <p><input type="text" name="firstname" value=""></p>
    				    <p>Apellido</p>
    				    <p><input type="text" name="lastname" value=""></p>
    				    <p>Contraseña</p>
    				    <p><input type="password" name="password" value=""></p>
    				    <p>Confirmar Contraseña</p>
    				    <p><input type="password" name="confirmpassword" value=""></p>
    				    <p>Correo Electronico</p>
    				    <p><input type="text" name="email" value=""></p>
    				    <p>Pregunta de Seguridad</p>
    				</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>
</div>
<div class="text-center">

</div>
<div class="bg-primary col-md-6 col-xs-offset-3 text-center">
  Coloca el numero de sesiones que llevan.
</div>
<br>
    <div class="text-center">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#insertar">
        Insertar
      </button>
    </div>

    <!-- Modal -->
    <form action="/CodeIgniter/index.php/User/session_total" method="post">
    <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog"  role="document">
        <div class="modal-content">
          <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title bg-success" id="myModalLabel">Numero de sesiones</h4>
          </div>
          <div class="modal-body text-center">
    				<div class="">
    				    <div class="text-primary">Cuantas sesiones  van hasta el momento</div>
    				    <div class=""><input type="text" name="sesiones" value="" required="Favor de introducir algo" required></div>
    				</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    </form>
<div class="bg-warning text-center">
  Buscador de asistencia.
</div>
  <form class="" action="/CodeIgniter/index.php/User/busqueda" method="post">
    <div class="modal-footer text-center">
      <button type="submit" class="btn btn-primary col-md-2 col-xs-offset-5">Buscar</button>
    </div>
  </form>
<form action="/CodeIgniter/index.php/User/exit_btn" method="post">
  <div class="text-center">
    <button type="submit" class="btn btn-danger btn-sm" data-dismiss="modal">Salir</button>
  </div>
</form>
