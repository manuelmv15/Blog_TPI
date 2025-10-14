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


        <section class="card hero">
            <h1>Bienvenido a la sección de Lunes</h1>
            <p>En la bienvenida cantamos el himno de El Salvador. Hablo la vice decana, la cuela dijo "Estudiantes organizados defienden los derechos de los estudiantes". Tambien Jorge Luis Contreras, el ing. Diego Herrera quie exclamo "Solo nececitamos una computadora, conexion a internet y un suenio y finalizo la precidenta de la Asociacion karla Orellana." </p>
        </section>

        <section class="card">
            <h1>ABC del Bitcoin</h1>
            <p>Se hablo de los primeros pasos del bitcoin, como que tiene muchas madrigeras o temas por explorar.</p>
            <p>Se menciono una filosofia que siguen la mayoria de bitcoiners, o por la cual nacio bitcoin, la cueal es la Escuela de economia austriaca.</p>
            <p>Declaro que debemos pensar en el futuro y no en el presente en temas de dinero.</p>
            <p>La economa se mueve por el consumo de las personas, dado que genera un flujo de dinero y eso mueve la economia</p>
            <p>Bitcoin nacio con la idea de como crear una moneda que el estado o los bancos no puedan manipular</p>
            <p>y se hablo de el dinero fiat vs el btc</p>

        </section>

        <section class="card">
            <h1>Inteligencia artificial generativa, de la idea a la acción</h1>
            <p>La calidad de la respuesta es igual a la calidad del prompt</p>
            <p>Se nos menciono que no debemos competir con la IA, sino aprender a trabajar con ella.</p>
            <p>existen diferentes formas de que la IA aprenda: aprendizaje supervisado, no supervisado, hibrido y por refuerzo.</p>
            <p>Y termino la ponencioa mostrandonos como podemos automatizar tareas con IA.</p>
        </section>

        <section class="card">
            <h1>Imagenes</h1>

            <div class="carousel" id="carousel">
                <div class="carousel-viewport">
                    <div class="carousel-track">
                        <?php for ($i = 1; $i <= 25; $i++): ?>
                            <div class="slide">
                                <img src="../public/img/lunes/img<?= $i ?>.jpeg" alt="imagen <?= $i ?>">
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