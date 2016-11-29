<div class="">
  <table class="table">
    <tbody>
      <tr>
        <th>ID</th><th>Nombre</th><th>Ubicacion</th><th>Ambiente</th><th>Tipo de comida</th><th>Menu</th><th>Telefono</th><th>Horario</th>
      </tr>
      <?php
      foreach ($res_list as $row){
        echo '<tr>';
        echo '<td>'.$row->Id.'</td>'.
        '<td>'.$row->Nombre.'</td>'.
        '<td>'.$row->Ubicacion.'</td>'.
        '<td>'.$row->Ambiente.'</td>'.
        '<td>'.$row->Tipodecomida.'</td>'.
        '<td>'.$row->Menu.'</td>'.
        '<td>'.$row->telefono.'</td>'.
        '<td>'.$row->horario.'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
