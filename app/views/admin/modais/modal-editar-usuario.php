<div class="modalUser close" id="editModal">
    <span id="header">
        <h1>EDITAR USUÁRIO</h1>
        <button class="closeModalBtn terciaryBtn">X</button>
    </span>

   <form action="admin-users/edit" method="post">
   <input type="hidden" id="edit-id" name="id"  />

    <div class="userProfilePicture">
        <img src="/public/assets/placeholder/blank-prof-pic.png" class="imgProfPic" />
        <input type="file" class="profileInput" accept="image/*" hidden />
    </div>

    <div class="userInfo">
        <div class="inputGroup">
            <ion-icon name="person"></ion-icon>

            <input
                type="text"
                class="usernameInput"
                placeholder="Username"
                id="edit-username" 
                value=" "
                name="name" />
        </div>

        <div class="inputGroup">
            <ion-icon name="mail"></ion-icon>

            <input
                type="text"
                class="emailInput"
                placeholder="E-mail"
                id="edit-email"
                value=" "
                name="email" />
        </div>

        <div class="inputGroup">
            <ion-icon name="lock-closed"></ion-icon>

            <input
                type="password"
                class="passwordInput"
                placeholder="Senha"
                id="edit-senha"
                value=" "
                name="password" />
        </div>

    </div>

    <div class="footerButtons">
        <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
        <button type="submit" class="primaryBtn">SALVAR ALTERAÇÕES</button>
    </div>
  </form>
</div>