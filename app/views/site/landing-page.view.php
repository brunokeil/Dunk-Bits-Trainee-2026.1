<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dunk Bit's</title>
  <link rel="stylesheet" href="../../../public/css/footer.css" />
  <link rel="stylesheet" href="../../../public/css/navbar.css" />
  <link rel="stylesheet" href="../../../public/css/api-nba.css" />
  <link rel="stylesheet" href="/public/css/landing-page.css" />
  <link rel="icon" href="/public/assets/logo_zoom.png" />
</head>

<body>
  <?php @require "navbar.view.php" ?>
  <main>

    <img src="/public/assets/landing-page-images/cesta-fundo-landing.png" id="bg-basket" />
    <section class="hero-section" id="hero">
      <div class="text">
        <h1>DUNK BIT'S</h1>
        <p>
          O universo do basquete em um só lugar.
          <br />
          Das quadras às telas.
        </p>
      </div>
      <div id="call-to-action">
        <a class="primaryBtn" href="/lista-posts">POSTS</a>
        <a class="terciaryBtn" href="#sobre">SOBRE</a>
      </div>
    </section>


    <?php
    require("app/views/site/api-nba.php");
    ?>

    <section class="posts">
      <h1>ACOMPANHE A COMUNIDADE</h1>
      <div class="carrossel slider">
        <button class="chevette left-arrow" id="carroLeftArrow">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>

        <div class="slider-content">
          <!-- php foreach start -->
          <?php foreach (array_reverse($posts) as $p): ?>
            <a class="card" href="/post-individual?post=<?= $p->id ?>&page=landingpage">
              <img src="<?= $p->imagem_exibicao ?>" alt="<?= $p->title ?>" class="card-imagem">

              <div class="card-footer">
                <h2 class="card-titulo-fixo"><?php echo $p->title; ?></h2>
              </div>

              <div class="card-overlay">
                <h2 class="card-titulo-overlay"><?php echo $p->title; ?></h2>
                <p class="card-autor"><?php echo $p->authorData->name; ?></p>
                <p class="card-descricao"><?php echo $p->content; ?></p>
              </div>
            </a>
          <?php endforeach ?>

          <!-- php foreach end -->
        </div>

        <button class="chevette right-arrow" id="carroRightArrow">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>

      </div>
      <div class="radio-auto">
        <label class="radio-btn"></label>
      </div>
    </section>
    <section class="about" id="sobre">
      <img src="/public/assets/logo_dunkbits_sombreada.png" />
      <div class="text">
        <h1>QUEM SOMOS?</h1>
        <p>
          O Dunk Bit's é a arquibancada virtual para quem não tira a cabeça do jogo.
          Nascemos da paixão pelo barulho da bola quicando no asfalto e pelo som perfeito
          da rede no estouro do cronômetro. Nosso espaço foi criado para conectar fanáticos
          que vivem o basquete em todas as suas formas: seja estudando as táticas da NBA,
          acompanhando a cultura de rua ou amassando o aro nos videogames.
          <br />
          <br />
          Com análises dinâmicas e histórias que mostram a verdadeira alma do jogo,
          construímos um espaço para quem vibra a cada lance, a cada enterrada e a cada
          pixel da tela.
      </div>
    </section>
    <img src="/public/assets/landing-page-images/circulo-fundo-landing.webp" id="bg-ball" />
  </main>
  <?php @require "footer.view.php" ?>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="../../../public/./js/landing-page.js"></script>
  <script src="../../../public/./js/landing-carrossel.js"></script>
</body>

</html>