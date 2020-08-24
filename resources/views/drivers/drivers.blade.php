@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title-page">Gerenciamento de motoristas</h3>

        @if(!empty($message))
        <p class="alert alert-success"> {{ $message }} </p>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row btn-add-register">
                    <a href="/motoristas/criar" class="btn btn-success btn">Cadastrar</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Situação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($drivers as $driver)
                            @if ($driver->is_active != 0)
                                <tr>
                                    <td>{{$driver->name}} </td>
                                    <td>{{$driver->document_number}} </td>
                                    <td>{{$driver->phone_number}}</td>

                                    @if ($driver->is_active == 1)
                                        <td>Ativo</td>
                                    @else
                                        <td>Desativado</td>
                                    @endif

                                    <td>
                                        <div style="display: flex">
                                            <a class="btn btn-primary btn-sm mr-1" href="/motoristas/{{$driver->id}}/editar">Editar</a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="paginator">
                    {{ $drivers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
