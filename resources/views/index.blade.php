@extends('app')    
    
@section('title', 'E-diaristas')

@section('content')
    <div class="container">
        <h1>Página inicial</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
                @forelse($diarists as $diarist)
                    <tr>
                        <th scope="row">{{ $diarist->id }}</th>
                        <td>{{ $diarist->fullname }}</td>
                        <td>{{ \Clemdesign\PhpMask\Mask::apply($diarist->phone, '(00) 0000-0000') }}</td>
                        <td>
                            <a href="{{ route('diarists.edit', $diarist->id) }}" class="btn btn-info btn-sm">Atualizar</a>
                            <a href="{{ route('diarists.destroy', $diarist->id) }}" onclick="return confirm('Tem certeza que deseja excluir?');" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                @empty 
                    <tr>
                        <th></th>
                        <td>Nenhum registro cadastrado</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('diarists.create')}}" class="btn btn-success">Nova diarista</a>
    </div>
@endsection