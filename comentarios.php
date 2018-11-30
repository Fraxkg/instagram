<?php include('template/header.php'); ?>
	<section class="contents">
	
		<div class="menu">
			<a href="">Inicio</a>
			<a href="">Perfil</a>
			<a href="">Mensajes</a>
			<a href="">Finalizar sesión</a>
			<img src="imgs/fotoperfil.jpg" alt="imagen de perfil" name="minifotoperfil">
			<h3>Nombre de perfil</h3>
		</div>


		<div class="posts">
			<div class="post">
				<div class="headPost">
					<img src="imgs/fotoperfil.jpg" id="fotoperfilpost" alt="Imagen de perfil de usuario">
					<h3 class="comment">All of humanity's problems stem from man's inability to sit quietly in a room alone. </h3>
				</div>
					<div class="imgPost">
						<div class="intera">
							<button name="like"><i class="fas fa-bullhorn"></i></button>
							<button name="comentar"><i class="far fa-comment-dots"></i></button>
						</div>

						<img src="imgs/art.jpg" alt="Imagen de la publicación">
					</div>
					<div id="comentarios">
						<div class="com"> 
							<input class="busInput" type="text" name="commentText" placeholder="escribe tu comentario">
							<button class="PostComent">Comentar</button>

						</div>
						<h3 class="comentario">comentario</h3>

					</div>
			</div>
		</div>

		<div class="publish">
			
				<h3 class="lab">Publica una imagen</h3>
				<input class="imgsel" type="file" name="imgselect" >
				<input type="text" name="commentPost" placeholder="Comentario">
				<button class="PostBut" name="botpublicar">Publicar</button>
		</div>
	</section>
</body>
</html>