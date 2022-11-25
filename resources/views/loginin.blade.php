<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link href="{{ url('css/main.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login Page</title> 
</head>
<body class="h-screen">
 <nav>
   
        
    <input type="checkbox" id="box">
    <label for="box" class="boxbtn">
        <i class="fa fa-bars"></i>
    </label>
    <a href="{{ url('welcome')}}"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
    <ul>
     <li><a class="current1"href="{{ url('welcome')}}">Home</a></li>
     <li><a href="/">Products</a></li>
     <li><a href="/">Contact Us</a></li>
     <li><a href="{{ url('registrationpage')}}">Login</a></li>         
     <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
     <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
    </ul>

    
</nav>
  <!-- Main bg -->
  <div class="bg-rose-400 min h-screen flex items-center justify-center">
   <!--Login Box-->
   <div class="bg-indigo-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!--Login form-->
      <div class="md:w-1/2 px-8 md:px-8">
        <h2 class="font-bold text-2xl text-indigo-500">Login</h2>
        <p class="text-xs mt-3  text-indigo-500">Welcome! Please sign in below.</p>

        <form action="" class="flex flex-col gap-4">
            <input class="p-2 mt-5 rounded-xl border" type="email" name="email" placeholder="Email">
            <div class="relative">
              <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye-slash absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
              </svg>
            </div>
            <button class="bg-gradient-to-r from-purple-600 to-cyan-600 shadow-lg shadow-indigo-500/50 rounded-xl text-white py-2 hover:scale-105 duration-300 hover:bg-indigo-600">Login</button>
        </form>
      <!--divider-->
      <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
        <hr class="border-gray-400">
        <p class="text-center text-sm">OR</p>
        <hr class="border-gray-400">
      </div>

      <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-black">
        <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
          <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
          <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
          <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
        </svg>
        Login with Google
      </button>
      <button class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-apple mr-1" viewBox="0 0 16 16">
          <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
          <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
        </svg>
        Login with Apple
      </button>
      <div class="mt-5 text-xs border-b border-indigo-500 py-4 text-indigo-500">
        <a href="#">Forgot your password?</a>
      </div>

      <div class="mt-3 text-xs flex justify-between-items-center text-indigo-500">
        <p>Don't have an account?</p>
        <button class="py-1.5 px-5 ml-1 mb-2 bg-white border rounded-xl hover:scale-110 duration-300 text-indigo-500"><a href="{{ url('registrationpage')}}">Register</a></button>
      </div>
   </div>
    <!--Image-->
    <div class="sm:block hidden w-1/2">
      <img class="rounded-2xl"  src="elec_guitar.png" alt="Electric Guitar">
    </div>
   </div>
  </div>
</body>
<script>
  var moonicon = document.getElementById("moonicon");

  /* 
  Explaniation of the JavaScript is explained in the welcome.blade.
  */

  if(localStorage.getItem("theme") == null){
     localStorage.setItem("theme", "light-theme");
  }

  let localData = localStorage.getItem("theme");

  if(localData == "light-theme"){
     document.body.classList.remove("dark");

  } else if (localData == "dark-theme"){
     document.body.classList.add("dark");
  }
     
  moonicon.onclick = function(){
     document.body.classList.toggle("dark");

  if(document.body.classList.contains("dark")){
     localStorage.setItem("theme", "dark-theme");
  } else {
     localStorage.setItem("theme", "light-theme");
  }

  }
  
</script>
</html>