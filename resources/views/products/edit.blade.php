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
        <form method="POST" action="/products/{{$product->id}}/save">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-7">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
                </div>

                <div class="block-situation-register col-md-5">
                    <div class="col-md-6">
                        <label>Situação</label>
                        <select class="form-control" name="is_active" id="is_active">
                            @if ($product->is_active == 1)
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
            </div>

            <div class="row">
                <span>* Campos obrigatórios.</span>
            </div>
        </form>
    </div>
@endsection
