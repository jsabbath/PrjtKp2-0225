<?php
  function Conectar(){
    $conn = null;
    $host = 'localhost';
    $db = 'db_tiendakupidos';
    $user = 'root';
    $pwd = '';
    try {
      $conn = new PDO('mysql:hostname='.$host.';dbname='.$db, $user, $pwd);
    }catch(PDOException $e){
      echo ':( Error al conectar con la base de datos '.$e;
      exit;
    }
    return $conn;
  }
  
  /*
  function Conectar(){
    $conn = null;
    $host = 'dbtiendakupidos.db.9941338.hostedresource.com';
    $db = 'dbtiendakupidos';
    $user = 'dbtiendakupidos';
    $pwd = 'kupiDos@devH12';
    try {
      $conn = new PDO('mysql:hostname='.$host.';dbname='.$db, $user, $pwd);
    }catch(PDOException $e){
      echo ':( Error al conectar con la base de datos '.$e;
      exit;
    }
    return $conn;
  }
  */
?>