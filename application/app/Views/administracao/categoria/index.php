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

<?php require dirname(__DIR__, 2) .  DIRECTORY_SEPARATOR . 'administracao'. DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>
<div class="container-fluid">
  <div class="row">
    <?php require dirname(__DIR__, 2) .  DIRECTORY_SEPARATOR . 'administracao'. DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categorias</h1>
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
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <?php if (!$categorias) : ?>
              <h1 class="text-center">Não existe categorias Cadastradas</h1>
              <h4 class="text-center">deseja adicionar uma <a href="<?= site_url('categoria/new'); ?>" class="text-danger">nova</a> categoria</h4>
            <?php else : ?>
              <tr>
                <th>Id</th>
                <th>categoria</th>
                <th>Data de cadastro</th>
                <th>Última atualização</th>
                <th colspan="3"><a href="<?= site_url('categoria/new'); ?>" class="text-center btn btn-success"><i class="fa fa-plus"></a></th>
              </tr>
          </thead>
          <?php foreach ($categorias as $categoria) : ?>
            <tbody>
              <tr>
                <td><?= $categoria['id'] ?></td>
                <td><?= $categoria['categoria'] ?></td>
                <td><?= $categoria['created_at'] ?></td>
                <td><?= $categoria['updated_at'] ?></td>
                <td><a href="<?= site_url('categoria/show/');?><?= $categoria['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></a></td>
                <td><a href="<?= site_url('categoria/delete/'); ?><?= $categoria['id'] ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        <?php endif; ?>
        </table>
      </div>
    </main>
  </div>
</div>