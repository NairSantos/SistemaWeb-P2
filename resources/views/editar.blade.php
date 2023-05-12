<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema WEB - Editar</title>
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
                            <a class="nav-link" href="/">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/consultar">Consultar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="card mb-3 col-12">
                <div class="card-body">
                    <h5 class="card-title">Editar - Agendamento de Potenciais Clientes</h5>
                    <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                    <form method="POST" action="{{ route('agendamentos.update', $agendamento->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="txtNome">Nome:</label>
                            <input type="text" class="form-control" name="nome" required id="txtNome" value="{{ $agendamento->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="txtTelefone">Telefone:</label>
                            <input type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="{{ $agendamento->telefone }}">
                        </div>
                        <div class="form-group">
                            <label for="txtOrigem">Origem:</label>
                            <select class="form-control" required name="origem" id="txtOrigem">
                                <option {{ $agendamento->origem == 'Celular' ? 'selected' : '' }}>Celular</option>
                                <option {{ $agendamento->origem == 'Fixo' ? 'selected' : '' }}>Fixo</option>
                                <option {{ $agendamento->origem == 'Whatsapp' ? 'selected' : '' }}>Whatsapp</option>
                                <option {{ $agendamento->origem == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                                <option {{ $agendamento->origem == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                                <option {{ $agendamento->origem == 'Google Meu Negocio' ? 'selected' : '' }}>Google Meu Negocio</option>
                            </select>
                        </div>
                        <div class="form-group">
                    <label for="txtData">Data:</label>
                    <input type="date" class="form-control" name="data_contato" required id="txtData" value="{{ $agendamento->data_contato }}">
                </div>
                <div class="form-group">
                    <label for="txtObservacao">Observação:</label>
                    <textarea class="form-control" name="observacao" id="txtObservacao">{{ $agendamento->observacao }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
                </div>
                </div>
                </div>
                </div>
                </body>
                </html>