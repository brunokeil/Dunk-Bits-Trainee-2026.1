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

        <div id="containerTabelaPostsToda">
            <table>
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
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>
                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Segunda Publicação</td>
                        <td>A Train</td>
                        <td>02/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Terceira Publicação</td>
                        <td>Maelle</td>
                        <td>03/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Quarta Publicação</td>
                        <td>Bob esponja</td>
                        <td>04/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quinta Publicação</td>
                        <td>Superman</td>
                        <td>05/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quinta Publicação</td>
                        <td>Superman</td>
                        <td>05/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quinta Publicação</td>
                        <td>Superman</td>
                        <td>05/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quinta Publicação</td>
                        <td>Superman</td>
                        <td>05/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Quinta Publicação</td>
                        <td>Superman</td>
                        <td>05/01/2023</td>
                        <td>
                            <div class="botoesdeacao">
                                <button class="btnVisuPostADM" onclick="abrirModal('modalVisualizar')"><ion-icon name="eye-outline"></ion-icon></button>
                                <button class="btnEditPostADM" onclick="abrirModal('modalEditar')"><ion-icon name="pencil-outline"></ion-icon></button>
                                <button class="btnDeletePostADM" onclick="abrirModal('modalExcluir')"><ion-icon name="trash-bin-outline"></ion-icon></button>
                            </div>
                            <div class="containerMenuPostsAcoes">
                                <button class="trespontos">
                                    <ion-icon name="ellipsis-vertical-circle-outline"></ion-icon>
                                </button>

                                <div class="dropdownMenuPosts">
                                    <ul>
                                        <li><a onclick="abrirModal('modalVisualizar')">Visualizar</a></li>
                                        <li><a onclick="abrirModal('modalEditar')">Editar</a></li>
                                        <li><a onclick="abrirModal('modalExcluir')">Excluir</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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

    <div class="modalContainer">

        <?php

        require("app/views/admin/modais/modalViewPost.php");
        require("app/views/admin/modais/modalEditPost.php");
        require("app/views/admin/modais/modalDeletePost.php");

        ?>
        

    </div>

</body>
<script src="../../../public/js/posts-admin.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>