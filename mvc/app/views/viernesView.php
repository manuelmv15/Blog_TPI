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


    <section class="card">
        <h1>Bingo</h1>
        <p>Este dia se jugaron varias partidas de bingo en el auditorio 1 de la universidad.</p>
        <p>Los ganadores recibieron premios como el de las uñas acrilicas, gorras, camisas, entre otros premios.</p>
        <p>Tambien despues dedl bingo se dieron los diplomas de participacion de la feria de logros y dieron los premios de los mejores proyectos y diferentes actividades del dia anterior</p>
    </section>
     <section class="card">
        <h1>Tonero de Clash of Royal</h1>
        <p>Tambien se llevo acabo el torneo del videojuego Clash of Royal</p>
    </section>

    <section class="card">
        <h1>Fiesta en Ibiza</h1>
        <p>No me dejaron ir</p>
    </section>

<section class="card">
            <h1>Imagenes</h1>

            <div class="carousel" id="carousel">
                <div class="carousel-viewport">
                    <div class="carousel-track">
                        <?php for ($i = 1; $i <= 14; $i++): ?>
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
