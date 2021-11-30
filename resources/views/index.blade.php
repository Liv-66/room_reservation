@extends('layouts.main')

@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="/">首頁</a>
    </li>
</ul>
<br />

<div class="row">
    @foreach($rooms as $room)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="storage/{{ $room->photo }}" alt="Card image cap" width="286px" height="180px">
            <div class="card-body">
                <p class="card-text">
                    <a href="/api/v1/rooms/{{ $room->id }}">
                        {{ $room->name }}
                    </a>
                </p>
                <span class="badge badge-secondary">定價：{{ $room->price }}</span>
                <p class="card-text card-content">{{ $room->description }}</p>
                @auth
                <a href="/api/v1/rooms/edit/{{ $room->id }}"  class="card-botton btn-primary">編輯</a>
                @endauth
                @guest
                <a href="/api/v1/rooms/booking/{{ $room->id }}"  class="card-botton btn-primary">預定</a>
                @endguest
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection