<!DOCTYPE html>
<html>
  <head>
    <!--implementar css/js aqui-->
    <meta charset="UTF-8">
    <title>Bem vindo ao Oficina Conectada</title>
    <!-- Compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .divider:after,
      .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .h-custom {
        height: calc(100% - 73px);
      }
      @media (max-width: 450px) {
        .h-custom {
          height: 100%;
        }
      }
    </style>
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
                        <a class="nav-link" href="/">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Sobre</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="/client/new">Novo Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/car/new">Novo Veiculo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/car/info">Informações</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://chiptronic.com.br/blog/wp-content/uploads/2016/08/7-dicas-para-iniciantes-de-como-montar-uma-oficina-mec%C3%A2nica-768x505.jpg" class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="/auth" method="POST">
            
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="txtLogEmail" name="email" class="form-control form-control-lg"/>
            <label class="form-label" for="txtLogEmail">Email</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" id="txtLogNrId" name="nridentificacao" class="form-control form-control-lg"/>
            <label class="form-label" id="lblLogNrId" for="txtLogNrId">Nr de Identificação (Oficina)</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" name="tipo" value="" id="ckChange" />
              <label class="form-check-label" id="lblLogChange" for="ckChange">
                Alternar para Cliente
              </label>
            </div>
            <a href="/forgot" class="text-body">Esqueceu seu identicador?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Acessar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Não  possui cadastro? <a href="/contact"
                class="link-danger">Entre em contato</a></p>
          </div>
        </form>
        <?php if (isset($_GET['login']) && $_GET['login'] == 'erro' && isset($_GET['tipo']) && $_GET['tipo'] == "1") { ?>
              <div class="alert alert-warning" id="msgErroLogin">Não foi possível conectar o cliente</div>
            <?php } else { ?>
              <div class="alert alert-warning" id="msgErroLogin">Não foi possível conectar a oficina</div>
            <?php } ?>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © <?=date('Y') ?>. Todos direitos reservados.
    </div>
    <!-- Copyright -->
  </div>
</section>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script>
       let ckChange = document.getElementById('ckChange');
       let lblNrId =document.getElementById("lblLogNrId");
       let lblLogChange =document.getElementById("lblLogChange");

       ckChange.onchange = function(){
          if(ckChange.checked){
            ckChange.setAttribute("value", "1")
            lblNrId.innerHTML = "Nr de Identificação (Cliente)";
            lblLogChange.innerHTML = "Alternar para Oficina";
            
            
          } else {
            ckChange.setAttribute("value", "0")
            lblNrId.innerHTML = "Nr de Identificação (Oficina)";
            lblLogChange.innerHTML = "Alternar para Cliente";
          }
       }

       setTimeout(function(){
            document.querySelector("#msgErroLogin").style.display ="none";
        }, 2);

        document.addEventListener("DOMContentLoaded", function() {
        // Obtém o caminho da URL atual
        var path = window.location.pathname;

        // Seleciona a lista da navbar
        var navbarList = document.querySelector('.navbar-nav');

        // Seleciona todos os itens da lista da navbar
        var links = navbarList.querySelectorAll('.nav-item a');

        // Itera sobre os links da navbar
        links.forEach(function(link) {
            // Verifica se o atributo href do link corresponde ao caminho da URL atual
            if (link.getAttribute('href') === path) {
                // Adiciona a classe 'active' ao link correspondente
                link.classList.add('active');
            }
        });
    });
    </script>
    </body>
</html>