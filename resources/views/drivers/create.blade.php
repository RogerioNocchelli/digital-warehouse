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
                    <div class="col-md-4">
                        <label for="">CPF *</label>
                        <input type="text" class="form-control mask-cpf" name="document_number" id="document_number">
                    </div>

                    <div class="col-md-8">
                        <label for="">Nome completo *</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label>Telefone *</label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number">
                    </div>

                    <div class="col-md-4">
                            <label>CEP *</label>
                            <input type="text" class="form-control" name="zip_code" id="zip_code">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label>Rua *</label>
                        <input type="text" class="form-control" name="street" id="street">
                    </div>

                    <div class="col-md-4">
                        <label>Número *</label>
                        <input type="text" class="form-control" name="number" id="number">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>Bairro *</label>
                        <input type="text" class="form-control" name="neighborhood" id="neighborhood">
                    </div>

                    <div class="col-md-5">
                        <label>Cidade *</label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>

                    <div class="col-md-3">
                        <label>Estado *</label>
                        <input type="text" class="form-control" name="state" id="state">
                    </div>
                </div>

                <div class="row">
                    <span>* Campos obrigatórios.</span>
                </div>

                <button class="btn btn-primary add-drive-btn">Adicionar</button>
            </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/drivers.js') }}"></script>
    <script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $("#document_number").inputmask({
            mask: ['999.999.999-99'],
            keepStatic: true
        });

        $("#phone_number").inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999"],
            keepStatic: true
        });

        $("#zip_code").inputmask({
            mask: ["99-999.999"],
            keepStatic: true
        });
    </script>
@endsection


