@extends('layouts.plantilla')

@section('title', 'Prueba de Formulario')

@section('content')
    <form>
        <h2>CREAR POST</h2>
        <div class="form-group">
            <label>Título:</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label>Resumen:</label>
            <textarea id="" name="excerpt" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label>Contenido:</label>
            <textarea id="" name="content" cols="30" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <form class="form-post" action="/blog/public/posts" method="POST">
        <h2>CREAR POST</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Resumen</label>
            <input type="text" class="form-control" id="excerpt" name="excerpt">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contenido</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
