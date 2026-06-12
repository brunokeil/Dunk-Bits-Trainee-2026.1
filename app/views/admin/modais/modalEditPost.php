<div class="modalPost close" id="modalEdit">
    <span id="header">
        <h1>EDITAR POST</h1>
        <button class="closeModalBtn terciaryBtn">X</button>
    </span>

    <form class="modalForm" action="admin-posts/edit" method="post" enctype="multipart/form-data">


        <div class="postInfo">

            <div class="postPicture">
                <img
                    src="/public/assets/placeholder/blank-prof-pic.png "
                    class="imgPostPic imgProfPic" />
                <input type="file" class="profileInput" accept="image/*" hidden />
            </div>

            <div class="authorData">

                <div class="inputGroup">
                    <ion-icon name="person"></ion-icon>

                    <input
                        type="text"
                        class="postAuthor"
                        placeholder="Username"
                        value="joaosilva"
                        disabled
                        id="viewAuthor" />
                </div>

                <div class="inputGroup">

                    <input
                        type="text"
                        class="postDate"
                        placeholder="Data"
                        value="11/06/2014"
                        disabled
                        id="viewDate" />
                </div>
            </div>

        </div>

        <div class="postContent">

            <textarea
                class="titleInput"
                placeholder="Titulo do post"
                id="viewTitle"></textarea>

            <textarea
                class="descriptionInput"
                placeholder="Descrição"
                id="viewDescription"> </textarea>


        </div>


    </form>

    <div class="footerButtons">
        <button type="button" class="closeModalBtn cancelBtn">CANCELAR</button>
        <button type="submit" class="primaryBtn">SALVAR ALTERAÇÕES</button>
    </div>
</div>