<?php 
  get_header();
?>

<main>
  <?php if (has_category(['premier-league', 'uefa-europa-league'])): ?>
    <div class="container container-partido">
      <div class="row mt-5 mb-3">
        <h1>Últimos Resultados de <?php $categoria = get_the_category(); echo ($categoria)[0]->name; ?></h1>
        <hr>
      </div>

      <?php if ( have_posts() ) : ?>
        <div class="row contenido-landing mb-4">
          <?php $post_contador = 0; ?>
          <?php while ( have_posts() ) : the_post(); ?>
          
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
              <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagen del partido"> 
              </a>
            </div>

          <?php $post_contador++; ?>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>No hay resultados</p>
      <?php endif; ?>
    </div>


  <!-- Aqui van los jugadores -->
  <?php else: ?>
    <div class="container container-partido">
      <div class="row mt-5 mb-3">
        <h1>Jugadores de Tottenham Hotspurs</h1>
        <hr>
      </div>

      <?php if ( have_posts() ) : ?>
        <div class="row contenido-jugador mb-4">
          <?php $post_contador = 0; ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php if ($post_contador > 0 && $post_contador % 3 == 0) : ?>
              </div><div class="row contenido-jugador mb-4">
            <?php endif; ?>

            <div class="col-md-3 caja-jugador">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="imagen del jugador"> 
              </a>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>

            </div>

            <?php $post_contador++; ?>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>No hay jugadores disponibles</p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</main>

<?php 
  get_footer();
?>
