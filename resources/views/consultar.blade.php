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
                        <li class="nav-item">
                            <a class="nav-link" href="/">Cadastrar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Consultar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="card mb-3 col-12">
                <div class="card-body">
                    <h5 class="card-title">Consultar - Agendamento de Potenciais Clientes</h5>
                    <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Origem</th>
                                    <th>Data do Contato</th>
                                    <th>Observação</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agendamentos as $agendamento)
                                    <tr>
                                        <td>{{$agendamento->nome}}</td>
                                        <td>{{$agendamento->telefone}}</td>
                                        <td>{{$agendamento->origem}}</td>
                                        <td>{{$agendamento->data_contato}}</td>
                                        <td>{{$agendamento->observacao}}</td>
                                        <td>
                                            <a href="{{ route('agendamentos.edit', ['id' => $agendamento->id]) }}" class="btn btn-outline-success">Editar</a>
                                            <form method="POST" action="{{ route('agendamentos.destroy', ['id' => $agendamento->id]) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>