<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="../public/css/style.css">

  <style>

    .lluvia {
      position: relative;
      height: 240px;
      border-radius: 12px;
      overflow: hidden;
      background: linear-gradient(180deg, #0b1220, #0f1f33);
    }

    .titulo-lluvia {
      position: relative;
      z-index: 3;
      pointer-events: auto;
      color: #fff;
      text-shadow: 0 2px 6px rgba(0, 0, 0, .7);
    }

    .rain-layer {
      position: absolute;
      inset: 0;
      z-index: 2;
      pointer-events: none;
    }

    /* Gota */
    .gota {
      position: absolute;
      left: var(--x);
      top: -40px;
      width: 2px;
      height: var(--h);
      opacity: var(--o, .8);
      background: linear-gradient(180deg, rgba(255, 255, 255, .95), rgba(255, 255, 255, 0));
      border-radius: 50px;
      transform: translateX(var(--wind)) rotate(var(--r, -12deg));
      animation: caer var(--dur) linear var(--delay) infinite;
      will-change: top, transform;
      z-index: 2;
      pointer-events: none;
    }

    @keyframes caer {
      to {
        top: calc(100% + 40px);
      }
    }
  </style>
</head>

<body class="site">
  <header class="navbar">
    <?php include 'partials/navbar.php'; ?>
  </header>

  <main class="container content">

    <section class="card">

      <div class="lluvia" id="lluvia">
        <h1 class="titulo-lluvia">Actividades canceladas por lluvia</h1>
        <div class="rain-layer" aria-hidden="true"></div>
      </div>
    </section>
  </main>



  <script>
    (() => {
      const root = document.getElementById('lluvia');
      if (!root) return;

      // capa dedicada a las gotas
      let layer = root.querySelector('.rain-layer');
      if (!layer) {
        layer = document.createElement('div');
        layer.className = 'rain-layer';
        root.appendChild(layer);
      }

      const N = 140;
      const rand = (a, b) => Math.random() * (b - a) + a;

      function seed() {
        layer.innerHTML = ''; // 🔹 limpiamos SOLO la capa de gotas
        for (let i = 0; i < N; i++) {
          const g = document.createElement('i');
          g.className = 'gota';
          g.style.setProperty('--x', `${rand(0,100)}%`);
          g.style.setProperty('--h', `${rand(12,26)}px`);
          g.style.setProperty('--o', `${rand(.35,.9)}`);
          g.style.setProperty('--dur', `${rand(700,1700)}ms`);
          g.style.setProperty('--delay', `${-rand(0,1700)}ms`);
          g.style.setProperty('--wind', `${rand(-14,14)}px`);
          g.style.setProperty('--r', `${rand(-18,-8)}deg`);
          layer.appendChild(g);
        }
      }

      seed();
      let t;
      window.addEventListener('resize', () => {
        clearTimeout(t);
        t = setTimeout(seed, 200);
      });
    })();
  </script>
</body>

</html>