@extends('app')

@section('titulo', 'Editar Diarista')

@section('conteudo')
    <h1>Editar Diarista</h1>
    <form action="{{ route('diaristas.update', $diarista)}}" method="POST" enctype="multipart/form-data">
 
      @include('_form')
      @method('PUT')

    <form>
@endsection