<?php
    use App\Helper\DateTimeHelper;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/client/new">Novo Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/car/new">Novo Veiculo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/car/info">Informações</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if(empty($this->view->carDataInfo)) {?>
            <span class="alert alert-warning"> Não há dados para serem exibidos</span>

        <?php } else { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Identificação</th>
                    <th scope="col">Cadastro em</th>
                </tr>
            </thead>
            <tbody>

            
                
                <?php foreach($this->view->carDataInfo as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= $value['idveiculo'];?></th>
                        <td><?= $value['modelo'];?></td>
                        <td><?= $value['marca'];?></td> 
                        <td><?= $value['placa'];?></td> 
                        <td><?= $value['cor'];?></td> 
                        <td><?= $value['ano'];?></td> 
                        <td><?= $value['nome'];?></td> 
                        <td><?= $value['nridentificacao'];?></td>
                        <td><?= DateTimeHelper::toNormalFormat($value['dt_cadastro']);?></td>
                    
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
    

    
</body>
</html>