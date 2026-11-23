<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link type="text/css" rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <div class="container">
        <div id="login-form">
            <h3 class="container">Tela de Login</h3>

            <input id="username" type="text" name="username" placeholder="Username" class="input">
            <br>
            <input id="password" type="password" name="password" placeholder="Password" class="input">
            <br>

            <div class="btn-login">
                <button id="login-btn" type="button" onclick="fazerLogin()">Login</button>
            </div>
        </div>
    </div>

    <script src="/assets/login.js"></script>
</body>
</html>