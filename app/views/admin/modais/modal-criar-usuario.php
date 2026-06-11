<div class="modalUser close" id="createModal">
  <div id="header">
    <ion-icon class="icone-titulo" name="person"></ion-icon>
    <h1>CRIAR USUÁRIO</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </div>

  <form action="admin-users/create" method="post" enctype="multipart/form-data">

    <div class="userProfilePicture">
      <img
        class="imgProfPic" />
      <input type="file" name="imagem" class="profileInput" accept="image/*" hidden />
      <ion-icon class="icone-img" name="image-outline"></ion-icon>
      <p class="txt-img">
        Selecione uma imagem
      </p>

    </div>

    <div class=" userInfo">
      <div class="inputGroup">
        <ion-icon name="person"></ion-icon>

        <input type="text" class="usernameInput" placeholder="*Username" id="create-username" name="name" />
      </div>

      <div class="inputGroup">
        <ion-icon name="mail"></ion-icon>

        <input type="email" class="emailInput" placeholder="*E-mail" id="create-email" name="email" />
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