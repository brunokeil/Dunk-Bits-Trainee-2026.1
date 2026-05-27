<div class="modalUser close" id="editModal">
    <span id="header">
        <h1>EDITAR USUÁRIO</h1>
        <button class="closeModalBtn terciaryBtn">X</button>
    </span>

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
                value="joaosilva"
                id="edit-username" />
        </div>

        <div class="inputGroup">
            <ion-icon name="mail"></ion-icon>

            <input
                type="text"
                class="emailInput"
                placeholder="E-mail"
                value="joaosilva@gmail.com"
                id="edit-email" />
        </div>

        <div class="inputGroup">
            <ion-icon name="lock-closed"></ion-icon>

            <input
                type="password"
                class="passwordInput"
                placeholder="Senha"
                value="senha"
                id="edit-senha" />
        </div>

    </div>

    <div class="footerButtons">
        <button class="closeModalBtn cancelBtn">CANCELAR</button>
        <button class="primaryBtn">SALVAR ALTERAÇÕES</button>
    </div>
</div>