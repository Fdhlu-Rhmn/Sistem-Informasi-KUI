<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/sidebar.css">
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
    <div class="dashboard__container container-fluid">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
            <div class="row flex-nowrap overflow-hidden ">
                <ul class="nav nav-pills d-flex flex-column ms-3 mt-3">
                    <li class="nav-item disabled mb-4">
                        <a href="/dashboard" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2 " aria-current="page">
                            <i class="fa-solid fa-list"></i>
                            <span class="ms-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item disabled mb-4">
                        <a href="/mahasiswa" class= "align-middle nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                            <i class="fa-solid fa-users"></i>
                            <span class="ms-2">Foreign Students</span>
                        </a>
                    </li>
                    <li class="nav-item disabled mb-4">
                        <a href="#submenu1" data-bs-toggle="collapse"  class="nav-link-active text-black text-decoration-none fw-bold f6-3 p-2" aria-current="page">
                            <i class="fa-solid fa-user-graduate"></i>
                            <span class="ms-2">Student Exchange</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100 py-3" >
                                <a href="/inbound" class="align-middle nav-link-active text-black text-decoration-none fs-6  p-2 pb-4"> 
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span class="d-none d-sm-inline px-2">Inbound</span>
                                </a>
                            </li>
                            <li>
                                <a href="/outbound" class="align-middle nav-link-active text-black text-decoration-none   p-2 pb-4 fs-6 ">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span class="d-none d-sm-inline px-2">Outbound</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item disabled mb-4">
                        <a href="#submenu2"  data-bs-toggle="collapse"  class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                            <i class="fa-solid fa-user-tie"></i>
                            <span class="ms-2">Dosen</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100 py-3 ">
                                <a href="#" class="align-middle nav-link-active text-black text-decoration-none fs-7 p-2 pb-4"> 
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span class="d-none d-sm-inline px-2">Inbound</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="align-middle nav-link-active text-black text-decoration-none fs-7 p-2 ">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span class="d-none d-sm-inline px-2">Outbound</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item disabled mb-4">
                        <a href="/profil" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                            <i class="fa-solid fa-user"></i>
                            <span class="ms-2">Profil Admin</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logout p-4">
                <a href="/" data-bs-toggle ="collapse" class="nav-link-active text-black text-decoration-none fw-bold fs-6 " aria-current="page">
                    <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i>
                    <span class="ms-2">Log Out</span>
                </a>
            </div>
        </div>
        @yield('main')
    </div>

    <script src="https://kit.fontawesome.com/e701facadd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>