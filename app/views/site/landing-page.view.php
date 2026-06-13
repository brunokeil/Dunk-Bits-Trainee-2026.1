<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dunk Bit's</title>
    <link rel="stylesheet" href="../../../public/css/footer.css" />
    <link rel="stylesheet" href="../../../public/css/navbar.css" />
    <link rel="icon" href="/public/assets/logo_zoom.png" />
    <link rel="stylesheet" href="/public/css/landing-page.css" />
  </head>
  <body>
    <?php @require "navbar.view.php"?>
    <img src="/public/assets/landing-page-images/cesta-fundo-landing.png" id="bg-basket" />
    <section id="hero-section">
      <div id="text">
        <h1>DUNK BIT'S</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet
          consectetur adipiscing elit quisque faucibus.
        </p>
      </div>
      <div id="call-to-action">
        <button id="btn-posts">POSTS</button>
        <button id="btn-sobre">SOBRE</button>
      </div>
    </section>
    <section id="posts">
      <h1>ACOMPANHE A COMUNIDADE</h1>
      <div id="posts-carrossel">
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
        <div id="card"><img src="/public/assets/code-logo.png" /></div>
      </div>
    </section>
    <section id="about">
      <img src="/public/assets/logo_dunkbits_sombreada.png" />
      <div id="text">
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
    <img src="/public/assets/landing-page-images/circulo-fundo-landing.png" id="bg-ball" />
    <?php @require "footer.view.php"?>
  </body>
</html>
