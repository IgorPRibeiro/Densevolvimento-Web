<?php

namespace App\Model;

class Conexao {
  private static $instance;
  
  public static function getConn()
  {
    session_start();
    if(!isset(self::$instance)): 
      self::$instance = new \PDO('mysql:host=localhost;dbname=crud_db', 'root','');
      
    endif;
      return self::$instance;

  }
}