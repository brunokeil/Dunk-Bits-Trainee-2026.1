<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Post Individual</title>
  <link rel="stylesheet" href="/public/css/post-individual.css" />
</head>

<body>

  <main>
    <section class="post">
      <img
        class="imagem-post-obj imagem-post"
        src="<?= $post->cover_image ?>" />

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
      <form action="/post-individual/comment" method="post" enctype="multipart/form-data" class="formulario-comentario">
        <input type="hidden" name="post_id" value="<?= $post->id ?>">
        <div class="caixa-de-comentarios">
          <input
            type="text"
            id="input-comentario"
            placeholder="Digite seu comentário"
            name="comment" />
          <img id="botao-de-enviar" src="/public/assets/icons/sent_arrow.png" type="submit" />
        </div>
      </form>

      <div class="lista-de-comentarios">
        <?php foreach ($comments as $c): ?>

          <div class="comentario">
            <div class="user-infos">
              <img
                src="<?php echo $c->authorData->profile_image ?: '/public/assets/placeholder/blank-prof-pic.png'; ?>"
                class="img-prof-picture foto-de-perfil" />
            </div>

            <div class="nome-de-usuario">
              <h4><?php echo $c->authorData->name; ?></h4>
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