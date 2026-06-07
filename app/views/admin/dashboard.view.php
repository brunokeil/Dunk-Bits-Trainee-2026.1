<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header(header: 'Location: /login');
  }
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../public/css/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
  </head>
  <body>
    <section id="locomocao">
      <div id="navbar">
        <button id="seta">
          <span class="material-symbols-outlined">chevron_left</span>
        </button>

        <div>
          <form action="/logout" method="POST">
            <button type="submit" id="logout"> 
              LOGOUT
              <span class="material-symbols-outlined">logout</span>
            </button>
          </form>
        </div>
      </div>
      <div id="dashboard">
        <h1 id="titulo">Dashboard</h1>
      </div>
      <div id="navegacao">
        <button id="lista-usuarios">
          <span class="material-symbols-outlined">account_circle</span>
          LISTA DE USUÁRIOS (ADMIN)
        </button>
        <button id="tabela-posts">
          <span class="material-symbols-outlined">dynamic_feed</span>
          TABELA DE POSTS (ADMIN)
        </button>
      </div>
    </section>
  </body>
</html>
