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
<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar2.php' ?>

<div class="container-fluid">
  <div class="row">
    <?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
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
      <form id="imoveis" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="">Descricao do imóvel</label>
                <input class="form-control border border-2 border-success" type="text" name="descricao" id="descricao">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Categoria</label>
                <select class="form-control border border-2 border-success" name="categoria" id="categoria">
                  <option value="">Selecione</option>
                  <?php foreach ($categorias as $categoria) : ?>
                    <option value=""><?= $categoria['categoria'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="">Código</label>
                <input class="form-control border border-2 border-success" type="text" name="codigo" id="codigo">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Tipo</label>
                <select class="form-control border border-2 border-success" type="text" name="tipo" id="tipo">
                  <option value="">Selecione</option>
                  <?php foreach ($tipos as $tipo) : ?>
                    <option value=""><?= $tipo['tipo'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Imagem</label>
                <input class="form-control border border-2 border-success" type="file" name="imagem" id="imagem">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Preço</label>
                <input class="preco form-control border border-2 border-success" type="text" name="preco" id="preco">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Bairro</label>
                <input class="form-control border border-2 border-success" type="text" name="bairro" id="bairro">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="">Cidade</label>
                <input class="form-control border border-2 border-success" type="text" name="cidade" id="cidade">
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <label for="">Estado</label>
                <input class="form-control border border-2 border-success" type="text" name="estado" id="estado">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="">Tamanho por m²</label>
                <input class="form-control border border-2 border-success" type="number" name="tamanho" id="tamanho">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Quantidade de quartos</label>
                <input class="form-control border border-2 border-success" type="number" name="quartos" id="quartos">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Quantidade de banheiros</label>
                <input class="form-control border border-2 border-success" type="number" name="banheiros" id="banheiros">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Quantidade de vagas</label>
                <input class="form-control border border-2 border-success" type="number" name="vagas" id="vagas">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Observação</label>
                <input class="form-control border border-2 border-success" type="number" name="observacao" id="observacao">
              </div>
            </div>
          </div>
          <div class="col-md-12 p-3">
            <div class="form-group">
              <img src="" class="card" height="200px" id="upload_imagem" alt="">
            </div>
          </div>
          <div class="col-md-12 p-3">
            <div class="form-group">
              <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
          </div>
        </div>
      </form>
      <img src="" alt="" srcset="">
    </main>
  </div>
</div>
