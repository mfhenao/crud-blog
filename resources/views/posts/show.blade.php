@extends('posts.layout')

@section('title', 'Detalle del Post')

@section('content')
    <a href="{{ route('posts.index') }}">← Volver al listado</a>
    
    <div style="margin-top: 20px;">
        <h1>{{ $post->title }}</h1>
        <p><strong>Categoría:</strong> {{ $post->category ?? 'General' }}</p>
        <p><strong>URL Amigable:</strong> <code>{{ $post->slug }}</code></p>
        
        <hr>
        
        <div style="background: #fdfdfd; padding: 20px; border: 1px solid #eee;">
            {!! nl2br(e($post->content)) !!}
        </div>
        
        <hr>
        
        <div style="margin-top: 20px;">
            <a href="{{ route('posts.edit', $post) }}">Editar Post</a> | 
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Seguro que deseas eliminarlo?')" style="background:none; border:none; color:red; cursor:pointer; font-size:16px;">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
@endsection