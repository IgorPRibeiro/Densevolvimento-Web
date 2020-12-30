<?php

namespace App\Model;

class UsuarioDAO
{
  public function create(Usuario $p)
  {
    $sql = 'INSERT INTO  tb_usuarios (nome,usuario,email,senha) VALUES (?,?,?,?)';

    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $p->getNome());
    $stmt->bindValue(2, $p->getUsuario());
    $stmt->bindValue(3, $p->getEmail());
    $stmt->bindValue(4, $p->getSenha());

    $stmt->execute();

  }


  public function login(Usuario $p)
  {
    $sql = 'SELECT * FROM tb_usuarios WHERE email=:email AND senha =:senha';
    $sql = Conexao::getConn()->prepare($sql);
    $sql->bindValue('email', $p->getEmail());
    $sql->bindValue('senha', $p->getSenha());

    $sql->execute();


    if ($sql->rowCount() > 0 ) {
      $dado = $sql->fetch();
      $_SESSION['idUsuer'] = $dado['id'];
      return true;
    }else {
      return false;
    }


  }
    
    

  
}
