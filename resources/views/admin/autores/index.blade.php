@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Autores') }}</div>
                    <div class="card-body">

                        <a href="{{ route('autores.create') }}" class="btn btn-primary">
                            Novo
                        </a>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($autores as $autor)                                  
                               
                                <tr>
                                    <th scope="row">{{ $autor->id }}</th>
                                    <td>{{ $autor->nome }}</td>
                                    <td>{{ $autor->descricao }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning">
                                            Editar
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            Deletar
                                        </a>
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
@endsection
