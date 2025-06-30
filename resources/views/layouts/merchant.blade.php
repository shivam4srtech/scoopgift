<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGAFFI: Merchant Dashboard</title>
    <link rel="shortcut icon" href="../images/bigaffilogo.jpeg" type="image/x-icon">
    <!-- *******************Fontawesome icons***************************** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <!-- *********************************Boxi-icons************************************ -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- ***********************************Montserrat********************************** -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;800&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Raleway:wght@800&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <!-- *******************local stylesheet******************** -->
    <link rel="stylesheet" href="../dashboard-pages/stylesheet/global.css">
    <link rel="stylesheet" href="../dashboard-pages/stylesheet/dashboard.css">
     @stack('styles')
</head>

<body>
    <!-- ***********************Dashboard Sidebar************************************** -->
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="{{route('merchant.dashboard')}}" class="brand"><img class="logo" style="height: 36px; width: 36px;" src="../images/bigaffilogo.jpeg" alt=""> Scoop<span>Gift</span></a>
        <ul class="side-menu">
            <li><a href="{{route('merchant.dashboard')}}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
             <li><a href="/gift-card"><i class="fa-solid fa-percent icon"></i> Gift Card</a></li>
            
            <li><a href="/commission"><i class="fa-solid fa-percent icon"></i> Commission</a></li>
            <li><a href="/analytics"><i class="fa-solid fa-percent icon"></i> Analytics</a></li>
            <li><a href="/payment"><i class='bx bx-dollar icon'></i> Payment</a></li>
            <li><a href="/settings"><i class='bx bx-cog icon'></i>Settings</a></li>
            <li><a href="#"><i class='bx bxs-contact icon'></i> Contact Us</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#logOut"><i class='bx bxs-log-out-circle icon'></i> Logout</a></li>
        </ul>
    </section>
    <section id="content">
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <a href="#" class="nav-link">
                <i class='bx bxs-bell icon'></i>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bxs-message-square-dots icon'></i>
                <span class="badge">8</span>
            </a>
            <span class="divider"></span>
            <div class="profile">
                <img src="../images/female_avatar_efig.svg" alt="">
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                    <li><a href="settings.html"><i class='bx bxs-cog'></i> Settings</a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#logOut"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                </ul>
            </div>
        </nav>
        <main>
             @yield('content')
        </main>
    </section>
    {{-- Logout Model --}}
    <div class="modal fade" id="logOut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content logout-content">
                <div class="modal-header logout-header">
                    <p class="text-center"><i class="fa-solid fa-triangle-exclamation"></i></p>
                    {{-- <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --> --}}
                    <section></section>
                </div>
                <div class="modal-body logout-body text-center">
                    <h2>Are You Sure!</h2>
                    <p class="mt-2">Don't worry all your changes are saved.<br>Feel free to log back in.</p>
                </div>
                <div class="modal-footer logout-footer">
                    <a type="button" class="btn btn-secondary dismiss" data-bs-dismiss="modal">Cancle</a>
                    <a type="button" class="btn btn-primary logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ********************************Add new Affiliate Model************************************************* -->
  
    <!-- ==============================Bootstrap script============================ -->
    <script src="../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- ==============================ApexChart script CDN ============================ -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- ==============================Local script============================ -->
    <script src="../dashboard-pages/script/global-script.js"></script>
    <script src="../dashboard-pages/script/dashboard.js"></script>
    @livewireScripts

</body>

</html>