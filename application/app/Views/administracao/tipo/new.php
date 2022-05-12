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
<?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'administracao' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'navbar.php' ?>

<div class="container-fluid">
    <div class="row">
        <?php require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'administracao' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'sidebar.php' ?>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Novo Tipo</h1>
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
            <form action="<?= base_url('tipo/create') ?>" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <input class="form-control border border-2 border-success" type="text" name="tipo" id="tipo" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 p-3">
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>