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
        <section class="card profile">

            <h1 class="profile-title">Mi Información</h1>

            <div class="profile-display">
                <div class="profile-photo hero">
                    <img
                        class="avatar "
                        src="../public/img/fotoPerfil.jpeg"
                        alt="Foto de perfil"
                </div>

                <div class="profile-details">
                    <p><strong>Nombre:</strong> Carlos Manuel Melendez Villatoro</p>
                    <p><strong>Carnet:</strong> MV23036</p>
                    <p><strong>Edad:</strong> 20 años</p>
                    <p><strong>Intereses:</strong> Programación, Música, Viajes</p>
                    <p><strong>Correo:</strong> mv23036@ues.edu.sv</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
