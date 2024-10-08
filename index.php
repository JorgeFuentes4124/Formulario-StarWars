<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <svg viewBox="0 0 1320 300">
        <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="50%" dy=".35em">En una galaxia muy muy lejana...</text>
        </symbol>  
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
    </svg>

    <div class="star-wars-container">
        <div class="star-wars-svg-text">Star Wars</div>
        <h1 class="bienvenida">En un formulario muy lejano, los jedis y siths compartian una fuente de datos para el guardado de datos personales</h1>
    </div>

    <audio id="background-music" autoplay loop>
    <source src="Starwars.mp3" type="audio/mpeg">
    Tu navegador no soporta el elemento de audio.
    </audio>

    <?php
    header("refresh:5;url=Form/Menu.php");
    exit();
    ?>
</body>
</html>