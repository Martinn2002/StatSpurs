<?php 
  get_header();
?>

<main>
  <div class="container container-partido">
    <div class="row mt-5 mb-3">
      <h1>Resultados de búsqueda para "<?php echo get_search_query(); ?>"</h1>
    </div>

    <?php
      $args_jugadores = array(
        's' => get_search_query(),
        'category_name' => 'jugadores',
        'posts_per_page' => -1
      );
      $query_jugadores = new WP_Query($args_jugadores);
    ?>

    <?php if ( $query_jugadores->have_posts() ) : ?>
      <h3>Jugadores</h3>
      <hr>
      <div class="row contenido-jugador mb-4">
        <?php $post_contador = 0; ?>
        <?php while ( $query_jugadores->have_posts() ) : $query_jugadores->the_post(); ?>

          <?php if ($post_contador > 0 && $post_contador % 3 == 0) : ?>
            </div><div class="row contenido-jugador mb-4">
          <?php endif; ?>

          <div class="col-md-3 caja-jugador">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagen del jugador"> 
            </a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          </div>

          <?php $post_contador++; ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


    <?php
      $args_partidos = array(
        's' => get_search_query(),
        'category_name' => 'premier-league,uefa-europa-league',
        'posts_per_page' => -1
      );
      $query_partidos = new WP_Query($args_partidos);
    ?>

    <?php if ( $query_partidos->have_posts() ) : ?>
      <h3>Partidos</h3>
      <hr>
      <div class="row contenido-landing mb-4">
        <?php $post_contador = 0; ?>
        <?php while ( $query_partidos->have_posts() ) : $query_partidos->the_post(); ?>

          <?php if ($post_contador > 0 && $post_contador % 3 == 0) : ?>
            </div><div class="row contenido-landing mb-4">
          <?php endif; ?>

          <div class="col-md-4">
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
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


    <?php if ( !$query_jugadores->have_posts() && !$query_partidos->have_posts() ) : ?>
      <p>No hay resultados para "<?php echo get_search_query(); ?>"</p>
    <?php endif; ?>

  </div>
</main>

<?php 
  get_footer();
?>
