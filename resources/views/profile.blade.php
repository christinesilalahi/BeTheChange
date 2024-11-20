@extends('layouts.layout')
<title>Profile</title>
<link href="{{ asset('assets/css/profile-style.css') }}" rel="stylesheet">

@section('content')
    <!-- BODY -->
    <div class="container">
      <div class="user-container">
        <img src="{{$user->picture}}" class="image">
        <div class="user-info">
            <h3>{{$user->name}}</h3>
            <p>{{$user->type}}</p>
        </div>
      </div>
      <form action="#">
        <label for="nama">Nama</label>
        <input
          type="text"
          name="nama"
          id="nama"
          placeholder="Masukan nama anda"
        />
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Masukan email anda"
        />
        <label for="phone">No. Telp:</label>
        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="Masukan no telp anda"
        />
        <input type="submit" value="Update" />
    </div>
@endsection