@extends('base')

@section('main')
<div class="row">
<a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
<a href="{{ url('/tutores/create') }}" class="text-sm text-gray-700 underline">Create</a>
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Empresa</td>
          <td>Documento</td>
          <td>Dni</td>
          <td>Nombre</td>
          <td>Pais</td>
          <td>Provincia</td>
          <td>Municipio</td>
          <td>Estado</td>
          <td>Telefono</td>
          <td>Email</td>
        </tr>
    </thead>
    <div>
    <a style="margin: 19px;" href="{{ route('tutores.create')}}" class="btn btn-primary">New tutor</a>
    </div>
    <tbody>
        @foreach($tutores as $tutor)
        <tr>
            <td>{{$tutor->id}}</td>
            <td>{{$tutor->empresa}}</td>
            <td>{{$tutor->documento}}</td>
            <td>{{$tutor->dni}}</td>
            <td>{{$tutor->nombre}} {{$tutor->primer_apellido}} {{$tutor->segundo_apellido}}</td>
            <td>{{$tutor->pais}}</td>
            <td>{{$tutor->provincia}}</td>
            <td>{{$tutor->municipio}}</td>
            <td>{{$tutor->estado}}</td>
            <td>{{$tutor->telefono}}</td>
            <td>{{$tutor->email}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="col-sm-12">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
</div>

@endsection
