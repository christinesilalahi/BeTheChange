@extends('layouts.layout')
<title>{{$past_event->name}}</title>
<link href="{{ asset('assets/css/past-event-detail-style.css') }}" rel="stylesheet">
   
@section('content')
<div class="container">
    <div class="row-1">
        <img src={{ $past_event->poster}} alt="Poster" id="poster">
        <div class="text-content">
            <h1>{{ $past_event->name }}</h1>
            <p><i class="fa-regular fa-calendar-days"></i> {{ \Carbon\Carbon::parse($past_event->date)->format('d F Y') }}</p>
            <p><i class="fa-solid fa-location-dot"></i> {{ $past_event->location }}</p>
            <a href="#" class="button1">Jadi Relawan</a>
            <a href="#" class="button2">Kontak</a>
        </div>
    </div>

    {{-- <div class="row-2">
        <div class="profile">
            <img src={{ $organizer->picture }} alt="Foto Profile" id="profile">       
            <h2>{{ $organizer->name}}</h2>
        </div>
        <p>{{ $past_event->description }}</p>
    </div> --}}

    <div class="row-3">
        <p>{{$past_event->description}}
        </p>
    </div>

    <div class="row-4">
        <img src={{$past_event->picture}}>
    </div>

    <div class="row-5">
        <h2>Report Kegiatan</h2>
        <p>{{$past_event->report}}</p>
      </div>

    <div class="row-6">
        <h2>Relawan ({{ $volunteers->count() }} orang)</h2>
        <div class="volunteer-container">
            @foreach($volunteers as $volunteer)
            <div class="volunteer">
                <img src="{{ asset('assets/images/profile-picture.png') }}"alt="{{ $volunteer->name }}">
                <p>{{ \Str::limit($volunteer->name, 13) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection