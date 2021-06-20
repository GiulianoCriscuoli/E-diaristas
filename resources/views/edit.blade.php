@extends('app')

@section('title', 'Criar novo registro')

@section('content')

    <div class="container">
        <h1>Editar Registro</h1>

        <form method="POST" action="{{ route('diarists.update', $diarist->id) }}" enctype="multipart/form-data">
           
            @include('_form')
            @method('PUT')

        </form> 
    </div>
@endsection