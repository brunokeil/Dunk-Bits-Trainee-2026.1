<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Post Individual</title>
  <link rel="stylesheet" href="/public/css/post-individual.css" />
</head>

<body>

  <main class="container">
    <section class="post">
      <img
        class="imagem-post-obj imagem-post"
        src="<?php echo $post->cover_image ?>" />

      <div class="conteudo">
        <div class="texto">
          <h1 class="titulo"><?php echo $post->title ?></h1>

          <p class="descricao">
            <?php echo $post->content; ?>

          </p>
        </div>

        <div class="footer">
          <div class="metadados">
            <span><?php

                  $author = App\Core\App::get('database')->selectOne('users', $post->author);
                  echo $author->name;

                  ?>
            </span>
            <span><?php echo $post->created_at; ?></span>
          </div>

          <div class="botoes-de-compartilhar">
            <a>
              <img
                class="compartilhar-post"
                src="/public/assets/icons/whatsapp.png" />
            </a>
            <a>
              <img
                class="compartilhar-post"
                src="/public/assets/icons/instagram.png" />
            </a>
            <a>
              <img
                class="compartilhar-post"
                src="/public/assets/icons/facebook-messenger.png" />
            </a>
            <a>
              <img
                class="compartilhar-post"
                src="/public/assets/icons/twitter.png" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="comentarios">
      <div class="caixa-de-comentarios">
        <input
          type="text"
          id="input-comentario"
          placeholder="Digite seu comentário" />
        <img id="botao-de-enviar" src="/public/assets/icons/sent_arrow.png" />
      </div>

      <div class="lista-de-comentarios">
        <?php foreach ($comments as $c):
          $commentAuthor = App\Core\App::get('database')->selectOne('users', $c->author);
        ?>

          <div class="comentario">
            <div class="user-infos">
              <img
                src="<?php

                      echo $commentAuthor->profile_image;

                      ?>"
                class="img-prof-picture foto-de-perfil" />
            </div>

            <div class="nome-de-usuario">
              <h4><?php echo $commentAuthor->name;; ?></h4>
            </div>

            <div class="texto-do-comentario">
              <p>
                <?php echo $c->content; ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>



    </section>
  </main>
</body>

</html>