@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $comic['title'] }}</h1>
            <ul>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                {{-- i punti esclamativi servono per visualizare meglio certi caratteri nel db --}}
                <li>{!! $comic['description'] !!}</li>
                <li>{{ $comic['type'] }}</li>
                <li>{{ $comic['price'] }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection