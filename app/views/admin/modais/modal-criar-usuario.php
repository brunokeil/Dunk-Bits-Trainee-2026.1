<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modal</title>

    <link rel="stylesheet" href="/public/css/modais-usuarios.css" />

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <div class="modal-container">
      <div class="modalUser" id="createModal">
        <span id="header">
          <h1>CRIAR USUÁRIO</h1>
          <button class="closeModalBtn terciaryBtn">X</button>
        </span>

        <div class="userProfilePicture">
          <img
            src="/public/assets/placeholder/blank-prof-pic.png "
            class="imgProfPic"
          />
          <input type="file" class="profileInput" accept="image/*" hidden />
        </div>

        <div class="userInfo">
          <div class="inputGroup">
            <ion-icon name="person"></ion-icon>

            <input type="text" class="usernameInput" placeholder="*Username" />
          </div>

          <div class="inputGroup">
            <ion-icon name="mail"></ion-icon>

            <input type="text" class="emailInput" placeholder="*E-mail" />
          </div>

          <div class="inputGroup">
            <ion-icon name="lock-closed"></ion-icon>

            <input type="password" class="passwordInput" placeholder="*Senha" />
          </div>
          <div class="inputGroup">
            <ion-icon name="lock-closed"></ion-icon>

            <input
              type="password"
              class="passwordInput"
              placeholder="*Confirme a Senha"
            />
          </div>
        </div>

        <div class="footerButtons">
          <button class="closeModalBtn cancelBtn">CANCELAR</button>
          <button class="primaryBtn">CRIAR</button>
        </div>
      </div>
    </div>
  </body>
</html>
