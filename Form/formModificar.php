
<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action="../Server/Modificaciones.php" method="POST" enctype="multipart/form-data">
		<div class="container-select">
			<?php
			echo getUsuarioUsersNamesModificar();
			?>
			<div id="modalModificar" class=""></div>
		</div>

		Campos a modificar:<br>

		<div class="grupoInputsCambiar">
			<div class="imagenUsuario">
				<img onclick="seleccionarArchivoModificar()" id="imgPerfilModificar" src="../images/fotoPerfil.png"
					alt="">
				<input type="file" name="foto" class="inputFileModificar">
			</div>
			<div class="grupoInputsModificar">

				<label class="labelInput">
					<input type="text" class="cambioInput" id="apellido" placeholder="" name="apellido" required>
					<spam class="spanInput">Apellido</spam>
				</label>

				<label class="labelInput">
					<input type="text" class="cambioInput" id="nombre" placeholder="" name="nombre" required>
					<spam class="spanInput">Nombre</spam>
				</label>

				<input type="text" id="fecha" placeholder="" name="fecha" required>

				<div class="btn-submit">
					<input type="submit" class="btn-modificar" value="Actualizar el Holocrón">
				</div>
			</div>
		</div>
	</form>
</div>