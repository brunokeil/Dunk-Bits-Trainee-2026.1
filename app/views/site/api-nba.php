<section class="api">
    <div class="icones">
        <ion-icon class="casinha" name="home"></ion-icon>
        <ion-icon name="people"></ion-icon>
    </div>

    <?php foreach ($jogosFormatados as $jogo): ?>
        <div class="jogo">
            <h4 class="data"><?= substr($jogo['data'] ?? '', 0, 10) ?></h5>
                <div>

                    <h4 class="time casa"><?= $jogo['casa']['nome'] ?? 'Não encontrado' ?>
                        <br />
                        (<?= $jogo['casa']['abreviacao'] ?? '---' ?>)
                    </h4>
                    <img class="logo-time" src="<?= $jogo['casa']['logo'] ?>" />

                    <div class="pontos">
                        <h2><?= $jogo['casa']['pontos'] ?></h2>
                        <p>X</p>
                        <h2><?= $jogo['visitante']['pontos'] ?></h2>
                    </div>

                    <img class="logo-time" src="<?= $jogo['visitante']['logo'] ?>" />
                    <h4 class="time visitante"><?= $jogo['visitante']['nome'] ?>
                        <br />
                        (<?= $jogo['visitante']['abreviacao'] ?>)
                    </h4>
                </div>
        </div>
    <?php endforeach; ?>


</section>