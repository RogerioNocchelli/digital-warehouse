@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title-page">Gerenciamento de cargas</h3>

        @if(!empty($message))
            <p class="alert alert-success"> {{ $message }} </p>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row btn-add-register">
                    <a href="/carregamentos/criar" class="btn btn-success btn">Cadastrar</a>
                </div>
                @if ($charges->count() > 0)
                    <ul class="list-group">
                        @foreach($charges as $charge)
                            <li class="list-group-item driver-item">
                                <div class="charges-data">
                                    <p><strong>Carga</strong>: {{$charge->product->name}}</p>
                                    <p><strong>Carregado (Kg)</strong>: {{$charge->amount}}</p>
                                    <p><strong>Motorista</strong>: {{$charge->driver->name}}</p>
                                    <p><strong>Chegada do caminhão</strong>: {{$charge->arrival_date}}</p>
                                    <p><strong>Partida do caminhão</strong>: {{$charge->departure_date}}</p>
                                </div>

                                <form method="post" action="/charge/{{$charge->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h3>Nenhuma carga cadastrada.</h3>
                @endif
            </div>
        </div>
    </div>
@endsection
