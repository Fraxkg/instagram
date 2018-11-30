<?php include('template/header.php'); ?>
		<section id="body" class="contents">
			<section class="left">
				<form action="login.php" method="POST">
				<div class="inisesion">
				
					<h3 class="lab">Iniciar Sesión</h3>
				<input class="nologInput" type="text" name="email" placeholder="E-mail">
				<input class="nologInput" type="text" name="password" placeholder="Contraseña">
				<button class="nologBut">Iniciar Sesión</button>
			
				</div>
				</form>
			</section>

			<form action="registro.php" method="POST">
			<section class="registro">
				<h3 class="lab">Registrate</h3>
				<div>
					<h3>Nombre</h3>
					<input class="nologInput"  type="text" name="nombre" placeholder=" " id="unique">
				</div>
				
				<div>
					<h3>Apellidos</h3>
					<input class="nologInput"  type="text" name="apePat" placeholder="Paterno">
					<input class="nologInput"  type="text" name="apeMat" placeholder="Materno">
				</div>
					<div>
					<h3>Contraseña</h3>
					<input class="nologInput"  type="text" name="password" placeholder=" ">
					<input class="nologInput"  type="text" name="pass2" placeholder="Vuelva a ingresar la contraseña">
				</div>
				<div>
					<h3>E-mail</h3>
					<input class="nologInput"  type="text" name="email" placeholder=" " id="unique">
				</div>
				<button class="nologBut">Registrarse</button>
			</section>
		</form>
				</section>
		</section>
</body>
</html>