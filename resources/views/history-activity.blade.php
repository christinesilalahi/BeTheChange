@extends('layouts.layout')
<title>History Activity</title>
<link rel="stylesheet" href="{{ asset('assets/css/activity.css') }}">

@section('content')
<body>
    <p class="title">Aktivitas Sebelumnya</p>
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
        @foreach($past_events as $past_event)
        <div class="activity-card">
            <img src="{{ asset('assets/images/' . $past_event->poster) }}" alt="{{ $past_event->name }}">
            <div class="activity-details">
                <h3>{{ $past_event->name }}</h3>
                <p class="date">{{ \Carbon\Carbon::parse($past_event->date)->format('d F Y') }}</p>
                <p class="location">{{ $past_event->location }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>
@endsection
