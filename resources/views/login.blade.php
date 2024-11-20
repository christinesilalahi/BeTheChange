@extends('layouts.layout')
<title>Masuk</title>
<link href="{{ asset('assets/css/login-style.css') }}" rel="stylesheet">

@section('content')
    <!-- BODY -->
    <div class="container">
        <div class="form-login">
            <h1>MASUK</h1>
            <form action="#">
              <label for="email">Email:</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Masukan email anda"
              />
              <label for="password">Password:</label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Masukan password anda"
              />
              <input type="submit" value="Login" />
            </form>
          </div>
          <div class="to-register">
            <p>Belum memiliki akun? <a href={{ route('register') }}>Daftar disini</a></p>
          </div>
          <div class="masuk-google">
            <i class="fab fa-google fa-2x"></i>
            Masuk dengan Google
          </div>
    </div>
@endsection
