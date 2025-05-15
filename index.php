<?php
  get_header();
?>

<main>
  <div class="background-design">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 col-jugadores-banner">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-romero.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-kulu.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-Ange.png" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center texto-banner">
          <div class="mt-5">
            <h1>StatSpurs</h1>
            <h2>Tu fuente de resultados de <br>Tottenham Hotspur.</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Tottenham-logo.png" alt="">
          </div>
        </div>
        <div class="col-3 col-jugadores-banner ">
          <div id="carouselExampleSlidesOnly" class="carousel slide carousel-invertido" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-vicario.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-son.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-maddison.png" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Aqui van los partidos --> 

  <div class="container mt-5 contenido-landing mobile-landing">
    <div class="row">
      <h2>Ultimos resultados</h2>
      <hr>
      <?php 
       $args_partidos = array(
    'category_name' => 'premier-league, uefa-europa-league',  
    'posts_per_page' => 6,           
  );
  $query_partidos = new WP_Query( $args_partidos);  
  ?>
      <?php if ( have_posts() ) : ?>
        <div class="row contenido-landing mb-4 landing-medio">
          <?php $post_contador = 0; ?>
           <?php while ( $query_partidos->have_posts() ) : $query_partidos->the_post(); ?>
              <?php if ($post_contador > 0 && $post_contador % 3 == 0) : ?>
                </div>
                <div class="row contenido-landing hr-landing mb-4">
                  <hr>
              <?php endif; ?>

              <div class="col-md-4 post-partido">
                <div class="row justify-content-between">
                  <div class="col-auto">         
                    <p><?php the_date(); ?></p>
                  </div>
                  <div class="col-auto d-flex categoria text-end">          
                    <?php the_category(); ?>
                  </div>
                </div>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagen del partido"> 
                </a>
              </div>
              <?php $post_contador++; ?>
              <?php if ($post_contador == 6) : break; endif?>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>No hay resultados</p>
      <?php endif; ?>
    </div>
  </div>



<div class="container mt-5 contenido-landing">
  <div class="row justify-content-between">
    <div class="col">
            <h2>Jugadores</h2>
    </div>
    <div class="col text-end align-content-end"> 
            <p> <a href="<?php echo get_category_link( get_category_by_slug('jugadores')->term_id ); ?>"> Mostrar todos los jugadores </a></p>
    </div>
  </div>
  <hr>
  <?php
  $args_jugadores = array(
    'category_name' => 'jugadores',  
    'posts_per_page' => 6,           
  );
  $query_jugadores = new WP_Query( $args_jugadores );  
?>

<?php if ( $query_jugadores->have_posts() ) : ?>
  <div class="row contenido-jugador mb-4">
    <?php $post_contador_jugador = 0; ?>
    <?php while ( $query_jugadores->have_posts() ) : $query_jugadores->the_post(); ?>
      <div class="col-md-3 caja-jugador">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagen del jugador">
        </a>
        <section class="texto-jugador">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </section>
      </div>
      <?php $post_contador_jugador++; ?>
      <?php if ($post_contador_jugador == 3) :?>
        </div>
        <div class="row contenido-jugador mb-4">
          <?php endif?>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <p>No hay resultados</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?> 

</div>
</main>


<?php
  get_footer();
?>
