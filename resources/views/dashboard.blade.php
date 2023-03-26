<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  {{-- SIDEBAR dan TopBbar --}}
  <nav class="top_navBar">
    <div class="navBar">
        <img src="assets/intnews.png"  class="logo" alt="">
    </div>
    <div class="navBar_left">
        <img src="assets/akmal.jpg" alt="admin photo">
        <p>M. Akmal Jaya</p>
    </div>
</nav>
<div class="dashboard__container">
    <div class="d-fle flex-column justify-content-between col-auto bg-white min vh-100 ">
        <div>
            <ul class="nav nav-pills d-flex flex-column ms-3 mt-3">
                <li class="nav-item  mb-4">
                    <a href="/" class="nav-link-active  text-decoration-none fw-bold fs-6 p-2 " aria-current="page">
                        <i class="fa-solid fa-list"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item  mb-4">
                    <a href="/mahasiswa" class="nav-link-active text-black  text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                        <i class="fa-solid fa-users"></i>
                        <span class="ms-2">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item  mb-4">
                    <a href="/artikels" class="nav-link-active text-black text-decoration-none fw-bold f6-3 p-2" aria-current="page">
                        <i class="fa-solid fa-table"></i>
                        <span class="ms-2">Artikel</span>
                    </a>
                </li>
                <li class="nav-item  mb-4">
                    <a href="#" data-bs-toggle ="collapse" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                        <i class="fa-solid fa-user"></i>
                        <span class="ms-2">Profil Admin</span>
                    </a>
                </li>

                <li class="logout">
                    <a href="#" data-bs-toggle ="collapse" class="nav-link-active text-black text-decoration-none fw-bold fs-6" aria-current="page">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
                        <span class="ms-2">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Batas SIDEBAR dan TopBbar --}}
    <script src="https://kit.fontawesome.com/e701facadd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>