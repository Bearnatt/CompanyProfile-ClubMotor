<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Connect css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Connect Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Connect Font Awesome -->
        <link rel="stylesheet" href="font-awesome/css/all.min.css">

        <!-- Logo Title -->
        <link rel="icon" href="assets/img/logo-hsrc.png" type="image/x-icon">

        <title>HSRC Jakarta</title>
    </head>
    <body>
        <!-- Navbar -->
        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
                <div class="container">
                    <!-- Logo Navbar -->
                    <a class="navbar-brand" href="index.php?page=home">
                        <img src="assets/img/logo-hsrc.png" alt="" width="120" 
                        class="d-inline-block align-text-center me-3">
                        Honda Spacy Riders Club</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="index.php?page=home">Beranda</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.php?page=galery">Galery</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.php?page=event">Event</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.php?page=merchandise">Merchandise</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.php?page=partner">Klien</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="index.php?page=profile#visi">Visi dan Misi</a>
                            </li>
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang Kami</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="index.php?page=profile">Profil HSRC</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=history">Sejarah HSRC</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=contact">Kontak Kami</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Main Body Content -->
        <div id="contents">
            <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'home':
                            include "pages/home.php";
                        break;
                        case 'galery':
                            include "pages/galery.php";
                        break;
                        case 'event':
                            include "pages/event.php";
                        break;   
                        case 'merchandise':
                            include "pages/merchandise.php";
                        break;
                        case 'partner':
                            include "pages/partner.php";
                        break;
                        case 'profile':
                            include "pages/profile.php";
                        break;
                        case 'history':
                            include "pages/history.php";
                        break;
                        case 'contact':
                            include "pages/contact.php";
                        break;
                        
                    }
                }
                elseif(isset($_GET['page-event'])){
                    $page_event = $_GET['page-event'];

                    switch ($page_event) {
                        case 'event1':
                            include "pages/event/event1.php";
                        break;
                        case 'event2':
                            include "pages/event/event2.php";
                        break;
                        case 'event3':
                            include "pages/event/event3.php";
                        break;
                    }
                }
                else{
                        include "pages/home.php";
                }
            ?>

        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->

        <!-- Jquery -->
        <script src="js/jquery-3.7.0.min.js"></script>

        <!-- Javascript -->
        <script src="js/script.js"></script>

        <!-- Bootstrap, Bootstrap 5 -->
        <script src="js/bootstrap.js"></script>

        <!-- Tooltip Popper -->
        <script src="js/popper.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>
