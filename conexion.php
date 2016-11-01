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
?>
