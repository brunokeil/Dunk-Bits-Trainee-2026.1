<div class="modalUser close" id="editModal">
    <div id="header">
        <ion-icon class="icone-titulo" name="pencil"></ion-icon>
        <h1>EDITAR USUÁRIO</h1>
        <button class="closeModalBtn terciaryBtn">X</button>
    </div>

    <form action="admin-users/edit" method="post" enctype="multipart/form-data">

        <input type="hidden" id="edit-id" name="id">

        <div class="userProfilePicture">
            <img
                class="imgProfPic" />
            <input type="file" name="imagem" class="profileInput" accept="image/*" hidden />
            <ion-icon class="icone-img" name="image-outline"></ion-icon>
            <p class="txt-img">
                Selecione uma imagem
            </p>

        </div>

        <div class="userInfo">
            <div class="inputGroup">
                <ion-icon name="person"></ion-icon>

                <input type="text" class="usernameInput" placeholder="*Username" id="edit-username" name="name" />
            </div>

            <div class="inputGroup">
                <ion-icon name="mail"></ion-icon>

                <input type="email" class="emailInput" placeholder="*E-mail" id="edit-email" name="email" />
            </div>

            <div class="inputGroup">
                <ion-icon name="lock-closed"></ion-icon>

                <input type="password" class="passwordInput" placeholder="*Senha" id="edit-senha" name="password" />
            </div>
        </div>

        <div class="footerButtons">
            <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
            <button class="primaryBtn">EDITAR</button>
        </div>
    </form>
</div>