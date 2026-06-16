<form class="modalPost warningModal close" id="modalErrorPost-<?= $post->id ?>" action="/postsadmin/delete" method="POST">
  <div class="warningHeader">
    <ion-icon name="warning"></ion-icon>

    <span>
      <h1>Erro</h1>
    </span>
  </div>

  <p>
    Ocorreu um erro ao tentar criar o post.
    <br />
    <br />

    Lembre-se que todos os campos são obrigatórios.
  </p>
  <input type="hidden" name="id" value="<?= $post->id ?>" />
  <div class="footerButtons">
    <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
    <button type="submit" class="primaryBtn">EXCLUIR</button>
  </div>
</form>