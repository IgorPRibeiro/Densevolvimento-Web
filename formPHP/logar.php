<?php

require __DIR__.'/vendor/autoload.php';

require __DIR__.'/View/login.php';


if (isset($_POST['email']) && !empty($_POST['email']) &&  
    isset($_POST['senha']) && !empty($_POST['senha'])) {

  $usuario = new \App\Model\Usuario();
  $usuarioDAO = new \App\Model\UsuarioDAO();
  
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  
  $usuario->setEmail($email);
  $usuario->setSenha($senha);
  
  
  if ($usuarioDAO->login($usuario) == true) {
    header("Location: View/bemvindo.php");
  }else {
    header("Location: View/cadastro.php");
  }
  
}else {
  header("Location: View/cadastro.php");
}
