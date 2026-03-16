@extends('posts.layout')
@section('content')
    <h1>Crear Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título" value="{{ old('title') }}">
        <input type="text" name="slug" placeholder="Slug (ej: mi-post)" value="{{ old('slug') }}">
        <input type="text" name="category" placeholder="Categoría" value="{{ old('category') }}">
        <textarea name="content" placeholder="Contenido">{{ old('content') }}</textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection