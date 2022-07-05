@extends('layouts.app')

@section('contenido')
<div style="text-align: center" class="alert alert-success mt-5" role="alert">
    <h1>{{$liga['name']}} <img style="width: 70px; height: 70px;" src='{{$liga["flag"]}}'></h1>
    <h4>Partidos disputados desde: {{$dateFrom}} hasta: {{$dateTo}}</h4>
    <a href="{{ route('consultar') }}" class="btn btn-success btn-sm">Cambiar fechas</a>
</div>
<div class="alert alert-success mt-5" role="alert">
    <table class="table">
        <thead>
          <tr>
            <th style="text-align: center">Fecha</th>  
            <th style="text-align: center">Local</th>
            <th></th>
            <th style="text-align: center">Visitante</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($matchesArrayMathches as $match)
          <tr>
            <td style="text-align: center">
                {{$match['utcDate']}}
            </td>
            <td style="text-align: center">
                {{$match['homeTeam']['name']}}
                <img style="width: 20px; height: 20px;" src='{{$match["homeTeam"]["crest"]}}'>
            </td>
            <td style="text-align: center">
                {{$match['score']['fullTime']['home']}}
                -
                {{$match['score']['fullTime']['away']}}
            </td>
            <td style="text-align: center">
                {{$match['awayTeam']['name']}}
                <img style="width: 20px; height: 20px;" src='{{$match["awayTeam"]["crest"]}}'>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
   

@endsection