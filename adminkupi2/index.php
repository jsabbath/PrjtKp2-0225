<?php

    session_start();

    if(isset($_SESSION['user_session'])!="")
    {
    	//header("Location: home.php"); //redirige a la pagina home
       header("Location: kupidos2/index.php");  //
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Kupi2</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/datepicker3.css" rel="stylesheet">
<link href="bootstrap/css/styles.css" rel="stylesheet">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->


</head>

<body>    
<div class="signin-form">
	<div class="container">

    <div class="row">
        <!--div class="col-xs-12 col-lg-4"-->
        <div class="col-xs-12  col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading" style="background: #2196F3; color:white;">Log in - kupi2</div>
                <div class="panel-body">
                   <form class="form-signin" method="post" id="login-form">
                        <div id="error">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Usuario" name="user_email" id="user_email" required/>
                        </div>
                        <div class="form-group">
                            <span id="check-e"></span>
                        </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" required="" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login" value="Ingresar">
                    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Ingresar
                			</button> 
                        </div>  
                  </form>
                </div>
            </div>
        </div>

    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>
</html>

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<style type="text/css">
    .row{
        margin-right: 15px;
        margin-left: 15px;
    }
</style>