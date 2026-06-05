<div class="modalPost" id="modalEditar">
    <div id="containerEditarPosts">
        <div id="iconeTituloEditarPosts">
            <h1 id="tituloEditarPosts">EDITAR POSTS</h1>
        </div>
        <div id="containerImagemDescricao">
            <div id="alterarImagemPost">
                <input type="file" id="arquivoImagemPost" accept="image/*">
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
        <div id="camposAlterarPost">
            <div id="alterarTitulo">
                <ion-icon name="create-outline" id="iconeAlterarTituloPost"></ion-icon>
                <input type="text" placeholder="TÍULO" id="textoAlterarTituloPost">
            </div>
            <div id="confirmarSenha">
                <ion-icon name="lock-closed-outline" id="iconeConfirmarSenhaPost"></ion-icon>
                <input type="text" id="textoConfirmarSenhaPost" placeholder="SENHA ATUAL">
            </div>
        </div>
    </div>
    <div class="modalActions">
        <button class="btnCancelarModal" onclick="fecharModal('modalEditar')">Cancelar</button>
        <button class="btnSalvarModal">Salvar</button>
    </div>
</div>