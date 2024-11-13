@extends('layouts.layout')
<title>Activity</title>
<link rel="stylesheet" href="{{ asset('assets/css/activity.css') }}">

@section('content')
<body>
<p class="title">Cari Aktivitas, {{ $events->count() }} aktivitas membutuhkan bantuan</p>
    <div class="search-filter">
        <div class="search">
            <input type="text" placeholder="Cari aktivitas">
            <button type="submit">Search</button>
        </div>
        <div class="filters">
            <button>Filter</button>
            <button>Urutkan: Aktivitas Terbaru</button>
        </div>
    </div>

    <div class="activities">
        @foreach($events as $event)
        <div class="activity-card">
            <img src="{{ asset('assets/images/' . $event->poster) }}" alt="{{ $event->name }}">
            <div class="activity-details">
                <h3>{{ $event->name }}</h3>
                <p class="date">{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</p>
                <p class="location">{{ $event->location }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
@endsection
