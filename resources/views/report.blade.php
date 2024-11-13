@extends('layouts.layout')
<title>Create Report</title>
<link href="{{ asset('assets/css/report-style.css') }}" rel="stylesheet">
   
@section('content')
    <!-- BODY -->
    <div class="container">
        <h1>Laporan Kegiatan</h1>
        <form action="#">
            <label for="laporan">Isi Laporan:</label>
            <textarea name="laporan" id="laporan" placeholder="Tuliskan proses dan hasil dari kegiatan..."></textarea>
            <label for="file">Upload file/foto pendukung:</label>
            <input type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .pdf" class="choose-file-btn">
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
