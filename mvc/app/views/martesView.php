<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body class="site">
    <header class="navbar">
        <?php include 'partials/navbar.php'; ?>
    </header>

    <main class="container content">

        <section class="card  ">
            <h1>Taller #1 Toma de decisiones estratégicas basadas en datos</h1>
            <p>En este taller nos ensenaron como tomar deciciones en base a datos utilizando herramientas de analitica, en el ejemplo utilizo excel por ser la mas conocida, pero no es la mas efeciente ya que apartir de cierta cantidad de datos se empieza a volver lento.</p>
            <h3><strong>Un dato no hace informacion, es parte de un contexto mas amplio.</strong></h3>
            
        </section>

        <section class="card  ">
            <h1>Taller #2.2 Construyendo un CRUD en minutos con Laravel y Filament</h1>
            <p>En este taller nos mostraron como crear un CRUD de manera rapida utilizando el framework de PHP Laravel y el paquete Filament, que nos permite crear interfaces de usuario de manera sencilla y rapida.</p>
            <p>No la pude seguir paso a paso, porque iba muy rapido y no pude hacerlo, pero me parecio muy interesante como fue capas de hacer todo el proceso en poco tiempo.</p>

        </section>
        <section class="card  ">
            <h1>Taller #4 IA MULTIMODAL: creando el futuro visual e inteligente con n8n De texto a imagen que conectan y transforman</h1>
        </section>
        <section class="card">
            <h1>Imagenes</h1>

            <div class="carousel" id="carousel">
                <div class="carousel-viewport">
                    <div class="carousel-track">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <div class="slide">
                                <img src="../public/img/martes/img<?= $i ?>.jpeg" alt="imagen <?= $i ?>">
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <button class="carousel-btn prev" aria-label="Anterior">‹</button>
                <button class="carousel-btn next" aria-label="Siguiente">›</button>
            </div>

        </section>
    </main>

    <script src="../public/js/carrucel.js"></script>
</body>

</html>