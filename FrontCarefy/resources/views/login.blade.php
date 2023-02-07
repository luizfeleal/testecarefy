<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <script src="https://kit.fontawesome.com/868b3a4d54.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <nav>
        <img src="{{ asset('img/logo/logoCarefy.png') }}" alt="Logo Carefy">
    </nav>
    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <div class='input-container'>
                <label for="email"><img src="{{ asset('img/icons/envelope.png') }}" alt="Envelope icon" width="18px" height="18px"></label>
                <input type="email" name="email" id="email-login"  class="input-text" placeholder="E-Mail">
            </div>
            <div class='input-container'>
            <label for="password"><img src="{{ asset('img/icons/lock.png') }}" alt="Lock icon" width="18px" height="18px"></label>
                <input type="password" name="password" class="input-text" id="password" placeholder="Senha">
            </div>
            <div class="div-button-login">
                <button type="button" class="button-primary">Entrar</button>
            </div>
            <hr>
            <p>Ou</p>
            <h2>Conecte-se com</h2>
            <div class="div-button-login-github">
                <button type="button" class="button-with-icon-secundary"><img src="{{ asset('img/icons/github-icon-white.png') }}" alt="Lock icon" width="40px" height="30px"> GitHub</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/Validations.js') }}"></script>
    <script src="{{ asset('js/Events.js') }}"></script>
</body>
</html>
