<?php 
  include'header.php'; 
?>
<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
        <img src="https://images2.alphacoders.com/457/457529.jpg" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
            <h3>First Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="http://walops.com/wp-content/uploads/Blue-Rose-HD-Desktop-Background-Wallpaper.jpg" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
            <h3>Second Image</h3>
        </div>
    </div>
    <div class="item">
        <img src="http://img.rjeem.com/imgcache/2013/11/296619.jpg" data-color="violet" alt="Third Image">
        <div class="carousel-caption">
            <h3>Third Image</h3>
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
    padding: 0px;
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



    <!-- Wrapper Start -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id </p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/wrapper-img.png" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <h2>WE BELIEVE IN GREAT IDEAS</h2>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a href="#" class="btn btn-view-works">View Works</a>
        </div>
      </div>
    </div>
  </section>
        
    <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="icon ion-coffee"></i>
              <h4>Branding</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-compass"></i>
              <h4>Web Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-image"></i>
              <h4>App Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-bug"></i>
              <h4>Start Up</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-headphone"></i>
              <h4>Logo Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-leaf"></i>
              <h4>Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-planet"></i>
              <h4>Brand Identity</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <i class="ion-earth"></i>
              <h4>Brand Identity</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>