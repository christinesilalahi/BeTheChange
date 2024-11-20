@extends('layouts.layout')
<link href="{{ asset('assets/css/home-style.css') }}" rel="stylesheet">
<title>BeTheChange</title>

@section('content')
<div>
    <div class="tagline">
        <img src="{{ asset('assets/images/tagline-pic.png') }}" class="image">
        <div class="tagline-text">
            <p class=tagline-text1>Ambil Peran Jadi Relawan</p>
            <p class=tagline-text2>Jadilah Bagian dari Perubahan Nyata dengan BeTheChange.</p>
        </div>
        <a href={{ route('events') }}><div class="tagline-button-box">Cari Aktivitas</div></a>  
    </div>
    
    <div class="homepage-body">
        <div class="events">
            <div class="title">
                <p class="event-text">Mari Beraksi!</p>
                <a href={{ route('events') }}><div class="see-more">Lihat Semua</div></a>
            </div>
            <div class="container">
                @foreach($events as $event)
                <div class="box-event">
                    <a href={{ route('event.details', ['id'=>$event->id]) }}>
                        <div><img src={{$event->poster}}></div>
                    </a>
                    <h3>{{\Str::limit($event->name, 18)}}</h3>
                    <p>{{\Carbon\Carbon::parse($event->date)->format('d F Y')}}</p>
                    <p>{{\Str::limit($event->location, 25)}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="past-events">
            <div class="title">
                <p class="past-events-text">Lihat Kegiatan Kami Sebelumnya</p>
                <a href={{ route('past-events') }}><div class="see-more">Lihat Semua</div></a>
            </div>
            <div class="container">
                @foreach($past_events as $past_event)
                <div class="box-event">
                    <a href={{ route('past-event.details', ['id'=>$past_event->id]) }}>
                        <div><img src={{$past_event->poster}}></div>
                    </a>
                    <h3>{{\Str::limit($past_event->name, 18)}}</h3>
                    <p>{{\Carbon\Carbon::parse($past_event->date)->format('d F Y')}}</p>
                    <p>{{\Str::limit($past_event->location, 25)}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection