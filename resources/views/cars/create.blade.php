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
        <form method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="">Marca *</label>
                    <input type="text" class="form-control" name="vehicle_brand" id="vehicle_brand">
                </div>

                <div class="col-md-5">
                    <label for="">Modelo *</label>
                    <input type="text" class="form-control" name="vehicle_model" id="vehicle_model">
                </div>

                <div class="col-md-4">
                    <label>Ano de fabricação *</label>
                    <input type="number" class="form-control" name="vehicle_year_manufacture" id="vehicle_year_manufacture">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label>Placa *</label>
                    <input type="text" class="form-control" name="vehicle_license_plate" id="vehicle_license_plate" maxlength="7" minlength="7">
                </div>

                <div class="col-md-4">
                    <label>Capacidade de carga (Kg) *</label>
                    <input type="number" step="any" class="form-control" name="cart_capacity" id="cart_capacity">
                </div>

                <div class="col-md-4">
                    <label>Número de eixos *</label>
                    <input type="number" class="form-control" name="cart_number_axles" id="cart_number_axles">
                </div>
            </div>

            <div class="row">
                <span>* Campos obrigatórios.</span>
            </div>


            <button class="btn btn-primary add-drive-btn">Adicionar</button>
        </form>
    </div>
@endsection
