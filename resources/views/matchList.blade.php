@extends('layouts.app')

@section('contenido')
<div class="alert alert-success mt-5" role="alert">
    <h1>{{$liga}}</h1>
    <ul class="">
        @foreach ($arreglo as $item)
            <li>
                {{$item}}
            </li>
        @endforeach
    </ul>
</div>    

@endsection