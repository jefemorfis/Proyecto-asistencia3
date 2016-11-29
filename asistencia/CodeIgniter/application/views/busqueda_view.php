<div class="text-center bg-primary col-md-6 col-xs-offset-3"> Aqui puedes ver  la tabla de asistencia y buscar por alumno:
</div>
<br>
<h2 class="text-center bg-info">
Tabla de asistencia:
</h2>

    </div>
    <div class="bg-warning text-center">
      Busca el alumno que necesites.
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#buscar">
        Buscar
      </button>
    </div>

    <!-- Modal -->
    <form  class="" action="/CodeIgniter/index.php/User/busqueda_where" method="post">
    <div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title bg-success text-center" id="myModalLabel">Buscador de alumnos</h4>
          </div>
          <div class="modal-body text-center">
            <div class="">
                <p class="text-primary">Nombre del alumno:</p>
                <p class=""><input type="text" name="nombre" value="" required="Favor de introducir algo"></p>
                <p class="text-primary">Apellido Paterno del alumno:</p>
                <p class=""><input type="text" name="apellido" value="" required="Favor de introducir algo"></p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>

    <form action="/CodeIgniter/index.php/User/exit_btn" method="post">
      <div class="text-center">
        <button type="submit" class="btn btn-danger btn-sm" data-dismiss="modal">Salir</button>
      </div>
    </form>
    <div class="">
      <table class="table">
        <tbody>
          <tr>
            <th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Sesiones Asistidas</th><th>Sesiones Totales</th>
          </tr>
          <?php
          foreach ($res_list as $row){
            if($row->id != "1"){
              echo '<tr>';
              echo '<td>'.$row->id.'</td>'.
              '<td>'.$row->first_name.'</td>'.
              '<td>'.$row->last_name.'</td>'.
              '<td>'.$row->email.'</td>'.
              '<td>'.$row->session_now.'</td>'.
              '<td>'.$row->session_total.'</td>';
              echo '</tr>';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
