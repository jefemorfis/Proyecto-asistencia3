
<p>
  <h1 class="text-center bg-primary"> Bienvenido alumno de la  UABC </h1>
  <?php
  date_default_timezone_set('America/Tijuana');
  ?>
</p>
<br>
<br>
<div class="text-center">
  <img src="http://static.panoramio.com/photos/large/120823468.jpg"  width=1000 height=250>
</div>
<br>
  <div class="col-md-12 input-lg text-center">
    <form class="form-vertical" id="form1" name="form1" method="post" action="/CodeIgniter/index.php/User/session">
      <div class="row col-xs-12">
        <div class="form-group col-xs-2 col-xs-offset-4">
          <label for="date">ID Alumno: </label>
        </div>
        <div class="col-md-2">
          <?php echo '<input class="text-center" type="text" name="id" id="id" value="'.$id.'" readonly/>';?>
        </div>
        </div>
      <div class="form-group col-xs-2 col-xs-offset-2">
        <label for="date">Hora de Actual: </label>
      </div>
      <div class="form-group col-xs-2">
        <?php echo '<input class="text-center" type="text" name="date" id="date" value="'.$date.'" readonly/>';?>
      </div>
      <div class="form-group col-xs-2">
        <label for="final">Hora final: </label>
      </div>
      <div class="form-group col-xs-2">
        <?php echo '<input class="text-center" type="text" name="final" id="final" value="'.$final.'" readonly/>';?>
      </div>
      <div class="form-group col-xs-2 col-xs-offset-2">
        <label for="code">Codigo de Asistencia: </label>
      </div>
      <div class="form-group col-xs-2">
        <?php echo '<input class="text-center" type="text" name="code" id="code" value="'.$code.'" readonly/>';?>
      </div>
      <div class="form-group col-xs-2">
        <label for="codigo">Favor de introducir el codigo de asistencia: </label>
      </div>
      <div class="form-group col-xs-2">
        <input class="text-center" type="text" name="codein" id="codein" required/>
      </div>
      <div class="form-group col-xs-12">
        <div class="text-center">
          <button type="submit" class="btn btn-success">
            Enviar codigo
          </button>
        </div>
      </div>
    </form>
   </div>
   <form action="/CodeIgniter/index.php/User/exit_btn" method="post">
     <div style="margin-top:250px;"class="text-center">
       <button type="submit" class="btn btn-danger btn-sm" data-dismiss="modal">Salir</button>
     </div>
   </form>
