<form class="modalForm modalPost close" id="modalEditPost-<?= $post->id ?>" action="/postsadmin/edit" method="POST" enctype="multipart/form-data">
    <span id="header">
        <h1>EDITAR POST</h1>
        <button type="button" class="closeModalBtn terciaryBtn">X</button>
    </span>

    <input type="hidden" name="id" value="<?= $post->id ?>">
    <input type="hidden" name="author" value="<?= $post->author ?>">
    <div class="postInfo">
        <div class="postPicture">
            <img src="<?= $post->cover_image ?>" class="imgPost"/>
            <input type="file" class="profileInput" accept="image/*" name="cover_image" hidden/>
        </div>
        <div class="authorData">
            <div class="inputGroup">
                <input type="text" class="postAuthor" name="postTipo" value="<?= $post->type ?>" id="viewAuthor" />
            </div>
            <div class="inputGroup">
                <input name="" type="text" class="postDate" value="<?= $post->created_at ?>" id="viewDate" />
            </div>
        </div>
    </div>

    <div class="postContent">
        <textarea class="titleInput" id="viewTitle" maxlength="90" name="tituloDoPost"><?= $post->title ?></textarea>
        <textarea class="descriptionInput" id="viewDescription" name="descricaoDoPost"><?= $post->content ?></textarea>
    </div>
    <div class="footerButtons">
        <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
        <button type="submit" class="primaryBtn">SALVAR ALTERAÇÕES</button>
    </div>
</form>