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

<?php require dirname(__DIR__, 2) .  DIRECTORY_SEPARATOR . 'administracao' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>
<div class="container-fluid">
  <div class="row">
    <?php require dirname(__DIR__, 2) .  DIRECTORY_SEPARATOR . 'administracao' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
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
            <?php if (!$UserModel) : ?>
              <h1 class="text-center">Não existe Usuários Cadastrados</h1>
              <h4 class="text-center">deseja adiconar um <a href="<?= site_url(''); ?>usuarios/new" class="text-danger">novo</a> Usuário</h4>
            <?php else : ?>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobre Nome</th>
                <th>E-mail</th>
                <th>Observação</th>
                <th>Data de Cadastro</th>
                <th>Última atualização</th>
                <th colspan="2"><a href="<?= site_url('usuarios/new'); ?>" class="text-center btn btn-success"><i class="fa fa-plus"></a></th>
              </tr>
          </thead>
          <?php foreach ($UserModel as $user) : ?>
            <tbody>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nome'] ?></td>
                <td><?= $user['sobrenome'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['observacao'] ?></td>
                <td><?= $user['created_at'] ?></td>
                <td><?= $user['updated_at'] ?></td>
                <td><a href="<?= site_url('usuarios/show/'); ?><?= $user['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></a></td>
                <td><a href="<?= site_url('usuarios/delete/'); ?><?= $user['id'] ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a></td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        <?php endif; ?>
        </table>
        <?php
        echo $pager->links('bootstrap_pager', 'bootstrap_pager');
        ?>
      </div>
    </main>

  </div>
</div>