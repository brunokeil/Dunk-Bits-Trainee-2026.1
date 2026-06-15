const deleteButtons = document.querySelectorAll(".delete-comment-btn");

deleteButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        document.getElementById("delete-comment-id").value =
            btn.dataset.id;

        document.getElementById("delete-comment-post-id").value =
            btn.dataset.postId;

        const modal = document.getElementById("deleteCommentModal");
        const modalContainer = document.querySelector(".modal-container");

        modal.classList.remove("close");
        modal.classList.add("open");

        modalContainer.classList.remove("close");
        modalContainer.classList.add("open");
    });
});