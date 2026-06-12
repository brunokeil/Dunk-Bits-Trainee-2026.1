<div class="modalPost close" id="modalView">

  <span id="header">
    <h1>PERFIL DE POST</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </span>

  <div id="content">

    <div class="postInfo">

      <div class="postPicture">
        <img
          src="/public/assets/placeholder/blank-prof-pic.png "
          class="imgPostPic imgProfPic" />
        <input type="file" class="profileInput" accept="image/*" hidden />
      </div>

      <div class="authorData">

        <div class="inputGroup">
          <ion-icon name="person"></ion-icon>

          <input
            type="text"
            class="postAuthor"
            placeholder="Username"
            value="Paula Tejano"
            disabled
            id="viewAuthor" />
        </div>

        <div class="inputGroup">

          <input
            type="text"
            class="postDate"
            placeholder="Data"
            value="11/06/2014"
            disabled
            id="viewDate" />
        </div>
      </div>

    </div>

    <div class="postContent">

      <textarea
        class="titleInput"
        placeholder="Titulo do post"
        id="viewTitle"></textarea>

      <textarea
        class="descriptionInput"
        placeholder="Descrição"
        id="viewDescription"></textarea>


    </div>
  </div>

</div>