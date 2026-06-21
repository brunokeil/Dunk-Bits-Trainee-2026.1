<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/public/css/admin-users.css" />
  <link rel="stylesheet" href="/public/css/modais-usuarios.css" />
  <title>Admin - Usuários</title>

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

  <?php

  require("app/views/admin/admin-sidebar.view.php");

  ?>
  <main class="painel">
    <!-- <div class="painel"> -->

    <div class="componentes">
      <!-- <a href="/dashboard" class="x-sair">
          <ion-icon name="close-outline"></ion-icon>
        </a> -->
      <p class="titulo">TABELA DE USUÁRIOS</p>

      <div class="interacoes">
        <form method="GET" action="/admin-users">
          <div class="input-de-busca">
            <input
              class="elemento-input"
              type="text"
              name="search"
              placeholder="Pesquisar por Usuário"
              value="<?= $searchText ?? '' ?>" />

            <button type="submit" class="botao-lupa">
              <ion-icon class="pesquisar-botao" name="search-outline"></ion-icon>
            </button>
          </div>
        </form>

        <button class="botao-criar-usuario primaryBtn" id="createUser">
          <ion-icon name="add" class="icone-mais"></ion-icon>
          <span class="texto-criar-usuario ">CRIAR USUÁRIO</span>
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
                <td class="info-name"><?php echo htmlspecialchars($u->name, ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="info-email"><?php echo htmlspecialchars($u->email, ENT_QUOTES, 'UTF-8'); ?></td>

                <td>
                  <div class="botoesdeacao">
                    <button class="view-user"
                      data-profpic="<?php echo $u->profile_image; ?>"
                      data-id="<?php echo $u->id; ?>"
                      data-name="<?php echo htmlspecialchars($u->name, ENT_QUOTES, 'UTF-8'); ?>"
                      data-email="<?php echo htmlspecialchars($u->email, ENT_QUOTES, 'UTF-8'); ?>"
                      data-senha="<?php echo htmlspecialchars($u->password, ENT_QUOTES, 'UTF-8'); ?>">

                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="edit-user"
                      data-profpic="<?php echo $u->profile_image; ?>"
                      data-id="<?php echo $u->id; ?>"
                      data-name="<?php echo htmlspecialchars($u->name, ENT_QUOTES, 'UTF-8'); ?>"
                      data-email="<?php echo htmlspecialchars($u->email, ENT_QUOTES, 'UTF-8'); ?>"
                      data-senha="<?php echo htmlspecialchars($u->password, ENT_QUOTES, 'UTF-8'); ?>">

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

                  </div>
                </td>
              </tr>

            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- </div> -->

      <?php

      require("app/views/admin/pagination.view.php");

      ?>
  </main>
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

  <div id="dropdownGlobal" class="dropdownMenuPosts">
    <ul>
      <li><a class="dropdown-view">Visualizar</a></li>
      <li><a class="dropdown-edit">Editar</a></li>
      <li><a class="dropdown-delete">Excluir</a></li>
    </ul>
  </div>




  <script src="/public/js/admin-users.js"></script>
  <script src="/public/js/modais-usuarios.js"></script>


</body>

</html>