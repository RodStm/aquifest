@extends('layouts.main')

@section('title','Criar Festival')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Festival</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
            <label for="image">Imagem do Festival:</label>
            <input type="file" id="image" name="image" class="from-control-file"> 
        </div>
    <div class="form-group">
            <label for="title">Festivais:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Festival">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Festival">
        </div>
        <div class="form-group">
            <label for="title">O Evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Festival?"></textarea>
        </div>
      <input type="submit" class="btn btn-primary" value="Criar Festival">
    </form>
</div>


@endsection