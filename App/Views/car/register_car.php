<?php
require '../vendor/autoload.php';
use App\Session\Session;
?>

<!DOCTYPE html>
<html>
  <head>
    <!--implementar css/js aqui-->
    <meta charset="UTF-8">
    <title>Cadastro de veículos</title>
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

            <?php if(isset($this->view->carSuccess) && $this->view->carSuccess ){ ?>
                <div class="row mb-2">
                    <span class="alert alert-success" id="msgRegCar">Veículo cadastrado com sucesso </span>
                </div>
                
            <?php } ?>

            <div class="card">
                <div class="card-header">
                    Registro de veículo
                </div>
                <div class="card-body">
                    <form id="frmRegisterCar" action="/register" method="POST">
                        <input type="hidden" name="id_cliente" value="<?php echo $_SESSION['last_client_id']; ?>">
                        <div class="mb-3">
                            <label for="txtModelo" class="form-label">Modelo</label>
                            <input type="text" name="modelo" class="form-control" id="txtModelo">
                        </div>
                        <div class="mb-3">
                            <label for="txtPlaca" class="form-label">Placa</label>
                            <input type="text" name="placa" class="form-control" id="txtPlaca">
                        </div>
                        <div class="mb-3">
                            <label for="txtCor" class="form-label">Cor</label>
                            <input type="text" name="cor" class="form-control" id="txtCor">
                        </div>
                        <div class="mb-3">
                            <label for="txtMarca" class="form-label">Marca</label>
                            <input type="text" name="marca" class="form-control" id="txtMarca">
                        </div>
                        <div class="mb-3">
                            <label for="txtAno" class="form-label">Ano</label>
                            <input type="text" name="ano" class="form-control" id="txtAno">
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
            document.querySelector("#msgRegCar").style.display ="none";
        }, 2500);

    </script>

</body>
</html>