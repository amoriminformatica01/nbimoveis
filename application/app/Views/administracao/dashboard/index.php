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
        <h1 class="h2">Dashboard</h1>
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
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <h2></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <div class="container">
            <div class="row">
              <div class="col md-1">
                <p class="d-none" id="loc"><?= count($locacao) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="ven"><?= count($venda) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="cas"><?= count($casa) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="apa"><?= count($apartamento) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="con"><?= count($condominio) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="loj"><?= count($loja) ?></p>
              </div>
              <div class="col md-1">
                <p class="d-none" id="ter"><?= count($terreno) ?></p>
              </div>
            </div>
          </div>
        </table>
      </div>
    </main>
  </div>
</div>
<script>
  var loc = document.getElementById("loc").innerHTML
  var locacao = loc.replace(/[^\d]+/g, '');

  var ven = document.getElementById("ven").innerHTML
  var venda = ven.replace(/[^\d]+/g, '');

  var cas = document.getElementById("cas").innerHTML
  var casa = cas.replace(/[^\d]+/g, '');

  var apa = document.getElementById("apa").innerHTML
  var apartamento = apa.replace(/[^\d]+/g, '');

  var con = document.getElementById("con").innerHTML
  var condominio = con.replace(/[^\d]+/g, '');
  
  var loj = document.getElementById("con").innerHTML
  var loja = loj.replace(/[^\d]+/g, '');
  
  var ter = document.getElementById("ter").innerHTML
  var terreno = ter.replace(/[^\d]+/g, '');
</script>