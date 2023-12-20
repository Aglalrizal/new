<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Login</h1>
            <form id="signupForm" action="/login" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="E-mail" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <p>Forgot password? <a href="#">Click Here!</a></p>
                </div>
                <div class="btn-field" style="margin-top: -50px">
                    {{-- <button type="submit" id="signupBtn">Sign Up</button> --}}
                    <button type="submit" id="loginBtn">Log In</button>
                </div>
            </form>
            <h2 style="margin-top: 20px">Dont have an account? <a href="\signup">register here!</a></h2>
        </div>
    </div>
<script src="main.js"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>