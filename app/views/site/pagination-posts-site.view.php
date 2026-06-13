  <section id="container-paginacao">
            <?php
            $busca = $searchText ? '&search=' . $searchText : '';
            $filtro = $valor_filtro ? '&filtro=' . $valor_filtro : '';
            ?>
      <div id="paginacao">
          <a class="seta seta-esquerda" href="/lista-posts?page=<?= max(1, $currentPage - 1) ?><?=$busca . $filtro  ?>">
              <ion-icon name="chevron-back-outline"></ion-icon>
          </a>


          <div id="pagina-atual">
              <p><?php echo $currentPage; ?></p>
          </div>

          <a class="seta seta-direita" href="/lista-posts?page=<?= min($totalPages, $currentPage + 1) ?><?=$busca . $filtro  ?>">
              <ion-icon name="chevron-forward-outline"></ion-icon>
          </a>
      </div>
  </section>