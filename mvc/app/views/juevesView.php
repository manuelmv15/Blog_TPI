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
            <h1>Feria de logros</h1>
            <p>
                En este dia se presentaron los proyectos que realizaron los estudiates de todos los anos de la carrera de Ingenieria en Sistemas de Informacion, fue una experiencia muy interesante ya que se pudieron ver muchos proyectos innovadores y creativos. Como el proyecto del cajero UES, el bingo entre otros que tambien me parecieron muy interantes
            </p>
        </section>
        <section class="card">
            <h1>Comelona de pupusas</h1>
            <h3>Taban buenas las pupas.</h3>
            <p>Muy bueno el evento, grande el ing. Guandique comiendose 16 pupusas.</p>
        </section>
        <section class="card">
            <h1>Imagenes</h1>

            <div class="carousel" id="carousel">
                <div class="carousel-viewport">
                    <div class="carousel-track">
                        <?php for ($i = 1; $i <= 34; $i++): ?>
                            <div class="slide">
                                <img src="../public/img/jueves/img<?= $i ?>.jpeg" alt="imagen <?= $i ?>">
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