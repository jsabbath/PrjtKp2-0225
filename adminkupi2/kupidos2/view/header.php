<?php
session_start();

if(!isset($_SESSION['user_session']))
{
    header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);


// Imprimir fecha
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
//date_default_timezone_set('UTC/GMT');
date_default_timezone_set('America/Lima');
// Guarda el formato fecha en la variable hoy
$hoy = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kupi2 Control Panel</title>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/datepicker3.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-table.css" rel="stylesheet">
<link href="../bootstrap/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../bootstrap/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Kupi2</span>Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Bienvenido,  <strong style='text-transform: uppercase;'><?php echo $row['user_name']; ?></strong> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
              <li><a href="../logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>

<div class="body-container">
<!--Container body-->    
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li>
        <a href="index.php">
          <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> 
          Productos
        </a>
      </li>
      <li>
        <a class="" href="?c=Producto&a=Crud">
          <svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>
          Nuevo Producto
        </a>
      </li>
      <li role="presentation" class="divider"></li>
      <li>
        <a href="login.html">
          <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>   
          Login Page
        </a>
      </li>
    </ul>
  </div><!--/.sidebar-->