<div class="form">
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
                    <img src="./imagen/Estrellita.png" alt="Mostrar" id="iconoOjo">
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
</script>
