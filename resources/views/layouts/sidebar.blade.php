<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/sidebar.css">
    <link rel="stylesheet" href="/css/toggle.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    @yield('css')
    <title>Admin Panel</title>
</head>
<body>
  <nav class="top_navBar">
    <div class="navBar">
        <img src="/assets/intnews.png"  class="logo" alt="">
    </div>
    <div class="navBar_left">
        <img src="/assets/akmal.jpg" alt="admin photo">
        <p>M. Akmal Jaya</p>
    </div>
</nav>
<div class="dashboard__container">
    <div class="d-fle sticky-top flex-column justify-content-between col-auto bg-white min vh-100 ">
        <div>
            <ul class="nav nav-pills d-flex flex-column ms-3 mt-3">
                <li class="nav-item disabled mb-4">
                    <a href="/dashboard" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2 " aria-current="page">
                        <i class="fa-solid fa-list"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/mahasiswa" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                        <i class="fa-solid fa-users"></i>
                        <span class="ms-2">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item mb-4">
                    <a href="#" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-rotate"></i>
                        <span class="ms-2">Student Exchange</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="buttons.html">Inbound</a>
                            <a class="dropdown-item" href="cards.html">Outbound</a>
                    </div>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/artikel" class="nav-link-active text-black text-decoration-none fw-bold f6-3 p-2" aria-current="page">
                        <i class="fa-solid fa-table"></i>
                        <span class="ms-2">Artikel</span>
                    </a>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/profil" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                        <i class="fa-solid fa-user"></i>
                        <span class="ms-2">Profil Admin</span>
                    </a>
                </li>

                <li class="logout">
                    <a href="/" data-bs-toggle ="collapse" class="nav-link-active text-black text-decoration-none fw-bold fs-6" aria-current="page">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
                        <span class="ms-2">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
        @yield('main')
    <script src="https://kit.fontawesome.com/e701facadd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/toggle1.js"></script>
    <script src="js/jquery.js"></script>
    @yield('js')
</body>
</html>