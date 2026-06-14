<div class="modalPost close" id="modalCreate">
  <span id="header">
    <h1>CRIAR POST</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </span>

  <form class="modalForm" action="/postsadmin/create" method="POST" enctype="multipart/form-data">
    <div class="postInfo">
      <div class="postPicture"> 
        <input name="cover_image" type="file" class="imgPostPic imgProfPic" accept="image/*" id="imagemDoPost" aria-label="IMAGEM DO POST"/>
      </div>
      <div class="authorData">
        <div class="inputGroup">
          <select type="text" class="postTipo" placeholder="Insira tipo do POST" id="postTipo" name="postTipo" required>
            <option value="" disabled selected>Selecione o tipo do POST</option>
            <option value="highlights">highlights</option>
            <option value="jogos">jogos</option>
            <option value="noticias">noticias</option>
          </select>
        </div>
      </div>
    </div>

    <div class="postContent">

      <textarea name="tituloDoPost" class="titleInput" placeholder="Titulo do post" id="viewTitle"></textarea>

      <textarea name="descricaoDoPost" class="descriptionInput" placeholder="Descrição" id="viewDescription"></textarea>

    </div>
    <div class="footerButtons">
      <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
      <button type="submit" class="primaryBtn">CRIAR</button>
    </div>
  </form>
</div>

