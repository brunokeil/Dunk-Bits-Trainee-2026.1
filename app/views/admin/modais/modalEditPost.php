<div class="modalPost" id="modalEditar">
    <div id="headerModal">
        <h1 id="tituloEditarPosts">EDITAR POSTS</h1>
    </div>
    <div id="containerImagemDescricao">
        <div id="alterarImagemPost">
            <input type="file" class="imgPost" id="arquivoImagemPost" accept="image/*">
            <label for="arquivoImagemPost" id="caixaNovaImagem">
                <div id="iconeNovaImagem">
                    <ion-icon name="image-outline"></ion-icon>
                </div>
                <p id="textoArrasteImagem">Arraste sua imagem ou clique aqui e escolha um novo arquivo</p>
            </label>
        </div>
        <div id="alterarDescricao">
            <textarea name="descricao" placeholder="DESCRIÇÃO" id="textoAlterarDescricaoPost"></textarea>
            <label for="textoAlterarDescricaoPost" id="labelAlterarDescricaoPost"></label>
        </div>
    </div>
    <div class="inputGroup">
        <div id="alterarTitulo">
            <ion-icon name="create-outline" id="iconeAlterarTituloPost"></ion-icon>
            <input type="text" placeholder="TÍULO" id="textoAlterarTituloPost">
        </div>
        <div id="confirmarSenha">
            <ion-icon name="lock-closed-outline" id="iconeConfirmarSenhaPost"></ion-icon>
            <input type="text" id="textoConfirmarSenhaPost" placeholder="SENHA ATUAL">
        </div>
    </div>
    <div class="footerBtns">
        <button class="btnCancelarModal closeModalBtn" >Cancelar</button>
        <button class="btnSalvarModal">Salvar</button>
    </div>
</div>