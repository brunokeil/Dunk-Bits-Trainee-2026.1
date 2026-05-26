<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modal</title>

  <link rel="stylesheet" href="/public/css/modais-usuarios.css" />

  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="modal-container">
    <div class="modalUser warningModal" id="deleteModal">
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

      <div class="footerButtons">
        <button class="closeModalBtn cancelBtn">CANCELAR</button>
        <button class="primaryBtn">EXCLUIR</button>
      </div>
    </div>
  </div>
</body>

</html>