@extends('layouts.app')

@section('contenido')
<div style="text-align: center" class="alert alert-success mt-5" role="alert">
    <h1>PREMIER LEAGUE</h1>
    <h4>A continuación seleccione las fechas que desea consultar</h4>
</div>
<div class="alert alert-success mt-5" role="alert">
  <form action="{{ route('partidos.index') }}" method ="GET">
    @csrf
    <label class="col-sm-2 col-form-label">Fecha desde:</label>
    <input type="text" class="form-control form-control-sm" name="dateFrom" id="dateFrom" placeholder="Desde" required>
    <label class="col-sm-2 col-form-label">Fecha hasta:</label>
    <input type="text" class="form-control form-control-sm" name="dateTo" id="dateTo" placeholder="Hasta" required>
    <br>
    <input type="submit" class="form-control btn btn-success btn-sm" value="Consultar">
  </form>
</div>
   

@endsection