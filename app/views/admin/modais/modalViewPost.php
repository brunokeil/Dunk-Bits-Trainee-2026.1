<div class="modalPost" id="modalVisualizar">
    <div class="headerModal">
        <h1 class="tituloPost">POST</h1>
    </div>
    <div class="contentModal">
        <div class="imagemPost">
            <img src="#" class="imgPost" />
            <input type="file" class="imgPostInput" accept="image/*" hidden />
            <div id="autorDataPosts">
                <div class="autorPost">
                    <ion-icon name="person"></ion-icon>
                    <h5 id="userPost">Autor do Post</h5>
                </div>
                <h5 class="dataPost">01/01/0001</h5>
            </div>
        </div>

        <div class="postInfo">
            <div class="inputGroup">

                <input
                    type="text"
                    class="titleInput"
                    placeholder="Titulo do Post"
                    value="entituladoele"
                    disabled />
            </div>

            <div class="inputGroup">

                <input
                    type="textarea"
                    class="descricaoInput"
                    placeholder="Descrição"
                    value="Esta é uma descrição de exemplo para o post."
                    disabled />
            </div>

        </div>
    </div>

    <div class="footerBtns">
        <button class="btnCancelarModal closeModalBtn">Sair</button>
    </div>
</div>