<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de Posts</title>

  <link rel="stylesheet" href="../../../public/css/footer.css" />
  <link rel="stylesheet" href="../../../public/css/navbar.css" />
  <link rel="stylesheet" href="../../../public/css/lista-posts.css" />
</head>

<body>
  <?php @require "navbar.view.php" ?>
  <main>

    <section id="secao-barra">

      <div id="search">
        <form method="GET" action="/lista-posts" id="form-search">
          <ion-icon name="search-sharp"></ion-icon>

          <input type="text" id="search-text" placeholder="SEARCH" value="<?= $searchText ?? '' ?>" name="search" />
        </form>
        <span class="divisor-vertical">|</span>
        <img src="../../../public/assets/icons/basketball_on_fire.png" alt="Logo Basketball" id="icone-busca">
      </div>

      <form method="GET" action="/lista-posts" class="form_filtros">
        <div id="grupo-filtro">
          <div id="filtros-opcoes">
            <button type="submit" name="filtro" value="melhores" class="botao-filtro-item">Melhores Avaliados</button>
            <button type="submit" name="filtro" value="populares" class="botao-filtro-item">Populares</button>
            <button type="submit" name="filtro" value="tecnologias" class="botao-filtro-item">Tecnologia</button>
          </div>

          <button id="botao-filtro" type="button">
            <ion-icon name="filter-circle-outline"></ion-icon>
          </button>
        </div>
      </form>
    </section>

    <section id="container-titulo">
      <div id="secao-titulo">
        <h1 id="posts-recentes">POSTS RECENTES</h1>
      </div>
    </section>

    <section id="container-posts">

      <?php foreach ($posts as $p):  ?>
        <a class="card" href="/post-individual?post=<?= $p->id ?>">

          <img src="<?= $p->imagem_exibicao ?>" alt="<?= $p->title ?>" class="card-imagem">

          <div class="card-footer">
            <h2 class="card-titulo-fixo"><?php echo $p->title; ?></h2>
          </div>

          <div class="card-overlay">
            <h2 class="card-titulo-overlay"><?php echo $p->title; ?></h2>
            <p class="card-autor"><?php

                                  echo $p->authorData->name;

                                  ?></p>
            <p class="card-descricao"><?php echo $p->content; ?></p>
          </div>

        </a>

      <?php endforeach ?>

    </section>

    <?php require("app/views/site/pagination-posts-site.view.php") ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="../../../public/js/lista-posts.js"></script>

  </main>
  <?php @require "footer.view.php" ?>
</body>

</html>