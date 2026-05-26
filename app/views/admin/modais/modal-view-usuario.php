<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modal</title>

  <link rel="stylesheet" href="/public/css/modais-usuarios.css" />

  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="modal-container">
    <div class="modalUser" id="viewModal">
      <span id="header">
        <h1>PERFIL DE USUÁRIO</h1>
        <button class="closeModalBtn terciaryBtn">X</button>
      </span>

      <div class="userProfilePicture">
        <img
          src="/public/assets/placeholder/blank-prof-pic.png "
          class="imgProfPic" />
        <input type="file" class="profileInput" accept="image/*" hidden />
      </div>

      <div class="userInfo">
        <div class="inputGroup">
          <ion-icon name="person"></ion-icon>

          <input
            type="text"
            class="usernameInput"
            placeholder="Username"
            value="joaosilva"
            disabled />
        </div>

        <div class="inputGroup">
          <ion-icon name="mail"></ion-icon>

          <input
            type="text"
            class="emailInput"
            placeholder="E-mail"
            value="joaosilva@gmail.com"
            disabled />
        </div>

        <div class="inputGroup">
          <ion-icon name="lock-closed"></ion-icon>

          <input
            type="password"
            class="passwordInput"
            placeholder="Senha"
            value="senha"
            disabled />
        </div>
      </div>
    </div>
  </div>
</body>

</html>