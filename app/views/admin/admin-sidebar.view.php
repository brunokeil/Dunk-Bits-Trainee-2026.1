<link rel="stylesheet" href="/public/css/sidebar.css" />

<aside class="closed-sidebar " id="sidebar">
  <div class="top-sidebar">
    <div class="top-top-sidebar">
      <button class="edit-user user-space-sidebar" data-profPic="<?php echo $usuarioLogado->profile_image; ?>" data-id="<?php echo $usuarioLogado->id; ?>" data-name="<?php echo htmlspecialchars($usuarioLogado->name, ENT_QUOTES, 'UTF-8'); ?>" data-email="<?php echo htmlspecialchars($usuarioLogado->email, ENT_QUOTES, 'UTF-8'); ?>" data-senha="<?php echo htmlspecialchars($usuarioLogado->password, ENT_QUOTES, 'UTF-8'); ?>">

        <?php
        if (!empty($usuarioLogado->profile_image)):
        ?>

          <img id="user-img" src="/public/assets/user_profile_pics/<?php echo $usuarioLogado->profile_image; ?>">
        <?php else: ?>
          <ion-icon id="user-icon" name="person"></ion-icon>
        <?php endif; ?>
        <div>
          <p id="user-name"><?php echo $usuarioLogado->name ?></p>
          <p id="cargo">
            <?php
            if ($usuarioLogado->is_admin) {
              echo "Admin";
            } else {
              echo "Membro";
            }
            ?>
          </p>
        </div>
      </button>
        <button class="setinha" id="toggle-sidebar-btn">
          <ion-icon id="setinha" name="chevron-back-outline"></ion-icon>
        </button>
    </div>
    <div class="admin-sidebar">
      <p>Admin</p>
      <nav class="content-sidebar">
        <ul>
          <li>
            <a href="/">
              <span class="item-sidebar">
                <ion-icon name="home-outline"></ion-icon>
                <p>Voltar à Página Inicial</p>
              </span>
            </a>
          </li>
          <li>
            <a href="/dashboard">
              <span class="item-sidebar">
                <ion-icon name="grid-outline"></ion-icon>
                <p>Acessar Dashboard</p>
              </span>
            </a>
          </li>
          <?php if ($_SESSION['is_admin'] === 1): ?>
            <li>
              <a href="/postsadmin">
                <span class="item-sidebar">
                  <ion-icon name="albums-outline"></ion-icon>
                  <p>Gerenciar Posts</p>
                </span>
              </a>
            </li>
            <li>
              <a href="/admin-users">
                <span class="item-sidebar">
                  <ion-icon name="people-outline"></ion-icon>
                  <p>Gerenciar Usuários</p>
                </span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </div>
  <div class="logout-sidebar">
    <a href="/logout" type="button" id="logout-btn">
      <ion-icon name="exit-outline"></ion-icon>
      <p>Sair</p>
    </a>
  </div>
</aside>

<script src="/public/js/sidebar.js"></script>