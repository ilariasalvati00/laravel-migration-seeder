@extends('layouts.app')

@section('content')
    @foreach ($treni as $treno)
        <h4>Stazione di partenza {{$treno->stazione_di_partenza}}</h4>
        <h4>Stazione di arrivo {{$treno->stazione_di_arrivo}}</h4>
        <h4>Orario di partenza {{$treno->orario_di_partenza}}</h4>
        <h4>Orario di arrivo {{$treno->orario_di_arrivo}}</h4>
        <h4>Codice treno {{$treno->codice_treno}}</h4>
        <hr>
    @endforeach
@endsection