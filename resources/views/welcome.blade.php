<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="welcome-page-header">
        <H1>
            13Keys
        </H1>
    </div>
    <p1>
        <div class="welcome-text">
            Welcome to 13Keys!
            <br>
            <br>
            We are the market leading e-commerce store for buying new instruments.
            We are proud to promote our market leading, high quality products to you.
            <br>
            <br>
            To protect our website, brand and products we kindly ask that you login in order to browse our goods.
            This allows us to maintain a serious customer base as well as protect ourselves from competitors.
            Please login below.
            <br>
            <br>
            <form>
                <label for="Email"> Email: </label>
                <input type="text" id="Email" name="Email" placeholder="Email">
                <br>
                <label for="Password"> Password: </label>
                <input type="password" id="Password" name="Password" placeholder="Password">
                <br>
                <input type="submit" value="submit">
            </form>
            <br>
    </p1>
    <p2>
        <br>
        <br>
        Don't have an account with us?
        <br>
        Register here!
        <br>
        <td><a href="{{ url('registrationpage')}}"> Registration</a></td>
    </p2>
    </div>
    <footer>
    </footer>
    </div>
</body>

</html>