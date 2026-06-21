<form class="modalForm modalPost" id="modalCreate" action="/postsadmin/create" method="POST" enctype="multipart/form-data">
  
  <span id="header">
    <h1>CRIAR POST</h1>
    <button type="button" class="closeModalBtn terciaryBtn">X</button>
  </span>

  <div class="postInfo">
    <div class="postPicture">
      <img src="/public/assets/placeholder/posts_placeholder.webp" class="imgPost" />
      <input name="cover_image" type="file" class="imgPostPic imgProfPic" accept="image/*" id="imagemDoPost" aria-label="IMAGEM DO POST" hidden/>
    </div>
    <div class="authorData">
      <div class="inputGroup">
        <select type="text" class="postTipo" placeholder="Insira tipo do POST" id="postTipo" name="postTipo" required>
          <option value="" disabled selected>Selecione o tipo do POST</option>
          <option value="destaques">Destaques</option>
          <option value="jogos">Jogos</option>
          <option value="noticias">Notícias</option>
        </select>
      </div>
    </div>
  </div>

  <div class="postContent">

    <textarea name="tituloDoPost" maxlength="90" class="titleInput" placeholder="Titulo do post" id="viewTitle"></textarea>

    <textarea name="descricaoDoPost" class="descriptionInput" placeholder="Descrição" id="viewDescription"></textarea>

  </div>
  <div class="footerButtons">
    <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
    <button type="submit" class="primaryBtn">CRIAR</button>
  </div>
</form>