<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Posts</title>
    <link rel="stylesheet" href="../../../public/css/posts-admin.css">
</head>

<body id="BodyTabelaPostsADM">

    <div class="containerTabelaPostsAdmin">
        <div>
            <h2 id="TituloDePostsADM">TABELA DE POSTS</h2>
        </div>
        <div id="PesquisaECriarPostADM">
            <div id="CaixaDePesquisa">
                <input type="text" placeholder="Pesquisar por Post" id="PesquisaPostsTabelaADM">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <button id="btnCriarPostADM">Criar Post</button>
        </div>

        <table id="containerTabelaPostsToda">
            <thead id="IndicesTabelaPostADM">
                <tr>
                    <th id="IdTabelaPostsADM">ID</th>
                    <th id="TituloTabelaPostsADM">Título</th>
                    <th id="AutorTabelaPostsADM">Autor</th>
                    <th id="DataTabelaPostsADM">Data</th>
                    <th id="AcoesTabelaPostsADM">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Primeira Publicação</td>
                    <td>Arthur Morgan</td>
                    <td>01/01/2023</td>
                    <td>
                        <div class="botoesdeacao">
                            <button class="btnVisuPostADM">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                            <button class="btnEditPostADM">
                                <ion-icon name="pencil-outline"></ion-icon>
                            </button>
                            <button class="btnDeletePostADM">
                                <ion-icon name="trash-bin-outline"></ion-icon>
                            </button>
                        </div>
                        <div class="containerMenuPostsAcoes">
                            <button class="trespontos">
                                <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                            </button>
                            <div class="dropdownMenuPosts">
                                <ul>
                                    <li><a class="btnVisuPostADM">Visualizar</a></li>
                                    <li><a class="btnEditPostADM">Editar</a></li>
                                    <li><a class="btnDeletePostADM">Excluir</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div id="novaPaginacao">
            <button id="btnVoltarPagina" class="btnSetaPaginacao">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </button>
            <span id="numeroPaginaAtual">1</span>
            <button id="btnAvancarPagina" class="btnSetaPaginacao">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>
        </div>
    </div>

    <div class="modalContainer close">

        <?php

        require("app/views/admin/modais/modalViewPost.php");
        require("app/views/admin/modais/modalEditPost.php");
        require("app/views/admin/modais/modalDeletePost.php");

        ?>

    </div>
    <script src="../../../public/js/modais-posts.js"></script>

</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>