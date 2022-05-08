<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .navbar .navbar-toggler {
    top: .25rem;
    right: 1rem;
  }
</style>
<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'administracao'. DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>

<div class="container-fluid">
  <div class="row">
    <?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'administracao'. DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Novo Imóvel</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <form action="<?=base_url()?>/encarte/update" method="POST" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Descricao do imóvel</label>
                <input class="form-control border border-2 border-success" type="text" name="descricao" id="descricao" value="<?= $imoveis['descricao'] ?>" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Categoria</label>
                <select class="form-control border border-2 border-success" name="categoria" id="categoria" required>
                  <option value=""><?= $imoveis['categoria'] ?></option>
                  <?php foreach ($categorias as $categoria) : ?>
                    <option value="<?= $categoria['categoria'] ?>"><?= $categoria['categoria'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Código</label>
                <input class="form-control border border-2 border-success" value="<?= $imoveis['codigo'] ?>" type="text" name="codigo" id="codigo" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Tipo</label>
                <select class="form-control border border-2 border-success" name="tipo" id="tipo" required>
                  <option value=""><?= $imoveis['tipo'] ?></option>
                  <?php foreach ($tipos as $tipo) : ?>
                    <option value="<?= $tipo['tipo'] ?>"><?= $tipo['tipo'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="">Preço</label>
                <input class="preco form-control border border-2 border-success" type="text" name="preco" id="preco" value="<?= $imoveis['preco'] ?>" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Cep:</label>
                <input class="form-control border border-2 border-success" type="text" name="cep" id="cep"  placeholder="Digite o cep do imóvel">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Bairro</label>
                <input class="form-control border border-2 border-success" type="text" name="bairro" id="bairro" value="<?= $imoveis['bairro'] ?>" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Cidade</label>
                <input class="form-control border border-2 border-success" type="text" name="cidade" id="cidade" value="<?= $imoveis['cidade'] ?>" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Estado</label>
                <input class="form-control border border-2 border-success" type="text" name="estado" id="estado" value="<?= $imoveis['estado'] ?>"readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Tamanho por m²</label>
                <input class="form-control border border-2 border-success" type="number" name="tamanho" value="<?= $imoveis['tamanho'] ?>" id="tamanho" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Quantidade de quartos</label>
                <input class="form-control border border-2 border-success" type="number" name="quartos" id="quartos" value="<?= $imoveis['quartos'] ?>" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Quantidade de banheiros</label>
                <input class="form-control border border-2 border-success" type="number" name="banheiros" id="banheiros" value="<?= $imoveis['banheiros'] ?>" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Quantidade de vagas</label>
                <input class="form-control border border-2 border-success" type="number" name="vagas" id="vagas" value="<?= $imoveis['vagas'] ?>" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Observação</label>
                <input class="form-control border border-2 border-success" type="text" name="observacao" id="observacao" value="<?= $imoveis['observacao'] ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Imagem Principal</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_principal" id="imagem_principal" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 1</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_1" id="imagem_1" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 2</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_2" id="imagem_2" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 3</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_3" id="imagem_3" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 4</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_4" id="imagem_4" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 5</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_5" id="imagem_5" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem 6</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem_6" id="imagem_6" required>
              </div>
            </div>

            <div class="col-md-3 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_principal'] ?>" class="card img-fluid" id="upload_imagem_principal" value="" alt="">
              </div>
            </div>

            <div class="col-md-3 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_1'] ?>" class="card img-fluid" id="upload_imagem_1" alt="">
              </div>
            </div>

            <div class="col-md-3 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_2'] ?>" class="card img-fluid" id="upload_imagem_2" alt="">
              </div>
            </div>

            <div class="col-md-3 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_3'] ?>" class="card img-fluid" id="upload_imagem_3" alt="">
              </div>
            </div>

            <div class="col-md-4 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_4'] ?>" class="card img-fluid" id="upload_imagem_4" alt="">
              </div>
            </div>

            <div class="col-md-4 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_5'] ?>" class="card img-fluid" id="upload_imagem_5" alt="">
              </div>
            </div>

            <div class="col-md-4 p-3">
              <div class="form-group">
                <img src="<?=base_url()?>/img/imoveis/<?= $imoveis['imagem_6'] ?>" class="card img-fluid" id="upload_imagem_6" alt="">
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-2 p-3">
          <div class="form-group">
            <button class="btn btn-success" type="submit">Alterar</button>
          </div>
        </div>
  </div>
  </form>
  <img src="" alt="" srcset="">
  </main>
</div>
</div>