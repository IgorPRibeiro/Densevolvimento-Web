<?php

require __DIR__.'/vendor/autoload.php';

require __DIR__.'/View/cadastro.php';


$usuario = new \App\Model\Usuario();

$nome = $_POST['nomeC'];
$user = $_POST['usuarioC'];
$email = $_POST['emailC'];
$senha = $_POST['senhaC'];

$usuario->setNome($nome);
$usuario->setUsuario($user);
$usuario->setEmail($email);
$usuario->setSenha($senha);

$usuarioDAO = new \App\Model\UsuarioDAO();
$usuarioDAO->create($usuario);
header("Location: View/cadastroFeito.php");