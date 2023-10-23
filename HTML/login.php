<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <link rel="stylesheet" href="../styles/login.css">
   
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="processar_login.php" method="post">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="" varequired>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="" required>

            <input type="submit" value="Entrar">
        </form>

        <div class="forgot-password">
            <a href="esqueci_minha_senha.php">Esqueci minha senha</a>
        </div>
    </div>
</body>
</html>