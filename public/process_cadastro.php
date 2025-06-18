<?php
session_start();

require_once __DIR__ . '/../models/UsuarioDAO.php';
require_once __DIR__ . '/../utils/Sanitizacao.php';

// Sanitiza as entradas
$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);
$confirmar_senha = Sanitizacao::sanitizar($_POST['confirmar_senha']);

// Validações básicas
if ($senha !== $confirmar_senha) {
    die("As senhas não coincidem.");
}

if (strlen($senha) < 6) {
    die("A senha deve ter pelo menos 6 caracteres.");
}

// Processa o cadastro
$usuarioDAO = new UsuarioDAO();
$resultado = $usuarioDAO->cadastrarUsuario($email, $senha);

if ($resultado) {
    echo "Cadastro realizado com sucesso! <a href='login.php'>Faça login</a>";
} else {
    echo "Erro ao cadastrar. O email já pode estar em uso.";
}
?>