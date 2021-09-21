<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container">

            <div class="pt-5 text-center">
                <h1>Cadastro de Livros</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <h3>Sucesso!</h3>
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif

                    @if(Session::has('errors') and $errors->any())
                        <div class="alert alert-danger">
                            {{-- Ajuste para mostrar todos os erros de uma vez --}}
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <form action="{{route('livros.store')}}" method="POST">
                @csrf
                <div class="card shadow m-5 p-5">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-12 mb-3 pl-0">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Informe o título do livro" value="{{ old('titulo') }}" name="titulo" required>
                                <div class="invalid-feedback">
                                    Informe um título para o livro
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 pl-0">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" placeholder="Informe uma descrição para o livro" value="{{ old('descricao') }}" name="descricao" required>
                                <div class="invalid-feedback">
                                    Informe uma descrição para o livro
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 pl-0">
                                <label for="autor">Autor</label>
                                <input type="text" class="form-control" id="autor" placeholder="Informe o autor do livro" value="{{ old('autor') }}" name="autor" required>
                                <div class="invalid-feedback">
                                    Informe um autor para o livro
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 pl-0">
                                <label for="autor">Número de páginas</label>
                                <input type="number" class="form-control" id="numero_de_paginas" placeholder="Informe número de páginas do livro" value="{{ old('numero_de_paginas') }}" name="numero_de_paginas" min="1" required>
                                <div class="invalid-feedback">
                                    Informe o número de páginas do livro
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </div>

            </form>

        </div>

    </body>
</html>
