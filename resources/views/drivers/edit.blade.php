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
        <form method="POST" action="/drivers/{{$driver->id}}/save">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <label for="">CPF</label>
                    <input type="text" class="form-control" name="document_number" id="document_number" value="{{$driver->document_number}}" disabled>
                </div>

                <div class="col-md-8">
                    <label for="">Nome completo *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$driver->name}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{$driver->phone_number}}">
                </div>

                <div class="col-md-4">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="zip_code" id="zip_code" value="{{$driver->zip_code}}">
                </div>
            </div>


            <div class="row">
                <div class="col-md-8">
                    <label>Rua</label>
                    <input type="text" class="form-control" name="street" id="street" value="{{$driver->street}}">
                </div>

                <div class="col-md-4">
                    <label>Número</label>
                    <input type="text" class="form-control" name="number" id="number" value="{{$driver->number}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label>Bairro</label>
                    <input type="text" class="form-control" name="neighborhood" id="neighborhood" value="{{$driver->neighborhood}}">
                </div>

                <div class="col-md-5">
                    <label>Cidade</label>
                    <input type="text" class="form-control" name="city" id="city" value="{{$driver->city}}">
                </div>

                <div class="col-md-3">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="state" id="state" value="{{$driver->state}}">
                </div>
            </div>


            <div class="row block-situation-register">
                <div class="col-md-6">
                    <label>Situação</label>
                    <select class="form-control" name="is_active" id="is_active">
                        @if ($driver->is_active = 1)
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
