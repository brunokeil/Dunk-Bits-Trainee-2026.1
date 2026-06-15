<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin - Posts</title>
  <link rel="stylesheet" href="../../../public/css/modal-formulario-posts.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");
  </style>
</head>

<body id="BodyModalFormularioPosts">
  <div id="tela"></div>

  <!------------------------------------- Modal! ------------------------------------->
  <form>
  <div id="modal-criar-post">
    <div id="modal-criar-titulo">
      <h3>CRIAR POST</h3>
    </div>
    <div id="modal-criar-imagem">

      <h4> Arraste sua imagem aqui
        ou clique para escolher um arquivo</h4>
    </div>
    <div id="modal-criar-data">
      <h4>DATA: 01/01/0000</h4>
    </div>
    <div id="modal-criar-info">
      <div class="campo-input titulo">
        <ion-icon name="pencil-outline"></ion-icon>
        <input type="text" placeholder="Título do Post" id="modal-criar-info-titulo" aria-label="Título do Post">
      </div>
      <div class="campo-input descricao">
        <ion-icon name="create-outline"></ion-icon>
        <textarea placeholder="Descrição do Post" id="modal-criar-info-descricao" aria-label="Descrição do Post" rows="1" oninput="expandir(this)"></textarea>
      </div>
      <div class="campo-input autor">
        <ion-icon name="person-outline"></ion-icon>
        <input type="text" value="Autor do Post" id="modal-criar-info-autor" aria-label="Autor do Post" readonly>
      </div>
    </div>
    <div id="modal-criar-botoes">
      <button id="btn-modal-criar-cancelar" onclick="fecharModal('modal-criar-post')">
        <h3>CANCELAR</h3>
      </button>
      <button id="btn-modal-criar-confirmar" onclick="fecharModal('modal-criar-post')">
        <h3>CONFIRMAR</h3>
      </button>
    </div>
  </div>
  </form>

  <form>
  <div id="modal-excluir-post">
    <div id="modal-excluir-titulo">
      <ion-icon name="warning-outline"></ion-icon>
         <h3>EXCLUIR?</h3>
    </div>
    <div id="modal-excluir-descricao">
      <h4>Tem certeza que deseja excluir?</h4>
      <h4>Essa ação é <em>irreversível</em> e todos os dados referentes ao post serão excluídos <em>permanentementes</em>.</h4>
    </div>
    <div id="modal-excluir-botoes">
             <button id="btn-modal-excluir-cancelar" class="closeModalBtn">CANCELAR</button>
             <button id="btn-modal-excluir-confirmar" class="closeModalBtn">EXCLUIR</button>
    </div>
  </div>
  </form>

  <div class="containerTabelaPostsAdmin">
    <div>
      <h2 id="TituloDePostsADM">TABELA DE POSTS</h2>
    </div>
    <div id="PesquisaECriarPostADM">
      <div id="CaixaDePesquisa">
        <input type="text" placeholder="Pesquisar por Post" id="PesquisaPostsTabelaADM">
        <ion-icon name="search-outline"></ion-icon>
      </div>
      <button id="btnCriarPostADM" onclick="abrirModal('modal-criar-post')">Criar Post</button>
    </div>

    <div id="containerTabelaPostsToda">
      <table>
        <thead id="IndicesTabelaPostADM">
          <tr>
            <th id="IdTabelaPostsADM">ID</th>
            <th id="TítuloTabelaPostsADM">Título</th>
            <th id="AutorTabelaPostsADM">Autor</th>
            <th id="DataTabelaPostsADM">Data</th>
            <th id="AçõesTabelaPostsADM">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Primeira Publicação</td>
            <td>Arthur Morgan</td>
            <td>01/01/2023</td>
            <td>
              <div class="botõesdeação">
                <button class="btnVisuPostADM"><ion-icon name="eye-outline"></ion-icon></button>
                <button class="btnEditPostADM"><ion-icon name="pencil-outline"></ion-icon></button>
                <button class="btnDeletePostADM" onclick="abrirModal('modal-excluir-post')"><ion-icon name="trash-bin-outline"></ion-icon></button>
              </div>
            </td>
          </tr>
    </div>
  </div>

  <script src="../../../public/js/modal-formulario-posts.js"></script>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>