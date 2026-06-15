<div class="modalPost close" id="modalViewPost-<?= $post->id ?>">

  <span id="header">
    <h1>PERFIL DE POST</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </span>

  <div id="content">

    <div class="postInfo">
      <div class="postPicture">
        <img src="<?= $post->cover_image ?>" />
      </div>
      <div class="authorData">
        <div class="inputGroup">
          <ion-icon name="person"></ion-icon>
          <input type="text" class="postAuthor" placeholder="Username" value="<?= $post->authorData->name ?>" disabled id="viewAuthor" />
        </div>
        <div class="inputGroup">
          <input type="text" class="postDate" placeholder="Data" value="<?= $post->created_at ?>" disabled id="viewDate" />
        </div>
      </div>
    </div>
    <div class="postContent">
      <textarea class="titleInput" id="viewTitle"><?= $post->title ?></textarea>
      <textarea class="descriptionInput" id="viewDescription"><?= $post->content ?></textarea>
    </div>
  </div>
  <div class="footerButtons">
    <button type="button" class="closeModalBtn cancelBtn">FECHAR</button>
  </div>
</div>