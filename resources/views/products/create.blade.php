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
                <div class="col-md-12">
                    <label for="">Nome do produto *</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>

            <div class="row">
                <span>* Campos obrigatórios.</span>
            </div>

            <button class="btn btn-primary add-drive-btn">Adicionar</button>
        </form>
    </div>
@endsection
