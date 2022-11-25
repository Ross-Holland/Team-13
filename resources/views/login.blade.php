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
<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          
          <form action="" class="login">
            <div class="title-wrap">
            <h2 class="login-title">Login</h2>
            <p class="welcome-text">Welcome! Please sign in below.</p>
            </div>
            <input class="login-email" type="email" name="email" placeholder="Email" required/>
            <input class="login-password" type="password" name="password" placeholder="Password" required/>
            <button class="login-button">Login</button>
            <hr class="line-break">
            <div class="login-register-wrap">
            <p class="login-register">Don't have an account?</p>
            <button class="login-register-button" href = "#">Register</button>
            </div>
          </form>
        </div>
        <div class="img">
        </div>
      </div>
    </div>
  </main>
  <!-- JavaScript File-->
  <script src="login.js"></script>
</body>
</html>
