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
            <h2 class="title">Login</h2>
            <p class="welcome-text">Welcome! Please sign in below.</p>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <button class="login-button">Login</button>
            <p class="register">Don't have an account?</p>
            <button class="register-button" href = "#">Register</button>
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
