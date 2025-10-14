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
        </section>

        <section class="card">
            <h1>ABC del Bitcoin</h1>
        </section>

        <section class="card">
            <h1>Inteligencia artificial generativa, de la idea a la acción</h1>
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