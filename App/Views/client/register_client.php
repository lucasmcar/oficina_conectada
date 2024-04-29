<?php

use App\Utils\GenerateUtil;
?>
<!DOCTYPE html>
<html>
  <head>
    <!--implementar css/js aqui-->
    <meta charset="UTF-8">
    <title>OC - Cadastro de Clientes</title>
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    
    <body>
        <nav class="navbar navbar-expand-lg bg-primary mb-3" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Oficina Conectada</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <?php if(isset($this->view->success) && $this->view->success){ ?>
                <div class="row mb-2">
                    <span class="alert alert-success" id="msgRegClient">Usuário cadastrado com sucesso </span>
                </div>
                
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    Novo Cliente
                </div>
                <div class="card-body">
                    <form id="frmRegisterClient" action="/create" method="POST">
                        <input type="hidden" name="id_cliente" value="">
                        <div class="mb-3">
                            <label for="txtNome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="txtNome">
                        </div>
                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="txtEmail">
                        </div>
                        <div class="mb-3">
                            <label for="txtNrIdentificacao" class="form-label">Nº de Identificação</label>
                            <input type="text" readonly name="nr_identificacao" class="form-control" id="txtNrIdentificacao" value="<?= GenerateUtil::generateRandomNrId(); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="txtDtDesde" class="form-label">Cliente desde: </label>
                            <input type="text" name="dt_desde" class="form-control" id="txtDtDesde">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

        setTimeout(function(){
            document.querySelector("#msgRegClient").style.display ="none";
        }, 2500);

    </script>
    </body>
</html>