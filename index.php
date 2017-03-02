<?php include 'Kp2_Assets/header.php'; ?>

<div>
  <img src="Kp2_Assets/img/KupidosBanner-Corel.jpg" width="100%">
</div>

    <!-- Portfolio Start -->
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="container">
                  <div class="card">
                    <?php include_once('Kp2_Assets/categoriapanel.php'); ?>
                  </div>
                  <div class="card" id="SocialMediaFBKupidos">
                    <div class="fb-page" data-href="https://www.facebook.com/Kupi2-104758876271450/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Kupi2-104758876271450/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Kupi2-104758876271450/">Kupi2</a></blockquote></div>
                  </div>
                </div>
              </div>

              <div class="col-md-9">
                <div class="block">
                  <div class="portfolio-contant">
                    <ul id="portfolio-contant-active">                  
                    <!--Alert temporal-->
                      <small style="text-align:left">
                          <div class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Recomendaciones!</strong> <br>
                            1.- Puedes ver más productos pulsando en la categoria correspondiente a tu busqueda. <br>
                            2.- Puedes enviar el catálogo a tus amig@s pulsando en el botón "Enviar"<br>
                            3.- Realiza tu pedido con anticipación y consigue ofertas... ;)
                          </div>
                      </small>
                        <?php include 'Kp2_Assets/selectProducto.php'; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>


    </body>
</html>

<?php include 'Kp2_Assets/footer.php'; ?>
<script>
  //script for modal
  $("#pop").on("click", function() {
     $("#imagepreview").attr("src", $("#imageresource").attr("src")); 
     $("#imagemodal").modal("show"); 
  });
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<!--Script from Disqus -->
<!--script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/60133/script.js');
</script-->