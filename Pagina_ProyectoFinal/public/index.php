<?php
require_once __DIR__ . '/../src/config/config.php';
require_once __DIR__ . '/../src/config/functions.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Sitio Web</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/output.css">
</head>

<body>

    <?php include __DIR__ . '/views/layouts/header.php'; ?>

    <main>

        <section class="hero">
            <img src="files/fondo.jpg" alt="Lancha en la playa">
        </section>

        <h1>Faby Tour’s</h1>

        <div class="contenido">

            <div class="texto">
                <h2>Bienvenidos a Faby Tour's</h2>
                <p>Tu aventura en el mar, comienza aquí.</p>

                <p>
                    En Faby Tours te llevamos a descubrir los mejores destinos de pesca,
                    ya seas principiante, aficionado o un pescador experimentado.
                    Organizamos tours personalizados que combinan emoción, naturaleza
                    y una experiencia única en cada salida.
                </p>

                <p>
                    Con guías expertos, equipos de calidad y un profundo respeto por el 
                    entorno natural, te garantizamos momentos inolvidables y capturas
                    dignas de recordar. Desde tranquilas jornadas en lagunas y ríos,
                    hasta salidas al mar abierto en busca de trofeos, tenemos el tour
                    perfecto para ti.
                </p>

                <p>
                    Explora, aprende y disfruta con nosotros.  
                    <a href="#">Faby Tours</a> — Más que pescar, es vivir la experiencia.
                </p>
            </div>

            <div class="imagen">
                <img src="files/dorado.jpg" alt="Pez saltando del agua">
                <button class="btn">▶ Conoce más</button>
            </div>

        </div>

    </main>

    <?php include __DIR__ . '/views/layouts/footer.php'; ?>

</body>
</html>
