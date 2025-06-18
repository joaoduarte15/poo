<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastre-se</h2>
    <form action="process_cadastro.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <label>Confirme a Senha:</label>
        <input type="password" name="confirmar_senha" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</body>
</html>