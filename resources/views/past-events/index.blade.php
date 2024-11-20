@extends('layouts.layout')
<link href="{{ asset('assets/css/home-style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/events-style.css') }}" rel="stylesheet">
<title>Past Events</title>

@section('content')
<div>
    <div class="homepage-body">
        <div class="events">
            <div class="title">
                <p class="event-text">Cari Aktivitas, 1.000.000 aktivitas membutuhkan bantuan</p>
                {{-- <a href={{ route('events') }}><div class="see-more">Lihat Semua</div></a> --}}
            </div>
            <div class="container">
                @foreach($past_events as $past_event)
                <div class="box">
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