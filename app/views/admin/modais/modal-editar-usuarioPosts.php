<div class="modalUser close" id="editModal">
    <div id="header">
        <h1>EDITAR USUÁRIO</h1>
    </div>

    <form action="postsadmin/editUser" method="post" enctype="multipart/form-data" id="form-edit">

        <input type="hidden" id="edit-id" name="id">

        <div class="userProfilePicture">
            <img
                class="imgProfPic" />
            <input type="file" name="imagem" class="profileInput" accept="image/*" hidden />
            <ion-icon class="icone-img" name="image-outline"></ion-icon>
            <h4 class="txt-img">
                Arraste sua imagem aqui
                ou clique para escolher um arquivo
            </h4>

        </div>

        <div class="userInfo">
            <div class="inputGroup">
                <ion-icon name="person"></ion-icon>

                <input type="text" class="usernameInput" placeholder="*Username" id="edit-username" name="name" aria-label="*Username" />
            </div>

            <div class="inputGroup">
                <ion-icon name="mail"></ion-icon>

                <input type="email" class="emailInput" placeholder="*E-mail" id="edit-email" name="email" aria-label="*E-mail" />
            </div>

            <div class="inputGroup">
                <ion-icon name="lock-closed"></ion-icon>

                <input type="password" class="passwordInput" placeholder="*Senha" id="senha2" name="password" arial-label="*Senha" />

                <ion-icon name="eye-off-outline" class="olho" id="olhoSenha2"></ion-icon>
            </div>
        </div>

        <div class="footerButtons">
            <button type="button" class="closeModalBtnPosts cancelBtnPosts">CANCELAR</button>
            <button class="primaryBtn" id="editar-usuario">EDITAR</button>
        </div>
    </form>
</div>