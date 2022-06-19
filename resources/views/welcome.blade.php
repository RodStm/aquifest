@extends('layouts.main')

@section('title','Aqui Fest')

@section('content')
    
<div id="search-container" class="col-md-12">
    <h1>Próximos Festivais</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" calss="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col.md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos Festivais</h2>
        <p class="subtitle">Veja os Festivias dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
       @foreach($events as $event)
        <div class="card col-md-3">
            <img src="{{ $event->image !== '' ? '/img/events/' . $event->image : '/img/event_placeholder.jpg' }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p> 
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-participants"> {{ count($event->users) }} Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
       @endforeach
       @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum Festivais com {{ $search }}! <a href="/"> Ver Todos </a></p>
       @elseif(count($events) == 0)
            <p>Não há Festivais disponíveis</p>
       @endif
    </div>

</div>
@endsection 