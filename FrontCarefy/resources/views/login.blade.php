<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Login</title>
</head>
<body>
    <nav>
        <img src="{{ asset('img/logo/logoCarefy.png') }}" alt="Logo Carefy">
    </nav>
    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <input type="email" name="email" id="email"  class="input-text" placeholder="E-Mail">
            <input type="password" name="password" class="input-text" id="password" placeholder="Senha">
            <button type="button" class="button-primary">Login</button>
            <hr/>
            <p>Ou</p>
            <h2>Conecte-se com</h2>
            <button type="button" class="button-with-icon-secundary">GitHub</button>
        </div>
    </div>
</body>
</html>
