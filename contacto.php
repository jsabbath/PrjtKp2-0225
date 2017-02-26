<?php include 'Kp2_Assets/header.php'; ?>
        
        <!-- Slider Start -->
        <!--section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Drop Us A Note</h1>
                  <p>Don’t just take our word for it. Check out some of our latest work.</p>
                </div>
              </div>
            </div>
          </div>
        </section-->


        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
            <li data-target="#mycarousel" data-slide-to="3"></li>
            <li data-target="#mycarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item">
                <img src="https://unsplash.it/2000/1250?image=397" data-color="lightblue" alt="First Image">
                <div class="carousel-caption">
                    <h3>First Image</h3>
                </div>
            </div>
            <div class="item">
                <img src="https://unsplash.it/2000/1250?image=689" data-color="firebrick" alt="Second Image">
                <div class="carousel-caption">
                    <h3>Second Image</h3>
                </div>
            </div>
            <div class="item">
                <img src="https://unsplash.it/2000/1250?image=675" data-color="violet" alt="Third Image">
                <div class="carousel-caption">
                    <h3>Third Image</h3>
                </div>
            </div>
            <div class="item">
                <img src="https://unsplash.it/2000/1250?image=658" data-color="lightgreen" alt="Fourth Image">
                <div class="carousel-caption">
                    <h3>Fourth Image</h3>
                </div>
            </div>
            <div class="item">
                <img src="https://unsplash.it/2000/1250?image=638" data-color="tomato" alt="Fifth Image">
                <div class="carousel-caption">
                    <h3>Fifth Image</h3>
                </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <style type="text/css">
            h3 {
            display: inline-block;
            padding: 10px;
            background: #B9121B;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
          }
          .full-screen {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          }
        </style>

        <script type="text/javascript">
            var $item = $('.carousel .item'); 
            var $wHeight = $(window).height();
            $item.eq(0).addClass('active');
            $item.height($wHeight); 
            $item.addClass('full-screen');

            $('.carousel img').each(function() {
              var $src = $(this).attr('src');
              var $color = $(this).attr('data-color');
              $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
              });
              $(this).remove();
            });

            $(window).on('resize', function (){
              $wHeight = $(window).height();
              $item.height($wHeight);
            });

            $('.carousel').carousel({
              interval: 6000,
              pause: "false"
            });
        </script>

        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form>
                    <div class="form-group-2">
                      <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Send Message</button>
                  </form>
                </div>
              </div>
            </div>
            <div id="contact-box" class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Información Kupi2</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>Calle Real 120 (bajada del Tambo) - Frente a la casa de la Cultura Huancayo
                    </li>
                    <li>
                      <i class="fa fa-map-marker"></i>Sucursal - Galerias Huancayo Real Stand #8
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: contact@mail.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Telf. 064-778096 RPM #96468247
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Movistar: 950663066 | Claro: 991947649
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Whatsapp: 964682476
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>Nuestra ubicación en Google Maps</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>We design delightful digital experiences.</h2>
                  <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
                  <a class="btn btn-default btn-call-to-action" href="#" >Tell Us Your Story</a>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php include 'Kp2_Assets/footer.php'; ?>