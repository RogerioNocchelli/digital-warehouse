@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title-page">Gerenciamento de descargas</h3>

        @if(!empty($message))
            <p class="alert alert-success"> {{ $message }} </p>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row btn-add-register">
                    <a href="/descarregamentos/criar" class="btn btn-success btn">Cadastrar</a>
                </div>
                @if ($discharges->count() > 0)
                    <ul class="list-group">
                        @foreach($discharges as $discharge)
                            <li class="list-group-item driver-item">
                                <div class="charges-data">
                                    <p><strong>Carga</strong>: {{$discharge->product->name}}</p>
                                    <p><strong>Descarregado (Kg)</strong>: {{$discharge->final_quantity}}</p>
                                    <p><strong>Motorista</strong>: {{$discharge->driver->name}}</p>
                                    <p><strong>Chegada do caminhão</strong>: {{$discharge->arrival_date}}</p>
                                    <p><strong>Partida do caminhão</strong>: {{$discharge->departure_date}}</p>
                                </div>

                                <form method="post" action="/discharge/{{$discharge->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h3>Nenhum descarregamento cadastrado.</h3>
                @endif
            </div>
        </div>
    </div>
@endsection
