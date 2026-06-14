<?php if ($totalPages > 1): ?>

    <div class="carrossel">
        <a class="seta-esquerda" href="/postsadmin?page=<?= max(1, $currentPage - 1) ?>"><ion-icon name="chevron-back-outline"></ion-icon></a>

        <div class="paginacao">
            <p class="visao-pag"><?php echo $currentPage ?></p>
        </div>


        <a class="seta-direita" href="/postsadmin?page=<?= min($totalPages, $currentPage + 1) ?>"><ion-icon name="chevron-forward-outline"></ion-icon></a>

    </div>
<?php endif ?>