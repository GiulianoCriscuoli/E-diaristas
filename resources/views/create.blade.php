@extends('app')

@section('title', 'Criar novo registro')

@section('content')

    <div class="container">
        <h1>Criar novo registro</h1>

        <form method="POST" action="{{ route('diarists.store') }}" enctype="multipart/form-data">
           
            @include('_form')

        </form> 
    </div>
@endsection