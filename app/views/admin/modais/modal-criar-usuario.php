<div class="modalUser close" id="createModal">
  <div id="header">
    <h1>CRIAR USUÁRIO</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </div>

  <form action="admin-users/create" method="post" enctype="multipart/form-data" id="form-create">

    <div class="userProfilePicture">
      <img
        class="imgProfPic" />
      <input type="file" name="imagem" class="profileInput" accept="image/*" hidden />
      <ion-icon class="icone-img" name="image-outline"></ion-icon>
      <h4 class="txt-img">
        Clique para escolher um arquivo
      </h4>
    </div>

    <div class=" userInfo">
      <div class="inputGroup">
        <ion-icon name="person"></ion-icon>

        <input type="text" class="usernameInput" placeholder="*Username" id="create-username" name="name" aria-label="*Username" />
      </div>

      <div class="inputGroup">
        <ion-icon name="mail"></ion-icon>

        <input type="email" class="emailInput" placeholder="*E-mail" id="create-email" name="email" aria-label="*E-mail" />
      </div>

      <div class="inputGroup">
        <ion-icon name="lock-closed"></ion-icon>

        <input type="password" class="passwordInput" placeholder="*Senha" id="senha1" name="password" arial-label="*Senha" />

        <ion-icon name="eye-off-outline" class="olho" id="olhoSenha1"></ion-icon>
      </div>
      <div class="inputGroup">
        <ion-icon name="lock-closed"></ion-icon>

        <input
          type="password"
          class="passwordInput"
          placeholder="*Confirme a Senha" id="confirmarsenha" aria-label="*Confirme a Senha" name="confirm-password" />

        <ion-icon name="eye-off-outline" class="olho" id="olhoConfirmarSenha"></ion-icon>
      </div>

      <div class="admin-question">
        <label class="questionAdm">
          Administrador
        </label>


        <input
          type="checkbox"
          id="create-admin"
          name="is_admin"
          value="1" />
      </div>
    </div>

    <div class="footerButtons">
      <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
      <button class="primaryBtn" id="criar-usuario">CRIAR</button>
    </div>
  </form>
</div>