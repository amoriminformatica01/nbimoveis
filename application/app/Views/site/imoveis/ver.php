<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 p-3">
            <img class="card-img" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_principal'] ?>" width="250px" alt="<?= $imoveis['descricao'] ?>">
        </div>
        <div class="col-md-7 p-3  bg-light">
            <h2 class="text-left p-2">Código <?= $imoveis['codigo'] ?></h2>
            <h1 class="text-left p-2"><?= $imoveis['cidade'] ?></h1>
            <h4 class="text-left p-2"> <?= $imoveis['descricao'] ?></h4>
            <h4 class="text-left p-2">Bairro: <?= $imoveis['bairro'] ?></h4>
            <h4 class="text-left p-2">Tipo: <?= $imoveis['tipo'] ?></h4>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-left p-2"><?= $imoveis['categoria'] ?> R$ <?= number_format($imoveis['preco'],2,'.',',')?></h4>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-group-lg btn-outline-success" href="https://wa.me/+5522997088645" target="_blnk"><i class="text-success fab  fa-whatsapp"></i> (22) 99708-8645</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p>Área <?= $imoveis['tamanho'] ?> m²</p>
                    </div>
                    <div class="col-md-3">
                        <p>Quartos <?= $imoveis['quartos'] ?></p>
                    </div>
                    <div class="col-md-3">
                        <p>Banheiros <?= $imoveis['banheiros'] ?></p>
                    </div>
                    <div class="col-md-3">
                        <p>Vagas <?= $imoveis['vagas'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-1">
            <div class="row">
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_1'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_2'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_3'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_4'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_5'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
                <div class="col-md-2 p-3">
                    <img class="card img-fluid" src="<?= base_url() ?>/img/imoveis/<?= $imoveis['imagem_6'] ?>" alt="<?= $imoveis['descricao'] ?>">
                </div>
            </div>
        </div>
    </div>
</div>