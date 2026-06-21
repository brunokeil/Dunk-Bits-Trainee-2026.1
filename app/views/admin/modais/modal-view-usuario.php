<div class="modalUser close" id="viewModal">
  <div id="header">
    <h1>PERFIL DE USUÁRIO</h1>
    <button class="closeModalBtn terciaryBtn">X</button>
  </div>

  <div class="userProfilePictureNoEdit">
    <img
      src="/public/assets/placeholder/blank-prof-pic.webp"
      class="imgProfPicNoEdit" />
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
        disabled
        id="view-username" />
    </div>

    <div class="inputGroup">
      <ion-icon name="mail"></ion-icon>

      <input
        type="text"
        class="emailInput"
        placeholder="E-mail"
        value="joaosilva@gmail.com"
        disabled
        id="view-email" />
    </div>

  </div>
</div>