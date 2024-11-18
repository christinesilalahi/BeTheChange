<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="event-style.css">
</head>
<body>
        <div class="navbar">
            <img class="logo" src="logo2.png" alt="logo">
        </div>

        <div class="container">
            <div class="row-1">
                <img src="Picture1.png" alt="Poster" id="poster">
                <div class="text-content">
                    <h1>Kegiatan Bakti Sosial</h1>
                    <p><i class="fa-regular fa-calendar-days"></i> 23 Oktober 2024</p>
                    <p><i class="fa-solid fa-location-dot"></i> Desa Kebon Jeruk</p>
                    <a href="#" class="button1">Jadi Relawan</a>
                    <a href="#" class="button2">Kontak</a>
                </div>
            </div>

            <div class="row-2">
                <div class="profile">
                    <img src="Picture1.png" alt="Foto Profile" id="profile">       
                    <h2>GreenEarth</h2>
                </div>
                <p>Kegiatan akan berfokus pada pemberian layanan kesehatan bagi masyarakat yang kurang mampu atau tinggal di daerah terpencil. Layanan yang diberikan berupa pemeriksaan kesehatan umum, penyuluhan mengenai pola hidup sehat, pemberian obat-obatan gratis, hingga layanan khusus seperti pemeriksaan mata atau gigi.</p>
            </div>
            
            <div class="row-3">
              <h2>Relawan (4 orang)</h2>
              <div class="volunteer-container">
                <div class="volunteer">
                  <img src="Picture1.png" alt="Christine">
                  <p>Christine</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="dea">
                  <p>Dea</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="gina">
                  <p>Ghina</p>
                </div>
                <div class="volunteer">
                  <img src="Picture1.png" alt="angel">
                  <p>Angel</p>
                </div>
              </div>
            </div>
        </div>

        <div class="footer">
          <script src="https://kit.fontawesome.com/7617b7392d.js" crossorigin="anonymous"></script>
          <div class="col-1">
              <br>
              <img class="footerlogo" src="logo-text.png">
          </div>
          <div class="col-2">
              <br><br>
              <h3>Get In Touch With Us</h3>
              <div class="social-icons">
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-tiktok"></i>
                  <i class="fab fa-x-twitter"></i>
                  <br><br><br>
                  <p>Copyright ©2024 BeTheChange, All Rights Reserved</p>
              </div>
          </div>
          <div class="col-3">
              <br><br><br>
              <a href="#">About Us</a>
          </div>
        </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/event-style.css') }}">
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <img class="logo" src="{{ asset('images/logo2.png') }}" alt="logo">
    </div>

    <!-- BODY -->
    <div class="container">
        <div class="row-1">
            <img src="{{ asset('images/' . $event->poster_image) }}" alt="Poster" id="poster">
            <div class="text-content">
                <h1>{{ $event->name }}</h1>
                <p><i class="fa-regular fa-calendar-days"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</p>
                <p><i class="fa-solid fa-location-dot"></i> {{ $event->location }}</p>
                <a href="#" class="button1">Jadi Relawan</a>
                <a href="#" class="button2">Kontak</a>
            </div>
        </div>

        <div class="row-2">
            <div class="profile">
                <img src="{{ asset('images/' . $event->organizer_image) }}" alt="Foto Profile" id="profile">       
                <h2>{{ $event->organizer_name }}</h2>
            </div>
            <p>{{ $event->description }}</p>
        </div>

        <div class="row-3">
            <h2>Relawan ({{ $volunteers->count() }} orang)</h2>
            <div class="volunteer-container">
                @foreach($volunteers as $volunteer)
                <div class="volunteer">
                    <img src="{{ asset('images/' . $volunteer->image) }}" alt="{{ $volunteer->name }}">
                    <p>{{ $volunteer->name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <script src="https://kit.fontawesome.com/7617b7392d.js" crossorigin="anonymous"></script>
        <div class="col-1">
            <br>
            <img class="footerlogo" src="{{ asset('images/logo-text.png') }}">
        </div>
        <div class="col-2">
            <br><br>
            <h3>Get In Touch With Us</h3>
            <div class="social-icons">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tiktok"></i>
                <i class="fab fa-x-twitter"></i>
                <br><br><br>
                <p>Copyright ©2024 BeTheChange, All Rights Reserved</p>
            </div>
        </div>
        <div class="col-3">
            <br><br><br>
            <a href="#">About Us</a>
        </div>
    </div>
</body>
</html>
