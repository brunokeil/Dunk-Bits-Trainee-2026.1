<form class="modalPost warningModal close" id="modalDeletePost-<?= $post->id ?>" action="/postsadmin/delete" method="POST">
  <div class="warningHeader">
    <ion-icon name="warning"></ion-icon>

    <span>
      <h1>Excluir post?</h1>
    </span>
  </div>

  <p>
    Tem certeza que deseja excluir este post?
    <br />
    <br />

    Essa ação é <em>irreversível</em> e todos os dados do post serão <em>removidos permanentemente</em>.
  </p>
  <input type="hidden" name="id" value="<?= $post->id ?>" />
  <div class="footerButtons">
    <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
    <button type="submit" class="primaryBtn">EXCLUIR</button>
  </div>
</form>