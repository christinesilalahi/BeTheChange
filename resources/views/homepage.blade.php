@extends('layouts.layout')
<title>Homepage</title>
<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
   
@section('content')
   <!-- BODY -->
    <div class="tagline">
        <div class="box">
            <img src="{{ asset('assets/images/tagline-pic.png') }}" class="image">
            <div class="tagline-text">
                <p class="tagline-text1">Ambil Peran Jadi Relawan</p>
                <p class="tagline-text2">Jadilah Bagian dari Perubahan Nyata dengan BeTheChange.</p>
            </div>
            <a href="#"><div class="tagline-button-box">Cari Aktivitas</div></a>
        </div>
    </div>

    <div class="homepage-body">
        <div class="currently-activities">
            <p class="text1">Mari Beraksi!</p>
            <a href="#"><div class="see-more1">Lihat Semua</div></a>
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
        </div>

        <div class="prev-activities">
            <p class="text1">Lihat Kegiatan Kami Sebelumnya</p>
            <a href="#"><div class="see-more2">Lihat Semua</div></a>
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
        </div>
    </div>
@endsection
