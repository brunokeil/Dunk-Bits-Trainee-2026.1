<div class="modalUser warningModal close" id="deleteCommentModal">
  <div class="warningHeader">
    <ion-icon name="warning"></ion-icon>

    <span>
      <h1>Excluir comentário?</h1>
    </span>
  </div>

  <p>
    Tem certeza que deseja excluir este comentário?
    <br><br>

    Esta ação é <em>irreversível</em> e o comentário será
    <em>removido permanentemente</em>.
  </p>

  <form action="/post-individual/comment/delete" method="POST" id="form-delete-comment">
    <input type="hidden" id="delete-comment-id" name="id">
    <input type="hidden" id="delete-comment-post-id" name="post_id">

    <div class="footerButtons">
      <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
      <button type="submit" class="primaryBtn">EXCLUIR</button>
    </div>
  </form>
</div>