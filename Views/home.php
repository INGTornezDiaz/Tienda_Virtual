<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | BanyanTreeAccess</title>
    <link rel="stylesheet" href="./Styles/styles_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="./img/logo_banyan_tree.webp" alt="Logo de Banyan Tree Access">
        </div>
        <h1>Bienvenido a BanyanTreeAccess</h1>
        <h2>Iniciar Sesión</h2>
        <form action="home.php" method="post" autocomplete="on" novalidate>
            <input type="text" name="username" placeholder="Usuario" required autofocus>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
    