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
            <h1>Registrar Nueva Persona</h1>

            <form action="guardarPersona" method="POST" class="form">
                <div class="form-display">
                    <div class="field">
                        <label for="nombre">Nombre</label>
                        <input class="input" type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="field">
                        <label for="apellido">Apellido</label>
                        <input class="input" type="text" id="apellido" name="apellido" required>
                    </div>

                    <div class="field">
                        <label for="edad">Edad</label>
                        <input class="input" type="number" id="edad" name="edad" min="0" required>
                    </div>

                    <div class="field">
                        <label for="correo">Correo</label>
                        <input class="input" type="email" id="correo" name="correo" required>
                    </div>
                </div>

                <button type="submit" class="btn">Guardar</button>
            </form>
        </section>

        <?php if (isset($errores) && !empty($errores)): ?>
            <section class="card card-error">
                <h2>Errores</h2>
                <ul class="error-list">
                    <?php foreach ($errores as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        <?php endif; ?>

        <section class="card">
            <h2>Lista de Personas</h2>
            <ul class="people-list">
                <?php foreach ($personas as $p): ?>
                    <li class="people-item">
                        <span class="people-name">
                            <?= htmlspecialchars($p['nombre']) ?> <?= htmlspecialchars($p['apellido']) ?>
                        </span>
                        <span class="people-meta">
                            <?= htmlspecialchars($p['correo']) ?> · <?= htmlspecialchars($p['edad']) ?> años
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

    </main>
</body>

</html>
