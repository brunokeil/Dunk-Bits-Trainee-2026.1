<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Post Individual</title>
  <link rel="stylesheet" href="/public/css/modais-usuarios.css" />
  <link rel="stylesheet" href="../../../public/css/footer.css" />
  <link rel="stylesheet" href="../../../public/css/navbar.css" />
  <link rel="stylesheet" href="/public/css/post-individual.css" />
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
  <?php @require "navbar.view.php" ?>
  <main>


    <div class="sair-pagina">
      <a href="/lista-posts?page=<?= $currentPage ?>">
        <ion-icon name="arrow-back-outline"></ion-icon>
      </a>
    </div>
    <section class="post">

      <img
        class="imagem-post-obj imagem-post"
        src="<?= $postCoverImage ?>" />




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
                  echo $author->name;

                  ?>
            </span>
            <span><?php echo $post->created_at; ?></span>
          </div>

          <div class="botoes-de-compartilhar">

            <?php
            $postUrl = urlencode(
              (isset($_SERVER['HTTPS']) ? 'https' : 'http') .
                '://' .
                $_SERVER['HTTP_HOST'] .
                $_SERVER['REQUEST_URI']
            );

            $postTitle = urlencode($post->title);
            ?>
            <a href="https://wa.me/?text=<?= $postTitle ?>%20<?= $postUrl ?>"
              target="_blank">
              <img
                class="compartilhar-post"
                src="/public/assets/icons/whatsapp.png" />
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $postUrl ?>"
              target="_blank">
              <img
                class="compartilhar-post"
                src="/public/assets/icons/facebook-messenger.png" />
            </a>
            <a href="https://twitter.com/intent/tweet?text=<?= $postTitle ?>&url=<?= $postUrl ?>"
              target="_blank">
              <img
                class="compartilhar-post"
                src="/public/assets/icons/twitter.png" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="comentarios">
      <?php if (isset($_SESSION['id'])): ?>

        <form action="/post-individual/comment" method="post" enctype="multipart/form-data" class="formulario-comentario">
          <input type="hidden" name="post_id" value="<?= $post->id ?>">
          <div class="caixa-de-comentarios">
            <input
              type="text"
              id="input-comentario"
              placeholder="Digite seu comentário"
              name="comment" />
            <button type="submit" id="botao-de-enviar">
              <img id="botao-de-enviar" src="/public/assets/icons/sent_arrow.png" />
            </button>

          </div>
        </form>
      <?php else: ?>
        <div class="caixa-login-obrigatorio">
          <p>Você precisa estar logado para comentar.</p>
          <a href="/login?redirect=<?= urlencode($_SERVER['REQUEST_URI']) ?>" class="botao-login">Fazer Login</a>
        </div>
      <?php endif; ?>

      <div class="lista-de-comentarios">
        <?php foreach ($comments as $c): ?>

          <div class="comentario" x-data="{ editando: false, texto: ' <?= htmlspecialchars($c->content, ENT_QUOTES, 'UTF-8') ?>', textoOriginal: '<?= htmlspecialchars($c->content, ENT_QUOTES, 'UTF-8') ?>' }">

            <div class="user-infos">
              <img
                src="<?php echo $c->authorData->profile_image ?: '/public/assets/placeholder/blank-prof-pic.png'; ?>"
                class="img-prof-picture foto-de-perfil" />

              <?php if ($userEhAdmin || (isset($_SESSION['id']) && $_SESSION['id'] == $c->author)): ?>
                <div class="acoes-comentario">

                  <button type="button" @click="editando = !editando" class="btn-editar-icone">
                    <ion-icon name="pencil-outline"></ion-icon>
                  </button>

                  <button
                    type="button"
                    class="btn-excluir-icone delete-comment-btn"
                    data-id="<?= $c->id ?>"
                    data-post-id="<?= $post->id ?>">
                    <ion-icon name="trash-outline"></ion-icon>
                  </button>
                </div>
              <?php endif; ?>
            </div>

            <div class="nome-de-usuario">
              <h4><?php echo $c->authorData->name; ?></h4>
            </div>

            <div class="texto-do-comentario" x-show="!editando">
              <p x-text="texto"><?php echo $c->content; ?></p>
            </div>

            <div class="form-editar-comentario" x-show="editando" x-cloak>
              <form action="/post-individual/comment/edit" method="POST">
                <input type="hidden" name="id" value="<?= $c->id ?>">
                <input type="hidden" name="post_id" value="<?= $post->id ?>">

                <input
                  type="text"
                  name="comment"
                  x-model="texto"
                  class="input-editar-comentario" />

                <div class="botoes-edicao">
                  <button type="submit" class="btn-salvar">Salvar</button>
                  <button type="button" @click="editando = false; texto = textoOriginal" class="btn-cancelar">Cancelar</button>
                </div>
              </form>
            </div>

          </div>
        <?php endforeach ?>
      </div>



    </section>

  </main>
  <?php @require "footer.view.php" ?>
  <div class="modal-container close">
    <?php

    require("app/views/admin/modais/modal-deletar-comentario.php");

    ?>

    <script src="/public/js/post-individual.js"></script>
  </div>
</body>


</html>