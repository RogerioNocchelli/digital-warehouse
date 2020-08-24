@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/cars/{{$car->id}}/save">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-3">
                    <label>Placa*</label>
                    <input type="text" class="form-control" name="vehicle_license_plate" id="vehicle_license_plate" value="{{$car->vehicle_license_plate}}" disabled>
                </div>

                <div class="col-md-5">
                    <label for="">Marca *</label>
                    <input type="text" class="form-control" name="vehicle_brand" id="vehicle_brand" value="{{$car->vehicle_brand}}">
                </div>

                <div class="col-md-4">
                    <label for="">Modelo *</label>
                    <input type="text" class="form-control" name="vehicle_model" id="vehicle_model" value="{{$car->vehicle_model}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label>Ano de fabricação</label>
                    <input type="number" class="form-control" name="vehicle_year_manufacture" id="vehicle_year_manufacture" value="{{$car->vehicle_year_manufacture}}">
                </div>

                <div class="col-md-4">
                    <label>Capacidade de carga (Kg) *</label>
                    <input type="text" class="form-control" name="cart_capacity" id="cart_capacity" value="{{$car->cart_capacity}}">
                </div>

                <div class="col-md-4">
                    <label>Número de eixos *</label>
                    <input type="text" class="form-control" name="cart_number_axles" id="cart_number_axles" value="{{$car->cart_number_axles}}">
                </div>
            </div>

            <div class="row block-situation-register">
                <div class="col-md-6">
                    <label>Situação</label>
                    <select class="form-control" name="is_active" id="is_active">
                        @if ($car->is_active = 1)
                            <option value="1" selected>Ativado</option>
                            <option value="0">Desativado</option>
                        @else
                            <option value="0" selected>Desativado</option>
                            <option value="1">Ativado</option>
                        @endif
                    </select>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary add-drive-btn">Alterar</button>
                </div>
            </div>

            <div class="row">
                <span>* Campos obrigatórios.</span>
            </div>

        </form>
    </div>
@endsection
