<?php require dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>

<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('img/site/banner2.jpg') ?>" height="400px" class="d-block w-100" alt="...">
            </div>
        </div>

    </div>
</section>
<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Digite condominio, região, rairro ou cidade...">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Comprar</option>
                                <option>Vender</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Tipo</option>
                                <option>Aluguel</option>
                                <option>Temporada</option>
                                <option></option>
                                <option></option>
                                <option></option>
                                <option></option>
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
<div class="container p-3">
    <?php if (!$imoveis) : ?>
        <h1 class="text-center">Não existe imóveis cadastrados</h1>
    <?php else : ?>
        <h1 class="text-center">Destaques</h1>
        <div class="container p-3">
            <div class="row">

                <?php foreach ($imoveis as $imovel) : ?>
                    <div class="col-md-4 p-3">
                        <img class="img-fluid" src="<?= $imovel['imagem'] ?>" alt="">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <h5 class="text-right">Código <?= $imovel['codigo'] ?></h5>
                                </div>
                                <div class="col-md-5">
                                    <h5 class="text-center text-danger">R$ <?= $imovel['preco'] ?></h5>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-right"><?= $imovel['bairro'] ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 border border-1">
                                <p>Área <?= $imovel['tamanho'] ?> m²</p>
                            </div>
                            <div class="col-md-3 border border-1">
                                <p>Quartos <?= $imovel['quartos'] ?></p>
                            </div>
                            <div class="col-md-3 border border-1">
                                <p>Banheiros <?= $imovel['banheiros'] ?></p>
                            </div>
                            <div class="col-md-3 border border-1">
                                <p>Vagas <?= $imovel['vagas'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
</div>