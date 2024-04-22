<!DOCTYPE html>
<html>
    <head>
        <!--implementar css/js aqui-->
        <meta charset="UTF-8">
        <title>Bem vindo ao Oficina Conectada</title>
         <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <body>
        <?= $this->view->result; ?>
        <hr>
        <a href="/relatorio">Gerar Relatorio</a>
    </body>
    
</html>