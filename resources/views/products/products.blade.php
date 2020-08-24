@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title-page">Gerenciamento de produtos</h3>

        @if(!empty($message))
            <p class="alert alert-success"> {{ $message }} </p>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row btn-add-register">
                    <a href="/produtos/criar" class="btn btn-success btn">Cadastrar</a>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Situação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{$product->name}}</td>
                                @if ($product->is_active == 1)
                                    <td class="text-center">Ativo</td>
                                @else
                                    <td class="text-center">Desativado</td>
                                @endif
                                <td>
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-sm mr-1" href="/produtos/{{$product->id}}/editar">Editar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
