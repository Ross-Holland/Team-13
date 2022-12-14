<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/13keys_-_black.png">

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link href="{{ url('css/loginpage.css') }}" rel="stylesheet">
  <title>Login Page</title> 
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link rel="stylesheet" href="loginpage.css">
</head>
<body class="login-body">
  <main class="login-main">
    <div class="login-box">
      <div class="login-inner-box">
        <div class="login-forms-wrap">
          
          <form action="login" method="POST" class="login">
            <div class="title-wrap">
            <h2 class="login-title">13Keys Login</h2>
            <p class="login-welcome-text">Welcome! Please sign in below.</p>
            </div>
            @csrf
            <input class="login-email" type="email" name="email" placeholder="Email"/>
            <input class="login-password" type="password" name="password" placeholder="Password"/>
            <button class="login-button">Login</button>
            <hr class="login-line-break">
            <div class="login-register-wrap">
            <p class="login-register">Do not have an account?</p>
            <a href="{{ url('registrationpage')}}" class="login-register-button"><p>Register</p></a>
            </div>
          </form>
        </div>
        <div class="login-carousel">
          <img src="login_elec_guitar.png" class="login_img" alt="">

        </div>
      </div>
    </div>
  </main>
</body>
<script src="login.js"></script>
</html>
