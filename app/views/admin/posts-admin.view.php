<!-- FLUMINENSE -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Posts</title>
    <link rel="stylesheet" href="../../../public/css/posts-admin.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
    </style>
</head>
<body id="BodyTabelaPostsADM">
    
    <div class="containerTabelaPostsAdmin">
        <div><h2  id="TituloDePostsADM">TABELA DE POSTS</h2></div>
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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
                            <div class="botõesdeação">
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

    

    <div id="modalVisualizar">
        <div id="containerVisualizarPosts">
            <div id="iconeTituloVisualisarPosts">
                <h1 id="títuloVisualizarPosts">POST</h1>
            </div>
            <div id="containerInfoPosts">
                <div id="containerCapaAutorDataPost">
                    <div id="capaPost">
                        <img src="#" alt="Imagem Post">
                    </div>
                    <div id="autorDataPosts">
                        <h5 id="dataPost">01/01/0001</h5>
                        <div id="AutorPost">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            <h5 id="autorPost">Autor do Post</h5>
                        </div>
                    </div>
                </div>
                <div id="camposVisualizarPost">
                    <div id="visualizarTitulo">
                        <h3 id="postTítulo">TÍTULO POST</h3>
                    </div>
                    <div id="visualizarDescricao">
                        <h4 id="postDescrição">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="modalActions">
            <button class="btnCancelarModal" onclick="fecharModal('modalVisualizar')">Sair</button>
        </div>
    </div>


    <div id="modalEditar">
        <div id="containerEditarPosts">
            <div id="iconeTituloEditarPosts">
                <h1 id="títuloEditarPosts">EDITAR POSTS</h1>
            </div>
            <div id="containerImagens">
                <h3 id="textoAlterarImagem">alterar imagem do post</h3>
                <div id="imagemAtualFutura">
                    <div id="imagemAtual">
                        <img src="#" alt="Imagem Post">
                    </div>
                    <div id="alterarImagemPost">
                        <input type="file" id="arquivoImagemPost" accept="image/*">
                        <label for="arquivoImagem" id="caixaNovaImagem">
                            <div id="íconeNovaImagem">
                                <ion-icon name="image-outline"></ion-icon>
                            </div>  
                            <p id="textoArrasteImagem">Arraste sua imagem aqui ou escolha um novo arquivo</p>
                        </label>
                    </div>
                </div>
            </div>
            <div id="camposAlterarPost">
                <div id="alterarTítulo">
                    <ion-icon name="create-outline" id="iconeAlterarTituloPost"></ion-icon>
                    <input type="text" placeholder="TÍULO" id="textoAlterarTituloPost">
                </div>
                <div id="alterarDescrição">
                    <ion-icon name="newspaper-outline" id="iconeAlterarDescriçaoPost"></ion-icon>
                    <input type="text" placeholder="DESCRIÇÃO" id="textoAlterarDescriçaoPost">
                </div>
                <div id="confirmarSenha">
                    <ion-icon name="person-outline"  id="iconeConfirmarSenhaPost"></ion-icon>
                    <input type="text" id="textoConfirmarSenhaPost" placeholder="SENHA ATUAL">
                </div>
            </div>
        </div>
        <div class="modalActions">
            <button class="btnCancelarModal" onclick="fecharModal('modalEditar')">Cancelar</button>
            <button class="btnSalvarModal">Salvar</button>
        </div>
    </div>
    
    <div id="modalExcluir">
        <input type="text">
        <input type="text">
        <input type="text">
        <div class="modalActions">
            <button class="btnCancelarModal" onclick="fecharModal('modalExcluir')">Cancelar</button>
            <button class="btnSalvarModal">Salvar</button>
        </div>
    </div>
    <script src="../../../public/js/posts-admin.js"></script>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>