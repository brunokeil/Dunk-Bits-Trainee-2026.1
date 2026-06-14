<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="../../../public/css/dashboard.css" />
</head>

<body>
  <section id="locomocao">
    <nav>
      <a href="/">
        <button id="seta">
          <ion-icon name="arrow-back-outline"></ion-icon>
        </button>
      </a>
      <a href="/logout">
        <button id="logout">
          <ion-icon name="log-out-outline"></ion-icon>
          LOGOUT
        </button>
      </a>
    </nav>
    <div id="dashboard">
      <h1 id="titulo">Dashboard</h1>
    </div>
    <div id="navegacao">
      <?php if ($ehAdmin):  ?>
        <a href="/admin-users" id="lista-usuarios">
          <ion-icon name="person-circle-outline"></ion-icon>
          LISTA DE USUÁRIOS (ADMIN)
        </a>
      <?php endif ?>

      <a href="/posts-admin" id="tabela-posts">
        <ion-icon name="albums-outline"></ion-icon>
        TABELA DE POSTS (ADMIN)
      </a>
    </div>
  </section>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>