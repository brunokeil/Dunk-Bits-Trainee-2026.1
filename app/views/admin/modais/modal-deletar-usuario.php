<div class="modalUser warningModal close" id="deleteModal">
  <div class="warningHeader">
    <ion-icon name="warning"></ion-icon>

    <span>
      <h1>Excluir usuário?</h1>
    </span>
  </div>

  <p>
    Tem certeza que deseja excluir este usuário?
    <br />
    <br />

    Essa ação é <em>irreversível</em> e todos os dados relacionados à
    conta serão <em>removidos permanentemente</em>.
  </p>
  <form action="admin-users/delete" method="post">
  <input type="hidden" id="delete-id" name="id" />

  <div class="footerButtons">
    <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
    <button type="submit" class="primaryBtn">EXCLUIR</button>
  </div>
  </form>
</div>