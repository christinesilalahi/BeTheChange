@extends('layouts.layout')
<title>Homepage</title>
<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
   
@section('content')
   <!-- BODY -->
    <div class="tagline">
        <div class="box">
            <img src="{{ asset('assets/images/tagline-pic.png') }}" class="image">
            <div class="tagline-text">
                <p class=tagline-text1>Ambil Peran Jadi Relawan</p>
                <p class=tagline-text2>Jadilah Bagian dari Perubahan Nyata dengan BeTheChange.</p>
            </div>
            <a href="#"><div class="tagline-button-box">Cari Aktivitas</div></a>
        </div>
    </div>

    <div class="homepage-body">
        <div class="currently-activities">
            <p class="text1">Mari Beraksi!</p>
            <a href="#"><div class="see-more1">Lihat Semua</div></a>
            <div class="container">
                @foreach($events as $event)
                <div class="box-event">
                    <div><img src={{$event->poster}}></div>
                    <h4>{{$event->name}}</h4>
                    <p>{{$event->date}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="prev-activities">
            <p class="text1">Lihat Kegiatan Kami Sebelumnya</p>
            <a href="#"><div class="see-more2">Lihat Semua</div></a>
            <div class="container">
                <div class="box-event">Past Event 1</div>
                <div class="box-event">Past Event 2</div>
                <div class="box-event">Past Event 3</div>
                <div class="box-event">Past Event 4</div>
            </div>
        </div>
    </div>
@endsection