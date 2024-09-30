<div class="form">
<<<<<<< HEAD
    <h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
    <form class="altaInput" action="../Server/Altas.php" method="POST" enctype="multipart/form-data">
        <div class="grupoInputs">
            <img onclick="seleccionarArchivo()" src="../images/fotoPerfil.png" id="imgPerfil" alt="">
            <input type="file" class="inputFile" name="foto"><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="usuario" name="usuario"><br>
        </div>

        <div class="grupoInputs">
            <div style="position: relative;">
                <input type="password" placeholder="clave" name="clave" id="clave">
                <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                    <img src="../images/ojo.png" alt="Mostrar" id="iconoOjo">
                </span>
            </div><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="Apellido" name="apellido"><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="nombre" name="nombre"><br>
        </div>

        <div class="grupoInputs">
            <input type="text" placeholder="fecha" name="fecha"><br>
        </div>

        <div class="btn-submit">
            <input class="btn" type="submit" value="Transmitir al Senado"><br>
        </div>
    </form>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('clave');
    const iconoOjo = document.getElementById('iconoOjo');

    togglePassword.addEventListener('click', function () {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        iconoOjo.src = type === 'password' ? '../images/ojo.png' : '../images/ojoCerrado.png';
    });
=======
	<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="../Server/Altas.php" method="POST" enctype="multipart/form-data" onsubmit="return validarFormulario()">
		<div class="grupoInputs">
			<img onclick="seleccionarArchivo()" src="../images/fotoPerfil.png" id="imgPerfil" alt="">
			<input type="file" class="inputFile" name="foto" required><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="usuario" name="usuario" required><br>
		</div>

		<div class="grupoInputs">
			<div style="position: relative;">
				<input type="password" placeholder="clave" name="clave" id="clave" required>
				<span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
					<img src="../images/ojo.png" alt="Mostrar" id="iconoOjo">
				</span>
			</div><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Apellido" name="apellido" required><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="nombre" name="nombre" required><br>
		</div>

		<div class="grupoInputs">
			<input type="date" placeholder="fecha" name="fecha" required><br>
		</div>

		<div class="btn-submit">
			<input class="btn" type="submit" value="Grabar"><br>
		</div>
	</form>
</div>

<script>
	// Mostrar/ocultar contraseña
	const togglePassword = document.getElementById('togglePassword');
	const passwordField = document.getElementById('clave');
	const iconoOjo = document.getElementById('iconoOjo');

	togglePassword.addEventListener('click', function () {
		// Alternar entre texto y contraseña
		const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
		passwordField.setAttribute('type', type);
		
		// Cambiar el ícono del ojo
		iconoOjo.src = type === 'password' ? '../images/ojo.png' : '../images/ojoCerrado.png';
	});

	// Validar formulario
	function validarFormulario() {
		const inputs = document.querySelectorAll('input[required]');
		let formularioValido = true;

		inputs.forEach(input => {
			if (!input.value) {
				alert(`El campo ${input.placeholder} es obligatorio.`);
				formularioValido = false;
				return false;
			}
		});

		return formularioValido;
	}
>>>>>>> original
</script>
