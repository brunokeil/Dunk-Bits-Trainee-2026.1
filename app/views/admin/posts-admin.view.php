<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Posts</title>
    <link rel="stylesheet" href="../../../public/css/posts-admin.css">
    <link rel="stylesheet" href="../../../public/css/modais-posts.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="postAdmin">

    <main>
        <div>
            <h2 id="title">TABELA DE POSTS</h2>
        </div>
        <div id="PesquisaECriarPostADM">
            <div class="searchContainer">
                <ion-icon name="search-outline"></ion-icon>
                <input id="PesquisaPostsTabelaADM" type="text" placeholder="Pesquisar por Post" />
            </div>
            <button class="primaryBtn" id="btnCriarPostADM" type="button" data-bs-toggle="modais" data-bs-target="#modalCriarPost">Criar Post</button>
        </div>

        <table class="postsTable">
            <thead class="tableHeadContainer">
                <tr>
                    <th class="tableHead">ID</th>
                    <th class="tableHead">Título</th>
                    <th class="tableHead">Autor</th>
                    <th class="tableHead">Data</th>
                    <th class="tableHead">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($posts as $post): ?>
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->author ?></td>
                        <td> a definir </td>
                        <td>
                            <div class="actionBtn-container">
                                <button class="actionBtn viewPost" type="button" data-bs-toggle="modais" data-bs-target="#modalViewPost-<?= $post->id ?>">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </button>
                                <button class="actionBtn editPost" type="button" data-bs-toggle="modais" data-bs-target="#modalEditPost-<?= $post->id ?>">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                </button>
                                <button class="actionBtn deletePost" type="button" data-bs-toggle="modais" data-bs-target="#modalDeletePost-<?= $post->id ?>">
                                    <ion-icon name="trash-bin-outline"></ion-icon>
                                </button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>
                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a class="viewPost btnVisuPostADM">Visualizar</a></li>
                                        <li><a class="editPost btnEditPostADM">Editar</a></li>
                                        <li><a class="deletePost btnDeletePostADM">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                </tr>
            <?php endforeach ?>

            </tbody>
        </table>
        <div class="paginacaoContainer">

            <button class="btnSetaPaginacao" id="btnVoltarPagina">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </button>
            <span id="numeroPaginaAtual">1</span>
            <button class="btnSetaPaginacao" id="btnAvancarPagina">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>
        </div>
        </div>
    </main>

    <div class="modalContainer close">

        <?php

        require("app/views/admin/modais/modalViewPost.php");
        require("app/views/admin/modais/modalEditPost.php");
        require("app/views/admin/modais/modalDeletePost.php");
        require("app/views/admin/modais/modalCriarPost.php");

        ?>
    </div>


</body>
<script src="../../../public/js/admin-posts.js" rel="script"></script>
<script src="../../../public/js/modais-posts.js" rel="script"></script>


</html>