<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/public/css/admin-users.css" />
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
          <div class="input-de-busca">
            <input
              class="elemento-input"
              type="text"
              placeholder="Pesquisar" />

            <div class="botao-lupa">
              <img src="/public/assets/lupa.png" />
            </div>
          </div>

          <button class="botao-criar-usuario">
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
                <tr class="row-tabela">
                  <td><?php echo $u->id; ?></td>
                  <td><?php echo $u->name; ?></td>
                  <td class="info-email"><?php echo $u->email; ?></td>

                  <td>
                    <div class="botoesdeacao">
                      <button class="btnVisuPostADM">
                        <ion-icon name="eye-outline"></ion-icon><?= $u->id?> 
                      </button>

                      <button class="btnEditPostADM">
                        <ion-icon name="pencil-outline"></ion-icon><?= $u->id?>
                      </button>

                      <button class="btnDeletePostADM">
                        <ion-icon name="trash-bin-outline"></ion-icon><?= $u->id?>
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

      <div class="carrossel">
        <button class="seta-esquerda">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>

        <div class="paginacao">
          <p class="visao-pag">1</p>
        </div>

        <button class="seta-direita">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
    </div>
  </div>

  <?php
  foreach ($usuarios as $u):
    //MUDAR ISSO DEPOIS, ISSSO ESTA MUITO ERRADO (mas no tutorial estava assim)
    require("/home/jope/Code/codejr/trainee/Dunk-Bits-Trainee-2026.1/app/views/admin/modais/modal-view-usuario.php");
    require("/home/jope/Code/codejr/trainee/Dunk-Bits-Trainee-2026.1/app/views/admin/modais/modal-editar-usuario.php");
    require("/home/jope/Code/codejr/trainee/Dunk-Bits-Trainee-2026.1/app/views/admin/modais/modal-deletar-usuario.php");
  endforeach
  ?>

  <script src="/public/js/admin-users.js"></script>


</body>

</html>