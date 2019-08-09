<?php get_header();?>
<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner text-coursel">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo get_theme_file_uri('img/iglesia.jpg'); ?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption ">
                <h1 style="background-color: rgb(0,0,0,0.48)" >Iglesia de Orosi</h1>
                <p style="background-color: rgb(0,0,0,0.48)">Patrimonio cultural de la zona</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo get_theme_file_uri('img/parque.jpg'); ?>" alt="Second slide">
            <div class="container">
              <div class="carousel-caption " >
                <h1 style="background-color: rgb(0,0,0,0.5)">Iglesia de Paraíso</h1>
                <p  style="background-color: rgb(0,0,0,0.5)">El hermoso parque de Paraíso escenifica la iglesia y su comunidad</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo get_theme_file_uri('img/puenteTren.jpg'); ?>" alt="Third slide">
            <div class="container">
              <div class="carousel-caption ">
                <h1 style="background-color: rgb(0,0,0,0.5)">Puente del tren</h1>
                <p style="background-color: rgb(0,0,0,0.5)">Transporte ferrobiario de Costa Rica</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="fourth-slide" src="<?php echo get_theme_file_uri('img/represa.jpg'); ?>" alt="Fourth slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 style="background-color: rgb(0,0,0,0.5)">Represa Cachí</h1>
                <p style="background-color: rgb(0,0,0,0.5)">Hermosa vista e importante zona para el desarrollo costarricense</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver más</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span style="background-color: rgb(0,0,0,0.7)" class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span style="background-color: rgb(0,0,0,0.7)" class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/comercio.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Comercio</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatibus alias labore! Aliquid unde sint ab! Id sit quasi autem inventore nisi, aperiam, quaerat rem, placeat dignissimos veritatis molestias in? </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/hospedaje.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Hospedaje</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sequi exercitationem accusantium, cum eum veniam cupiditate ullam sapiente nihil, sint nobis aliquam labore autem eligendi totam vero placeat perspiciatis illo. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/comidas.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Comidas</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo esse illo quos eaque eveniet! Harum doloremque similique a alias dicta, est nihil in veniam ipsa labore perspiciatis beatae neque culpa? </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/turismo.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Turismo de Aventura</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia libero accusantium molestias fuga ad deleniti, placeat doloribus, accusamus, eveniet omnis ipsam! Aliquid iure porro accusamus sed ea quasi necessitatibus blanditiis? </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/servicios.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Servicios</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus itaque ullam accusantium minus, id molestias, at voluptate beatae, adipisci nobis enim ducimus veniam totam? Doloremque commodi sed a ad ipsa. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo get_theme_file_uri('img/afines.jpg'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Afines</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cupiditate praesentium pariatur corrupti eos sint nam nulla id optio, tempore sequi adipisci perferendis eligendi maxime placeat, reprehenderit, fugiat illum quos! </p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver lista &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    


<?php get_footer();?>