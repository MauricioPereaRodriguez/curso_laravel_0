@extends('layout')

@section('content')
    <h1>Usuario # {{$id}}}</h1>
            
    Mostrando detalle del usuario: {{$id}}               
@endsection

@section('sidebar')
    @parent
    <h2>Barra personalizada!!!</h2>
@endsection