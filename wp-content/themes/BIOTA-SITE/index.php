<?php get_header();?>
<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-coursel">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo get_theme_file_uri('img/Portada1.jpg'); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo get_theme_file_uri('img/Portada2.jpg'); ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo get_theme_file_uri('img/Portada3.jpg'); ?>" alt="Third slide">
            <!--***Para texto sobre la imagen.
            <div class="container">
              <div style="background-color: rgb(0,0,0,0.5)" class="carousel-caption ">
                <h1 >Puente del tren</h1>
                <p >Transporte ferrobiario de Costa Rica</p>
              </div>
            </div>
            -->
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
        <!-- START THE FEATURETTES -->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Proyecto Biota. <span class="text-muted"> Trabajo Comunal Universitario TC-726</span></h2>
            <p class="lead">Apoyo a comunidades rurales para comprender su potencial ecoturístico mediante el conocimiento e interpretación de su biodiversidad, cultura y paisaje.</p>
          </div>
          <div class="col-md-5">
            <video class="featurette-image img-fluid mx-auto" autoplay muted controls src="<?php echo get_theme_file_uri('img/biotavideo1.mp4#t=01'); ?>"></video>
            <!--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Trabajo en las Comunidades <span class="text-muted">Avistamiento de aves.</span></h2>
            <p class="lead">En el Proyecto Biota buscamos apoyar a miembros de las comunidades rurales, emprendedores del sector turístico, centros de educación primaria y secundaria y asociaciones de desarrollo a comprender el potencial ecoturístico de su comunidad.</p>
          </div>
          <div class="col-md-5 order-md-1">
          <video class="featurette-image img-fluid mx-auto" autoplay muted controls src="<?php echo get_theme_file_uri('img/pajareovideo1.mp4#t=01'); ?>"></video>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">¿Qué actividades realiza?</span></h2>
            <p class="lead">
              -Identificación de comunidades, líderes y contactor clave.<br>
              -Inventario e identificación de biodiversidad (plantas, invertebrados, insectors) de interés turístico.<br>
              -Ejecución de encuestas y actividades de rescate cultural.<br>
              -Ejecución de actividades de educación ambiental.<br>
              -Diseño y ejecución de talleres ecoturísticos.<br>
              -Diseño de redes turísticas.<br>
              -Creación de material audiovisual e informativo.<br>
              -Creación e instalación de señalética para interpretación ambiental.<br>
              -Identificación y mapeo de atracciones naturales y culturales.<br>
            </p>
          </div>
          <div class="col-md-5">
          <video class="featurette-image img-fluid mx-auto" autoplay muted controls src="<?php echo get_theme_file_uri('img/biotavideo2.mp4#t=01'); ?>"></video>
          </div>
        </div>
        <div class="row featurette">
          <div class="col-md-12">
            <h2 class="featurette-heading">¿Donde se realiza?</span></h2>
            <p class="lead">
              Comunidades rurales del Atlántico. El proyecto comenzará en cantones de Paraíso, Jimenez y sitios aledaños.
            </p>
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- Three columns of text below the carousel -->
        <div class="row">
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
        </div><!-- /.row -->


        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    


<?php get_footer();?>