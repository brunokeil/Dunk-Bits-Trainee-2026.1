<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dunk Bit's</title>
  <link rel="stylesheet" href="../../../public/css/footer.css" />
  <link rel="stylesheet" href="../../../public/css/navbar.css" />
  <link rel="stylesheet" href="/public/css/landing-page.css" />
  <link rel="icon" href="/public/assets/logo_zoom.png" />
</head>

<body>
  <?php @require "navbar.view.php" ?>
  <main>

    <img src="/public/assets/landing-page-images/cesta-fundo-landing.png" id="bg-basket" />
    <section id="hero-section">
      <div class="text">
        <h1>DUNK BIT'S</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. 
          <br />
          Dolor sit amet consectetur adipiscing elit quisque faucibus.
        </p>
      </div>
      <div id="call-to-action">
        <button class="primaryBtn">POSTS</button>
        <button class="terciaryBtn">SOBRE</button>
      </div>
    </section>
    <section id="posts">
      <h1>ACOMPANHE A COMUNIDADE</h1>
      <div class="carrossel">
        <div class="card"><img src="/public/assets/code-logo.png" /></div>
      </div>
      <div>
        <input type="radio" />
        <input type="radio" />
        <input type="radio" />
        <input type="radio" />
      </div>
    </section>
    <section id="about">
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
</body>

</html>