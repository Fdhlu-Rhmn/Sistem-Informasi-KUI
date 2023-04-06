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
      <form action="#">
        <div class="login__input">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="text" required>
          <label>Username</label>
        </div>
        <div class="login__input">
          <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" required>
          <label>Password</label>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>