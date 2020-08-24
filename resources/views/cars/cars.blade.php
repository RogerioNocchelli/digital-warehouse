@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title-page">Gerenciamento de veículos</h3>

        @if(!empty($message))
            <p class="alert alert-success"> {{ $message }} </p>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row btn-add-register">
                    <a href="/veiculos/criar" class="btn btn-success btn">Cadastrar</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Fabricante</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Placa Veículo</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            @if ($car->is_active != 0)
                            <tr>
                                <td>{{$car->vehicle_brand}} </td>
                                <td>{{$car->vehicle_model}} </td>
                                <td>{{$car->vehicle_license_plate}}</td>
                                @if ($car->is_active == 1)
                                    <td>Ativo</td>
                                @else
                                    <td>Desativado</td>
                                @endif
                                <td>
                                    <div style="display: flex">
                                        <a class="btn btn-primary btn-sm mr-1" href="/veiculos/{{$car->id}}/editar">Editar</a>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="paginator">
                    {{ $cars->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
