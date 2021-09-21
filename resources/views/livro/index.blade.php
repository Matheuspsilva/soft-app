@extends('layouts.app')

@section('content')
    <body class="bg-light">

        <div class="container ">

            <div class="pt-5 text-center">
                <h1>Listagem de Livros</h1>
            </div>
            <div class="d-flex float-left">
                <a href="{{route('clima.index')}}" class="btn btn-secondary m-2">Verificar clima</a>
            </div>
            <div class="d-flex float-right">
                <a href="{{route('livros.create')}}" class="btn btn-primary m-2">Cadastrar Livro</a>
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

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Número de páginas</th>
                        <th scope="col">Data de Cadastro</th>
                        <th scope="col">Detalhes</th>

                    </tr>
                </thead>
                <tbody>
                    @if(empty($livros))
                        <tr class="text-center">
                            <td colspan="8">
                                <span>Nenhum livro encontrado.</span>
                            </td>
                        </tr>
                    @else
                        @foreach ($livros as $livro)
                            <tr>
                                <td class="align-middle text-center">
                                    {{$livro->titulo}}
                                </td>
                                <td class="align-middle">
                                    {{$livro->descricao}}
                                </td>
                                <td class="align-middle text-center">
                                    {{$livro->autor}}
                                </td>
                                <td class="align-middle text-center">
                                    {{$livro->numero_de_paginas}}
                                </td>
                                <td class="align-middle text-center">
                                    {{$livro->created_at}}
                                </td>
                                <td class="align-middle text-center">
                                    <a href="{{route('livros.show', [$livro->id])}}">Ver detalhes</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            {{-- {{ $livros->links() }} --}}
            <div class="d-flex justify-content-center">
                {!! $livros->links() !!}
            </div>


        </div>

    </body>
@endsection
