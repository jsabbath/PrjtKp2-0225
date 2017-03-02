  <!-- Call to action Start -->
  <section id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <h2>Kupi2, Flores y detalles.</h2>
            <p>Contamos con las mejores flores del mercado, viniendo directamente de cultivos ubicados en Colombia y Holanda, donde son cortadas y enviadas a nuestro local, no antes garantizando que nuestras flores siempre sean frescas y puedan ofrecer una duración mucho mayor a la del promedio del mercado. 
            </p>
            <a class="btn btn-default btn-call-to-action" href="#" >Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- footer Start -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-manu">
            <ul>
      			  <li>
      			  	<a href=""><i class="fa fa-twitter"></i>
      			  </a>
      			  </li>
      			  <li>
      			  	<a href=""><i class="fa fa-facebook"></i></a>
      			  </li>
              <li>
              	<a href=""><i class="fa fa-google"></i></a>
              </li>
            </ul>
          </div>
          <p>Floreria Kupi2 &copy; Developed by <a href="http://www.devhuayra.com" class='txtfooter' target="_blank" style="background: linear-gradient(to left,#00BCD4,#8BC34A); color:white; padding: 3px; padding-right: 5px; padding-left: 5px; text-decoration: none; border-radius: 5px; font-size: 14px">devHuayra</a>.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>




    <!-- Js -->
    <script src="Kp2_Assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="Kp2_Assets/js/bootstrap.min.js"></script>
    <script src="Kp2_Assets/js/plugins.js"></script>
    <script src="Kp2_Assets/js/min/waypoints.min.js"></script>
    <script src="Kp2_Assets/js/jquery.counterup.js"></script>

    <script type="text/javascript" src="js/snow.js"></script> <!--pra coracoes-->
    <script type="text/javascript">
    $(function() {
        $(document).snow({ SnowImage: "Kp2_Assets/img/cor7.png" });
    });
    </script>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1396296787079032";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, "script", "facebook-jssdk"));
    </script>
    </body>



<!--boton flotante pagamento-->
<div class="buttonfloatbottom" onclick="myFunction1()">
    <a href="#home" id="buttoninfo">MÉTODO DE PAGO <img src="http://www.emacs.es/media/img/estructura/flecha-circulo-gris-arriba.png" alt="" width="20px"/></a> 
</div>
  
<div id="info">
  <div onclick="myFunction2()" class="cabezainfo" style="">
    MÉTODO DE PAGO
    <img src="http://www.emacs.es/media/img/estructura/flecha-circulo-gris-arriba.png" alt="" width="20px" style="margin-bottom:-3px; right:0; margin-left:80px;" class="icondown"/>
  </div>
  <div style="padding: 5px 10px 5px 20px" id="infopago">
      <ul>
        <li>
          <strong>Caja Huancayo: </strong><br>
          1070-0221-1004-1651-44
        </li>
        <li>
          <strong>Interbank: </strong><br>
          500-3050051-789
        </li>
        <li>
          <strong>Banco de la Nación: </strong><br>
          04-388-292828
        </li>
        <li>
          <strong>Banco de Crédito BCP: </strong><br>
          355-20830262-005
        </li>
        <li>
          <strong>Banco Continental: </strong><br>
          0011-0235-0201-060921
        </li>
      </ul>
  </div>
</div>
<style>
.icondown{
  transform : rotate(180deg);
  -moz-transform : rotate(180deg); /* Firefox */
  -webkit-transform : rotate(180deg); /* Chrome - Safari */
  -o-transform : rotate(180deg); /* Opera */
}
.buttonfloatbottom{
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    margin: 0;
    padding: 7px 25px 7px 25px;
    overflow: hidden;
    background-color: dodgerblue;
    position: fixed;
    bottom: 0;
    right: 10px;
    cursor:pointer;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .15), 0 3px 1px -2px rgba(0, 0, 0, .20), 0 1px 5px 0 rgba(0, 0, 0, .12);
    border-radius: 3px 3px 0px 0px;
}
.buttonfloatbottom a{
  color:white;
  margin-bottom:-3px; 
  right:0; 
  margin-left:0px;
}
#info {
    margin: 0;
    
    overflow: hidden;
    
    position: fixed;
    bottom: 0;
    right: 10px;
  
    height: 320px;
    width:270px;
    
    background-color: white;
    border: solid 1px hsla(207, 90%, 54%, 0.5)
    color:grey;
    text-align: left;
    
    border-radius: 3px 3px 0px 0px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .15), 0 3px 1px -2px rgba(0, 0, 0, .20), 0 1px 5px 0 rgba(0, 0, 0, .12);
  
    display: none;
}
.cabezainfo{
  background-color: dodgerblue; 
  color:white; 
  padding: 10px 15px 10px 15px; 
  width:100%;
  cursor:pointer;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .15), 0 3px 1px -2px rgba(0, 0, 0, .20), 0 1px 5px 0 rgba(0, 0, 0, .12);
}

</style>
<script>
  function myFunction1() {
    var x = document.getElementById('info');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function myFunction2() {
    var x = document.getElementById('info');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}
</script>
<!--END boton flotante pagamento-->




</html>

<style type="text/css">
  .LogoLetter, .txtfooter{
    font-family: 'Lobster', cursive;
    font-size: 2rem
  }
  .selection{
  	font-size:15px;
  	margin: 5px
  }
  .selection > li{
  	padding: 5px;
  }

  #portfolio-work{
    padding-top:25px;
    padding-bottom: 50px;
    background-color: #F2F3F7;
  }
  header{
    border-bottom: solid 3px #e91e63;
  }

  .glyphicon{
    margin-top: 5px;
    padding-right: 5px
  }

  @media screen and (max-width: 480px){
    #list{
      display: none;
    }
    #SocialMediaFBKupidos{
      display: none;
    }
  }
  @media screen and (min-width: 480px){
    #list{
      display: block;
    }
    #SocialMediaFBKupidos{
      display: block;
    }
  }
</style>