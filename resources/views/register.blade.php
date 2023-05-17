<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="login__wrapper">
    <div class="form-box login">
      <h2>Kantor Urusan Internasional</h2>
      <form action="/register" method="POST">
        @csrf
        <div class="login__input">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="text" name="name" id="name" required>
          <label for="name">Name</label>
        </div>
        <div class="login__input">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="text" name="username" id="username" required>
          <label for="username">Username</label>
        </div>
        <div class="login__input">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <button class="buttons" type="submit">Register</button> 
      </form>
      <a href="/">Go Back To Login</a>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>