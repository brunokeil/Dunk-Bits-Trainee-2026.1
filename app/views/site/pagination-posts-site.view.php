  <section id="container-paginacao">
      <div id="paginacao">
          <a class="seta seta-esquerda" href="/lista-posts?page=<?= max(1, $currentPage - 1) ?>">
              <span class="material-symbols-outlined">chevron_left</span>
          </a>


          <div id="pagina-atual">
              <p><?php echo $currentPage; ?></p>
          </div>

          <a class="seta seta-direita" href="/lista-posts?page=<?= min($totalPages, $currentPage + 1) ?>">
              <span class="material-symbols-outlined">chevron_right</span>
          </a>
      </div>
  </section>