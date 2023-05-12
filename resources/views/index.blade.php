<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema WEB</title>
    @vite([
        'resources/js/app.js', 
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ])
</head>
<body> 
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12 px-3">
                <a class="navbar-brand" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consultar">Consultar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="card mb-3 col-12">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                    <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                    <form method="POST" action="/cadastrar">
                    @csrf   
                        <div class="form-group">
                            <label for="txtNome">Nome:</label>
                            <input type="text" class="form-control" name="nome" required id="txtNome">
                        </div>
                        <div class="form-group">
                            <label for="txtTelefone">Telefone:</label>
                            <input type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                        </div>
                        <div class="form-group">
                            <label for="txtOrigem">Origem:</label>
                            <select class="form-control" required name="origem" id="txtOrigem">
                                <option>Celular</option>
                                <option>Fixo</option>
                                <option>Whatsapp</option>
                                <option>Facebook</option>
                                <option>Instagram</option>
                                <option>Google Meu Negocio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="txtDataContato">Data do Contato:</label>
                            <input type="date" class="form-control" required name="data_contato" id="txtDataContato">
                        </div>
                        <div class="form-group">
                            <label for="txtObservacao">Observação</label>
                            <textarea class="form-control" name="observacao" id="txtObservacao" rows="3"></textarea>
                        </div>
                        <div>&nbsp;</div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>