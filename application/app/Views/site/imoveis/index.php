<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>
<section id="imoveis">
    <h1 class="text-center">Imóveis</h1>
    <div class="container">
        <?php if (!$imoveis) : ?>
            <h1 class="text-center">Não existe imóveis cadastrados</h1>
        <?php else : ?>
            <div class="container card-deck">
                <div class="row">
                    <?php foreach ($imoveis as $imovel) : ?>
                        <div class="col-md-4">
                            <img class="card-img" src="<?= base_url() ?>/img/imoveis/<?= $imovel['imagem_principal'] ?>" width="354px" height="240px" alt="<?= $imovel['descricao'] ?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-right"><?= $imovel['bairro'] ?></h4>
                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="text-center"><?= $imovel['cidade'] ?>-<?= $imovel['estado'] ?></h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 border border-1">
                                        <p>Área <?= $imovel['tamanho'] ?> m²</p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Quartos <?= $imovel['quartos'] ?></p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Banheiros <?= $imovel['banheiros'] ?></p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Vagas <?= $imovel['vagas'] ?></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="align-items-end text-center p-1"><?= $imovel['categoria'] ?> R$ <?= $imovel['preco'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-link text-center" href="<?= base_url("imoveis/show/" . $imovel['id']) ?>">Mais detalhes</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
    </div>
</section>