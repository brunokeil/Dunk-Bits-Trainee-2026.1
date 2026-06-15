<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Posts</title>
    <link rel="stylesheet" href="../../../public/css/posts-admin.css">
    <link rel="stylesheet" href="../../../public/css/modais-posts.css">
    <link rel="stylesheet" href="../../../public/css/modal-formulario-posts.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="postAdmin">
    <div class="mensagemErro">
        <p class="mensagemErro">
            <?php
                if(isset($_SESSION['semTitulo'])){
                    echo $_SESSION['semTitulo'];
                }else if(isset($_SESSION['semDescricao'])){
                    echo $_SESSION['semDescricao'];
                }else if(isset($_SESSION['semImagem'])){
                    echo $_SESSION['semImagem'];
                }else if(isset($_SESSION['semTipo'])){
                    echo $_SESSION['semTipo'];
                }
                unset($_SESSION['semTitulo']);
                unset($_SESSION['semImagem']);
                unset($_SESSION['semDescricao']);
                unset($_SESSION['semTipo']);
            ?>
        </p>
    </div>

    <main>
        <div>
            <h2 id="title">TABELA DE POSTS</h2>
        </div>
        <div id="PesquisaECriarPostADM">
            <form class="searchContainer" method="GET" action="/postsadmin">

                <ion-icon name="search-outline"></ion-icon>
                <input id="PesquisaPostsTabelaADM" type="text" placeholder="Pesquisar por Post" name="search" value="<?= $searchText ?? '' ?>" />
            </form>
            <button class="primaryBtn createPost" type="button" data-bs-toggle="modais" data-bs-target="#modalCreate">Criar Post</button>
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
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->authorData->name ?></td>
                        <td><?= $post->created_at ?></td>
                        <td>
                            <div class="actionBtn-container">
                                <button class="actionBtn viewPost" type="button" data-bs-toggle="modais" data-bs-target="#modalViewPost-<?= $post->id ?>">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </button>
                                <?php if($_SESSION['id'] === $post->author || $_SESSION['is_admin'] === 1): ?>
                                    <button class="actionBtn editPost" type="button" data-bs-toggle="modais" data-bs-target="#modalEditPost-<?= $post->id ?>">
                                        <ion-icon name="pencil-outline"></ion-icon>
                                    </button>
                                    <button class="actionBtn deletePost" type="button" data-bs-toggle="modais" data-bs-target="#modalDeletePost-<?= $post->id ?>">
                                        <ion-icon name="trash-bin-outline"></ion-icon>
                                    </button>
                                <?php endif; ?>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>
                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a class="viewPost btnVisuPostADM" data-bs-target="#modalViewPost-<?= $post->id ?>">Visualizar</a></li>
                                        <?php if($_SESSION['id'] === $post->author || $_SESSION['is_admin'] === 1): ?>
                                            <li><a class="editPost btnEditPostADM" data-bs-target="#modalEditPost-<?= $post->id ?>">Editar</a></li>
                                            <li><a class="deletePost btnDeletePostADM" data-bs-target="#modalDeletePost-<?= $post->id ?>">Excluir</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        <?php

        require("app/views/admin/paginationCrudPosts.view.php");

        ?>

    </main>

    <div class="modalContainer close">
        <?php
        require("app/views/admin/modais/modalCriarPost.php");

        foreach ($posts as $post) {
            require("app/views/admin/modais/modalViewPost.php");
            require("app/views/admin/modais/modalEditPost.php");
            require("app/views/admin/modais/modalDeletePost.php");
        }
        ?>
    </div>


</body>
<script src="../../../public/js/admin-posts.js" rel="script"></script>
<script src="../../../public/js/modais-posts.js" rel="script"></script>


</html>