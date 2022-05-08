<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>

<section id="home">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('img/site/banner2.jpg') ?>" height="400px" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <section class="search-sec">
        <div class="container">
            <form action="#" method="post" novalidate="novalidate">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt" placeholder="Digite condomínio, região, bairro ou cidade...">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option value="">Categoria</option>
                                    <?php foreach ($categorias as $categoria) : ?>
                                        <option><?= $categoria['categoria'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option value="">Tipo</option>
                                    <?php foreach ($tipos as $tipo) : ?>
                                        <option><?= $tipo['tipo'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                <button type="button" class="btn btn-danger wrn-btn">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</section>
<section id="imoveis">
    <div class="container card-deck">
        <?php if (!$imoveis) : ?>
            <h1 class="text-center">Não existe imóveis cadastrados</h1>
        <?php else : ?>
            <h1 class="text-center">Imóveis em Destaque</h1>
            <div class="container">
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

                                <div class="row bg-white">
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
                                            <h5 class="align-items-end text-center p-1"><?= $imovel['categoria'] ?> R$ <?= number_format($imovel['preco'], 2, '.', ',') ?></h5>
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
    <?= $pager->links('bootstrap_pager', 'bootstrap_pager'); ?>
</section>