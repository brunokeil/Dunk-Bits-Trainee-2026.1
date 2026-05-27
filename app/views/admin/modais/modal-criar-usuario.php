<div class="modalUser close" id="createModal">
  <span id="header">
    <h1>CRIAR USUÁRIO</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </span>

  <form action="admin-users/create" method="post">

    <div class="userProfilePicture">
      <img
        src="/public/assets/placeholder/blank-prof-pic.png "
        class="imgProfPic" />
      <input type="file" class="profileInput" accept="image/*" hidden />
    </div>

    <div class="userInfo">
      <div class="inputGroup">
        <ion-icon name="person"></ion-icon>

        <input type="text" class="usernameInput" placeholder="*Username" id="create-username" name="name" />
      </div>

      <div class="inputGroup">
        <ion-icon name="mail"></ion-icon>

        <input type="text" class="emailInput" placeholder="*E-mail" id="create-email" name="email" />
      </div>

      <div class="inputGroup">
        <ion-icon name="lock-closed"></ion-icon>

        <input type="password" class="passwordInput" placeholder="*Senha" id="create-senha" name="password" />
      </div>
      <div class="inputGroup">
        <ion-icon name="lock-closed"></ion-icon>

        <input
          type="password"
          class="passwordInput"
          placeholder="*Confirme a Senha" id="create-senha-confirm" />
      </div>
    </div>
    <div class="inputGroup">
      <label class="questionAdm">
        Administrador
      </label>


      <input
        type="checkbox"
        id="create-admin"
        name="is_admin"
        value="1" />

    </div>

    <div class="footerButtons">
      <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
      <button class="primaryBtn">CRIAR</button>
    </div>
  </form>
</div>