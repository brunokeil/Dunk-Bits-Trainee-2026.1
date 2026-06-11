<div class="modalPost close" id="createModal">
  <span id="header">
    <h1>CRIAR POST</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </span>

  <form class="modalForm" action="admin-posts/create" method="post" enctype="multipart/form-data">

    <div class="userProfilePicture">
      <img
        src="/public/assets/placeholder/blank-prof-pic.png "
        class="imgProfPic" />
      <input type="file" name="imagem" class="profileInput" accept="image/*" hidden />
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
