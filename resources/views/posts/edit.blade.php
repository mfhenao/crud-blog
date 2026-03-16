@extends('posts.layout')

@section('title', 'Editar Post')

@section('content')
    <h1>Editar Post</h1>

    {{-- La ruta debe incluir el objeto $post para saber qué registro actualizar --}}
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        {{-- Laravel necesita @method('PUT') porque los navegadores no soportan PUT directamente --}}
        @method('PUT')

        <label for="title">Título</label>
        {{-- old('campo', $post->campo) intenta mostrar el error de validación, si no, muestra el dato real --}}
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">

        <label for="slug">Slug (URL amigable)</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">

        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">

        <label for="content">Contenido</label>
        <textarea name="content" id="content" rows="6">{{ old('content', $post->content) }}</textarea>

        <div style="margin-top: 20px;">
            <button type="submit">Actualizar Post</button>
            <a href="{{ route('posts.index') }}" style="margin-left: 15px; color: #666; text-decoration: none;">Cancelar</a>
        </div>
    </form>
@endsection