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
            <h1>Bienvenido a mi blog sobre La Semana de Sistemas 2025</h1>
            <p>En este blog compartire mis experiencias a lo largo de la semana</p>
            <p>El blog esta creado con PHP y el patron de disenio MVC</p>
            <p>Utilizando docker y docker-compose para la containerizacion de la aplicacion</p>
        </section>

        <section class="card hero">
            <h2>Que es la semana de sistemas?</h2>
            <p>La semana de sistema es una evento llevado anio con anio por la carrera de Ingenieria de Sistemas Informaticos, esta esta organisada por la asicociacion ASEIS.</p>
            <p>Durante la semana se llevan acabo diversas actividades como lo son: ponencias, talleres y actividades recreativas</p>
        </section>

        <section class="card hero">
            <h2>Actividades que se llevaron acabo</h2>
            <ul class="list">
                <li>Lunes: Bienvenida, ponencia y Hackathon (C#)</li>
                <li>Martes: Talleres</li>
                <li>Miercoles: Torneo de futbol 11</li>
                <li>Jueves: Feria de logros y Comelona de pupusas</li>
                <li>Viernes: Bingo, Torneo de videojuegos y Fiesta.</li>
            </ul>
        </section>
    </main>

</body>

</html>
