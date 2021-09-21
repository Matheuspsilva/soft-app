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
                <h1>Detalhes do Livro</h1>
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

                    @if(empty($livro))
                        <span>Nenhum livro encontrado.</span>
                    @else
                    <div class="card shadow m-5 ">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="">
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nome: {{$livro->titulo}}</h5>
                                    <p class="card-text lead">Descrição: {{$livro->descricao}}</p>
                                    <p>Autor: {{$livro->autor}}</p>
                                    <p>Número de páginas: {{$livro->numero_de_paginas}}</p>
                                    <p class="card-text"><small class="text-muted">Data de cadastro: {{$livro->created_at}}</small></p>
                                    <div class="row">
                                        <a href="{{route('livros.edit', [$livro->id])}}" class="btn btn-primary mx-3">Editar</a>
                                        <form action="{{route('livros.destroy', [$livro->id])}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endif
                </tbody>
            </table>

        </div>

    </body>
</html>
