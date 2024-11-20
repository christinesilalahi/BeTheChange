@extends('layouts.layout')
<title>Create Event</title>
<link href="{{ asset('assets/css/event-create.css') }}" rel="stylesheet">
   
@section('content')
   <!-- BODY -->
    <div class="buat-kegiatan">
        <p class="judul">Buat kegiatan</p>
        <!-- <form action="" method="POST"> -->
            @csrf
            <div class="inputBox">
                <label>Nama Kegiatan</label>
                <input type="text" placeholder="Masukkan nama kegiatan" />
            </div>

            <div class="inputBox">
                <label>Deskripsi Kegiatan</label>
                <textarea type="text" placeholder="Masukkan deskripsi kegiatan"></textarea>
            </div>

            <div class="inputBox">
                <label>Tanggal Kegiatan</label>
                <input type="text" placeholder="Masukkan tanggal kegiatan" />
            </div>

            <div class="inputBox">
                <label>Lokasi Kegiatan</label>
                <input type="text" placeholder="Masukkan lokasi kegiatan" />
            </div>

            <div class="inputBox">
                <label>Kontak</label>
                <input type="text" placeholder="Masukkan kontak yang dapat dihubungi" />
            </div>

            <div class="inputBox-file">
                <label>Upload poster (.jpg/.png)</label>
                <input type="file" id="fileInput" />
                <div id="error-message" style="color: red; display: none;">Please upload a .jpg or .png file.</div>
            </div>

            <button type="submit" onclick="validateFile()">Submit</button>
        <!-- </form> -->
    </div>
@endsection