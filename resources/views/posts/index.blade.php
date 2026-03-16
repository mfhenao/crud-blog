@extends('posts.layout')
@section('content')
    <h1>Listado de Posts</h1>
    <table border="1" width="100%" cellpadding="10">
        <tr><th>Título</th><th>Acciones</th></tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ route('posts.show', $post) }}">Ver</a> |
                <a href="{{ route('posts.edit', $post) }}">Editar</a> |
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection