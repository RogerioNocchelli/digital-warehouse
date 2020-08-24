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
                <div class="col-md-3">
                    <label>Quantidade descarregada (em Kg)</label>
                    <input type="number" step="any" class="form-control" name="starting_quantity" id="starting_quantity">
                </div>

                <div class="col-md-3">
                    <label>Quantidade da nota (em Kg)</label>
                    <input type="number" step="any" class="form-control" name="final_quantity" id="final_quantity">
                </div>

                <div class="col-md-3">
                    <label>Horário de chegada descarga</label>
                    <input type="datetime-local" class="form-control" name="arrival_date" id="arrival_date" placeholder="">
                </div>

                <div class="col-md-3">
                    <label>Horário de saída descarga</label>
                    <input type="datetime-local" class="form-control" name="departure_date" id="departure_date" placeholder="">
                </div>
            </div>

            <div class="row" style="display: flex; justify-content: space-between;">
                <span>* Campos obrigatórios.</span>
                <p class="difference-between"></p>
                <button class="btn btn-primary add-drive-btn">Adicionar</button>
            </div>
        </form>
    </div>
@endsection
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/discharges.js') }}" defer></script>
