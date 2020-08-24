@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="title-page">Olá, {{ Auth::user()->name }}</h3>
    <div class="row justify-content-center">
        <div class="col-md-12 logo-home">
            <img src="/img/icon.png">
        </div>
    </div>
</div>
@endsection
