<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/public/css/admin-users.css" />
  <link rel="stylesheet" href="/public/css/modais-usuarios.css" />


  <link rel="sc" />
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand:wght@300;400;500;700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <div class="conteudo">
    <div class="painel">
      <div class="componentes">
        <div class="titulo">
          <p class="titulo-texto">TABELA DE USUÁRIOS</p>
        </div>

        <div class="interacoes">
          <form method="GET" action="/admin-users">
            <div class="input-de-busca">
              <input
                class="elemento-input"
                type="text"
                name="search"
                placeholder="Pesquisar"
                value="<?= $searchText ?? '' ?>" />

              <button type="submit" class="botao-lupa">
                <ion-icon class="pesquisar-botao" name="search-outline"></ion-icon>
              </button>
            </div>
          </form>

          <button class="botao-criar-usuario" id="createUser">
            <ion-icon name="add" class="add-user"></ion-icon>
            <p class="texto-criar-usuario">CRIAR USUÁRIO</p>
          </button>
        </div>

        <div class="tabela-container">
          <table class="tabela">
            <thead class="header-tabela">
              <tr>
                <th id="IdTabelaPostsADM">ID</th>
                <th id="UserTabelaPostsADM">Usuário</th>
                <th id="EmailTabelaPostsADM">Email</th>
                <th id="AcoesTabelaPostsADM">Ações</th>
              </tr>
            </thead>

            <tbody>
              <?php
              foreach ($usuarios as $u):
              ?>

                <tr class="row-tabela" id="<?php echo $u->id; ?>">
                  <td class="info-id"><?php echo $u->id; ?></td>
                  <td class="info-name"><?php echo $u->name; ?></td>
                  <td class="info-email"><?php echo $u->email; ?></td>

                  <td>
                    <div class="botoesdeacao">
                      <button class="view-user"
                        data-profpic="<?php echo $u->profile_image; ?>"
                        data-id=" <?php echo $u->id; ?>"
                        data-name="<?php echo $u->name; ?>"
                        data-email="<?php echo $u->email; ?>"
                        data-senha=" <?php echo $u->password ?>">

                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="edit-user"
                        data-profPic="<?php echo $u->profile_image; ?>"
                        data-id="<?php echo $u->id; ?>"
                        data-name="<?php echo $u->name; ?>"
                        data-email="<?php echo $u->email; ?>"
                        data-senha="<?php echo $u->password ?>">

                        <ion-icon name="pencil-outline"></ion-icon>
                      </button>

                      <button class="delete-user"
                        data-id="<?php echo $u->id; ?>">

                        <ion-icon name="trash-bin-outline"></ion-icon>
                      </button>
                    </div>

                    <div class="acoes">
                      <button class="trespontos">
                        <ion-icon
                          name="ellipsis-vertical-circle-outline"></ion-icon>
                      </button>

                      <div class="dropdownMenuPosts">
                        <ul>
                          <li><a>Visualizar</a></li>
                          <li><a>Editar</a></li>
                          <li><a>Excluir</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>

              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

      <?php

      require("app/views/admin/pagination.view.php");

      ?>
    </div>
    <div class="modal-container close">
      <?php

      require("app/views/admin/modais/modal-view-usuario.php");
      require("app/views/admin/modais/modal-editar-usuario.php");
      require("app/views/admin/modais/modal-deletar-usuario.php");

      require("app/views/admin/modais/modal-criar-usuario.php");

      if (isset($_SESSION['error_message'])) {
        require("app/views/admin/modais/modal-erro-usuario.php");
        unset($_SESSION['error_message']);
      }
      ?>


    </div>
  </div>




  <script src="/public/js/admin-users.js"></script>
  <script src="/public/js/modais-usuarios.js"></script>


</body>

</html>