<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/header-footer.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/script.js') }}" defer></script>
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <a href={{ route('home') }} ><img class="logo" src="{{ asset('assets/images/logo2.png') }}" alt="logo"></a>
    </div>

    <div class="navigation">
        <button class="hamburger" onclick="show()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </button>

        <nav>
            <ul>
                <li><a href={{ route('register') }}>Login / Register</a></li>
                <li><a href={{ route('profile', ['id'=>1]) }}>Profile</a></li>
                <li><a href={{ route('make-event') }}>Create Event</a></li>
                <li><a href={{ route('make-report', ['id'=>1]) }}>Create Report</a></li>
            </ul>
        </nav>
    </div>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <div class="footer">
        <script src="https://kit.fontawesome.com/7617b7392d.js" crossorigin="anonymous"></script>
        <div class="col-1">
            <img class="footerlogo" src="{{ asset('assets/images/logo-text.png') }}">
        </div>
        <div class="col-2">
            <h3>Get In Touch With Us</h3>
            <div class="social-icons">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tiktok"></i>
                <i class="fab fa-x-twitter"></i>
            </div>
            <p>Copyright ©2024 BeTheChange, All Rights Reserved</p>
        </div>
        <div class="col-3">
            <a href="#">About Us</a>
        </div>
    </div>
</body>
</html>