<?php
  /*
  session_start();

  if(!isset($_SESSION['user_session']))
  {
  	header("Location: index.php");
  }

  include_once 'dbconfig.php';

  $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
  $stmt->execute(array(":uid"=>$_SESSION['user_session']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  
  */

    session_start();

    if(isset($_SESSION['user_session'])!="")
    {
      //header("Location: home.php"); //redirige a la pagina home
       header("Location: kupidos2/index.php");  //
    }

?>