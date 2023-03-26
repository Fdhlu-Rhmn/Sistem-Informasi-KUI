<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    @yield('css')
    <title>Admin Panel</title>
</head>
<body>

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
                <li class="nav-item disabled mb-4">
                    <a href="/" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2 " aria-current="page">
                        <i class="fa-solid fa-list"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/mahasiswa" class="nav-link-active  text-decoration-none fw-bold fs-6 p-2" aria-current="page">
                        <i class="fa-solid fa-users"></i>
                        <span class="ms-2">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/artikel" class="nav-link-active text-black text-decoration-none fw-bold f6-3 p-2" aria-current="page">
                        <i class="fa-solid fa-table"></i>
                        <span class="ms-2">Artikel</span>
                    </a>
                </li>
                <li class="nav-item disabled mb-4">
                    <a href="/profilAdmin" data-bs-toggle ="collapse" class="nav-link-active text-black text-decoration-none fw-bold fs-6 p-2" aria-current="page">
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
        <div class="cards">
            <div class="cards_head">
                <h1>Edit Data Pengguna</h1>
                <span class="divider divider--width"></span>
            </div>
            <div class="card_body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama Mahasiswa</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">No. Pokok</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Fakultas/Prodi</label>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Masukkan IPK">
                        <label for="floatingInputGrid">IPK</label>
                      </div>
                    </div>

                    <div class="col-md">
                      <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                          <option selected>-</option>
                          <option value="1">A</option>
                          <option value="2">B</option>
                          <option value="3">C</option>
                          <option value="4">D</option>
                          <option value="5">E</option>
                        </select>
                        <label for="floatingSelectGrid">BIPA</label>
                      </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                            <option selected>-</option>
                            <option value="1">2018</option>
                            <option value="2">2019</option>
                            <option value="3">2020</option>
                            <option value="4">2021</option>
                            <option value="5">2022</option>
                            <option value="5">2023</option>
                          </select>
                          <label for="floatingSelectGrid">Angkatan</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                          <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                            <option selected>-</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                          </select>
                          <label for="floatingSelectGrid">Jenis Kelamin</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="Negara Asal">
                        <label for="floatingInputGrid">Negara Asal</label>
                      </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                          <input type="email" class="form-control" id="floatingInputGrid" placeholder="Alamat di Makassar">
                          <label for="floatingInputGrid">Alamat di Makassar</label>
                        </div>
                      </div>
                  </div>

                  <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="No. Telpon">
                        <label for="floatingInputGrid">No Telpon</label>
                      </div>
                    </div>
                    <div class="col-md mb-3">
                        <div class="form-floating">
                          <input type="email" class="form-control" id="floatingInputGrid" placeholder="Alamat di Makassar">
                          <label for="floatingInputGrid">Dosen Pendamping</label>
                        </div>
                      </div>
                  </div>
            </div>
            <button type="button" type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
        </div>

    <script src="https://kit.fontawesome.com/e701facadd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>