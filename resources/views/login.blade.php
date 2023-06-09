<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <section class="login__wrapper d-flex row">
    <div class="login__left col-lg-6 d-none d-lg-block bg-img"></div>

    <div class="login__right col-lg-6">
      <div class="p-5 vh-100 form-box row justify-content-center login align-items-center">
        <div class="col-lg-6">
          <h2 class="text-center">International Office Students</h2>
          <form id="login" action="/login" method="POST">
            @csrf
            <div class="login__input mb-3">
              <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
              <label class="form-label" for="username">Username</label>
              <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username"
                required>
            </div>
            <div class="login__input mb-3">
              <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
              <label class="form-label" for="password">Password</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password"
                required>
            </div>
            <button class="buttons mb-3" type="submit">Login</button>
          </form>
          <div class="text-center">
            <span class="d-inline">Don't have an Account? <a class="d-inline" href="/register">Sign Up
                Here</a></span>
          </div>
            @if (Session::has('loginError'))
              <div class="alert alert-danger mt-2" role="alert">
                {{Session::get('loginError')}}
              </div>
            @endif
        </div>
      </div>
    </div>
  </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/e701facadd.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>