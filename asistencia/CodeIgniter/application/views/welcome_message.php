<div class="col-md-6 col-xs-offset-3">
	<h1 class="bg-primary text-center">¡Bienvenido!</h1>
	<div class="text-center">
	  <img src="http://jornadabc.mx/sites/default/files/images/uabc_4_0.jpg"  width=600 height=250>
	</div>
</div>
	<div class="col-md-6 col-xs-offset-3">
		<h3 class=" bg-success text-center">Por favor mete tus datos: </h3>
		<form id="login" method="post" action="/CodeIgniter/index.php/User/authenticate">
					<p class="text-center bg-primary"><label for="username" >Usuario:</label><input
						id="username" type="text" value=""name="username" class="form-control"> </p>
					<p class="text-center bg-primary"><label for="password">Contraseña:</label>
					<input id="password" type="password" value="" name="password" class="form-control">
					<p><button id ="bottom" type="submit" class="btn btn-primary col-md-6 col-xs-offset-3">Login</button><br/></p>
		</form>
	</div>
