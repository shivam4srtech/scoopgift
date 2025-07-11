<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGAFFI: The complete affiliate marketing solution for your ecommerce store</title>
    <link rel="shortcut icon" href="./images/bigaffilogo.jpeg" type="image/x-icon">
     <!-- ***********************************Montserrat********************************** -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;800&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
     <!-- *****************************OPENSANS************************ -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- *******************Fontawesome***************************** -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css"> --}}
    <!-- ***********************Bootstrap******************************* -->
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- ***********************Google-font*************************** -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Raleway:wght@800&display=swap" rel="stylesheet">
    <!-- ******************Local Stylesheet************************* -->
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/style.css">
    @stack('styles')
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.html"><img src="./images/bigaffilogo.jpeg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link home" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./pricing.html">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="resources.html">Resources </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gift-card">Dashboard</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link activ" href="/platforms">platforms</a>
                            </li>
                            <li class="nav-item loginBtn">
                                <a class="nav-link" href="/login">Login / Signup</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="container-fluid">
            <div class="container">
                <div class="row row-cols-2 footer-link">
                    <div class="col-lg-3 col-sm-6 link-item">
                        <h4>For Merchant</h4>
                        <ul>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 link-item">
                        <h4>For Affiliate</h4>
                        <ul>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 link-item">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6 link-item">
                        <h4>Our Policy</h4>
                        <ul>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row footer-box">
                    <div class="col-lg-6 col-sm-12 footer-item">
                        <form action="#some-where" class="subscribe">
                            <p class="info">Subscribe to our monthly newsletter for the latest updates and exclusive content.</p>
                            <input type="email" placeholder="Bussiness Email...">
                            <button>Subscribe</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-sm-8 socialIcon">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                        </a>
                        <a href="#">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                        </a>
                        <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                        </a>
                      
                    </div>
                    <div class="col-lg-2 col-sm-4 mobile-app">
                        <a href=""><img src="./images/Google_Play_Store_badge_EN-1-01-1.svg" alt=""></a>
                        <a href="" class="d-md-none"><img src="./images/App-store-apple.svg" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto copyright">
                        <a href=""><img src="./images/bigaffilogo.jpeg" alt=""></a>
                        <p>&copy 2023 <a href="">BigAffi LLP</a> All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>