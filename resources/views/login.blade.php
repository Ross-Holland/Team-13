<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <h2 class="login-title">Login</h2>
            <p class="login-welcome-text">Welcome! Please sign in below.</p>
            </div>
            @csrf
            <input class="login-email" type="email" name="email" placeholder="Email" required/>
            <input class="login-password" type="password" name="password" placeholder="Password" required/>
            <button class="login-button">Login</button>
            <hr class="login-line-break">
            <div class="login-register-wrap">
            <p class="login-register">Don't have an account?</p>
            <button class="login-register-button" href="{{ url('registrationpage')}}">Register</button>
            </div>
          </form>
        </div>
        <div class="login-carousel">
          <img src="login_elec_guitar.png" class="login_img" alt="">

        </div>
        <!--<div class="login-carousel">
          <div class="login-img-wrap">
            <img src="login_elec_guitar.png" class="login_img login_elec login_show" alt="">
            <img src="login_drummer.png" class="login_img login_drummer" alt="">
            <img src="login_acoustic_guitarist.png" class="login_img login_acoustic" alt="">
          </div>
          <div class="login-img-slider">
            <div class="login-text-wrap">
              <div class="login-text-group">
                <h2>some stuff</h2>
                <h2>more stuff</h2>
                <h2>even more</h2>
              </div>
            </div>
            <div class="login-bullet">
              <span class="login-active-bullet" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </main>
  <!-- JavaScript File-->
  <script src="login.js"></script>
</body>
</html>
