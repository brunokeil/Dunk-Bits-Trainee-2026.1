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
          Lorem ipsum dolor sit amet consectetur adipiscing elit.
          <br />
          Dolor sit amet consectetur adipiscing elit quisque faucibus.
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
          <?php foreach ($posts as $p): ?>
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
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque
          faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi
          pretium tellus duis convallis. Tempus leo eu aenean sed diam urna
          tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.
          <br />
          <br />
          Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut
          hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent
          per conubia nostra inceptos himenaeos.
        </p>
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