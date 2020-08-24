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
                <div class="col-md-5">
                    <label for="">Selecione o motorista</label>
                    <select class="form-control" name="driver_id">
                        <option disabled selected value>Selecione</option>
                        @foreach($drivers as $driver)
                            @if($driver->is_active == 1)
                                <option value="{{$driver->id}}">{{$driver->name}} - {{$driver->document_number}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="">Selecione o veiculo</label>
                    <select class="form-control" name="car_id">
                        <option disabled selected value>Selecione</option>
                        @foreach($cars as $car)
                            @if($car->is_active == 1)
                                <option value="{{$car->id}}">{{$car->vehicle_brand}} - {{$car->vehicle_model}} - {{$car->vehicle_license_plate}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <label>Selecione o produto</label>
                    <select class="form-control" name="product_id">
                        <option disabled selected value>Selecione</option>
                        @foreach($products as $product)
                            @if($product->is_active == 1)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label>Quantidade carregada (em Kg)</label>
                    <input type="number" step="any" class="form-control" name="amount" id="amount">
                </div>

                <div class="col-md-4">
                    <label>Data/hora de chegada para o carregamento</label>
                    <input type="datetime-local" class="form-control" name="arrival_date" id="arrival_date">
                </div>

                <div class="col-md-4">
                    <label>Data/hora de saída</label>
                    <input type="datetime-local" class="form-control" name="departure_date" id="departure_date">
                </div>
            </div>

            <div class="row">
                <span>* Campos obrigatórios.</span>
            </div>

            <button class="btn btn-primary add-drive-btn">Adicionar</button>
        </form>
    </div>
@endsection
