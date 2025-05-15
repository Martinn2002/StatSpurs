<?php get_header(); ?>

<?php if (has_category(['premier-league', 'uefa-europa-league'])): ?>
    <main>
        <div class="container container-partido">
            <div class="row">   
                <h1 class="text-center mt-5 mb-5"><?php the_title(); ?></h1>

                <div class="col-3 text-center alineaciones">
                    <?php
                    $alineacion = get_field('alineacion_tottenham_hotspurs');

                    if ($alineacion['local_o_visitante'] == 'Local') :
                    ?>
                        <h3 class="alineacion-tottenham">Tottenham Hotspurs</h3>
                        <hr> 
                        <?php if (!empty($alineacion['iniciales'])): ?>
                            <ul>
                                <?php foreach ($alineacion['iniciales'] as $jugador): ?>
                                    <li>
                                        <h5>
                                            <?php
                                            $jugador_tag = $jugador['nombres'];

                                            $args = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 1,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'post_tag',
                                                        'field'    => 'name',
                                                        'terms'    => $jugador_tag,
                                                    ),
                                                ),
                                            );

                                            $query = new WP_Query($args);
                                            if ($query->have_posts()) {
                                                $query->the_post();
                                                echo '<a href="' . get_permalink() . '">' . ($jugador_tag) . '</a>';
                                                wp_reset_postdata();
                                            } else {
                                                echo ($jugador_tag);
                                            }
                                            ?>
                                            <?php if (!empty($jugador['capitan'])): ?>
                                                <span class="capitan">(C)</span>
                                            <?php endif; ?>
                                            <?php if (!empty($jugador['sustituido'])): ?>
                                                <img class="icono-sustitucion" src="<?= get_template_directory_uri(); ?>/assets/img/substitution.png">
                                            <?php endif; ?>
                                        </h5>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay alineación registrada para Tottenham.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>Ingresaron:</h5>
                        <?php if (!empty($alineacion['ingresaron'])): ?>
                            <ul>
                                <?php foreach ($alineacion['ingresaron'] as $jugador): ?>
                                    <li><h5><?= ($jugador['nombres']) ?></h5></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay sustitutos registrados para Tottenham.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>
                            <?= !empty($alineacion['dt']) ? 'DT: ' . ($alineacion['dt']) : '<p style="color:red;">No hay DT registrado para Tottenham.</p>' ?>
                        </h5>
                    <?php else:
                        $alineacionRival = get_field('alineacion_equipo_rival');
                        echo '<h3>' . ($alineacionRival['nombre_del_equipo']) . '</h3>';
                    ?>
                        <hr> 
                        <?php if (!empty($alineacionRival['iniciales'])): ?>
                            <ul>
                                <?php foreach ($alineacionRival['iniciales'] as $jugadorRival): ?>
                                    <li>
                                        <h5>
                                            <?= $jugadorRival['nombres'] ?>
                                            <?php if (!empty($jugadorRival['capitan'])): ?>
                                                <span class="capitan">(C)</span>
                                            <?php endif; ?>
                                            <?php if (!empty($jugadorRival['sustituido'])): ?>
                                                <img class="icono-sustitucion" src="<?= get_template_directory_uri(); ?>/assets/img/substitution.png">
                                            <?php endif; ?>
                                        </h5>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay alineación registrada para el equipo rival.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>Ingresaron:</h5>
                        <?php if (!empty($alineacionRival['ingresaron'])): ?>
                            <ul>
                                <?php foreach ($alineacionRival['ingresaron'] as $jugadorRival): ?>
                                    <li><h5><?= ($jugadorRival['nombres']) ?></h5></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay sustitutos registrados para el equipo rival.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>
                            <?= !empty($alineacionRival['dt']) ? 'DT: ' . ($alineacionRival['dt']) : '<p style="color:red;">No hay DT registrado para el equipo rival.</p>' ?>
                        </h5>
                    <?php endif; ?>
                </div>

                <div class="col-md-6 text-start stats-partido">
                    <?php the_content(); ?>
                </div>

                <div class="col-3 text-center alineaciones">
                    <?php
                    $alineacion = get_field('alineacion_tottenham_hotspurs');

                    if (isset($alineacion['local_o_visitante']) && $alineacion['local_o_visitante'] == 'Visitante') :
                    ?>
                        <h3 class="alineacion-tottenham">Tottenham Hotspurs</h3>
                        <hr> 
                        <?php if (!empty($alineacion['iniciales'])): ?>
                            <ul>
                                <?php foreach ($alineacion['iniciales'] as $jugador): ?>
                                    <li>
                                        <h5>
                                            <?php
                                            $jugador_tag = $jugador['nombres'];

                                            $args = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 1,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'post_tag',
                                                        'field'    => 'name',
                                                        'terms'    => $jugador_tag,
                                                    ),
                                                ), 
                                            );

                                            $query = new WP_Query($args);
                                            if ($query->have_posts()) {
                                                $query->the_post();
                                                echo '<a href="' . get_permalink() . '">' . ($jugador_tag) . '</a>';
                                                wp_reset_postdata();
                                            } else {
                                                echo ($jugador_tag);
                                            }
                                            ?>
                                            <?php if (!empty($jugador['capitan'])): ?>
                                                <span class="capitan">(C)</span>
                                            <?php endif; ?>
                                            <?php if (!empty($jugador['sustituido'])): ?>
                                                <img class="icono-sustitucion" src="<?= get_template_directory_uri(); ?>/assets/img/substitution.png">
                                            <?php endif; ?>
                                        </h5>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay alineación registrada para Tottenham.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>Ingresaron:</h5>
                        <?php if (!empty($alineacion['ingresaron'])): ?>
                            <ul>
                                <?php foreach ($alineacion['ingresaron'] as $jugador): ?>
                                    <li><h5><?= ($jugador['nombres']) ?></h5></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay sustitutos registrados para Tottenham.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>
                            <?= !empty($alineacion['dt']) ? 'DT: ' . ($alineacion['dt']) : '<p style="color:red;">No hay DT registrado para Tottenham.</p>' ?>
                        </h5>
                    <?php else:
                        $alineacionRival = get_field('alineacion_equipo_rival');
                        echo '<h3>' . ($alineacionRival['nombre_del_equipo']) . '</h3>';
                    ?>
                        <hr> 
                        <?php if (!empty($alineacionRival['iniciales'])): ?>
                            <ul>
                                <?php foreach ($alineacionRival['iniciales'] as $jugadorRival): ?>
                                    <li>
                                        <h5>
                                            <?= $jugadorRival['nombres'] ?>
                                            <?php if (!empty($jugadorRival['capitan'])): ?>
                                                <span class="capitan">(C)</span>
                                            <?php endif; ?>
                                            <?php if (!empty($jugadorRival['sustituido'])): ?>
                                                <img class="icono-sustitucion" src="<?= get_template_directory_uri(); ?>/assets/img/substitution.png">
                                            <?php endif; ?>
                                        </h5>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay alineación registrada para el equipo rival.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>Ingresaron:</h5>
                        <?php if (!empty($alineacionRival['ingresaron'])): ?>
                            <ul>
                                <?php foreach ($alineacionRival['ingresaron'] as $jugadorRival): ?>
                                    <li><h5><?= ($jugadorRival['nombres']) ?></h5></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p style="color:red;">No hay sustitutos registrados para el equipo rival.</p>
                        <?php endif; ?>
                        <hr>
                        <h5>
                            <?= !empty($alineacionRival['dt']) ? 'DT: ' . ($alineacionRival['dt']) : '<p style="color:red;">No hay DT registrado para el equipo rival.</p>' ?>
                        </h5>
                    <?php endif; ?>
                </div>
            </div> 
        </div> 
    </main>
<?php else: ?>
    <main>
  <div class="container">
    <div class="row mt-5 contenido-landing">
      <div class="col-md-6">
        <h1><?php echo get_field('dorsal'); ?>. <?php the_title(); ?></h1>
        <img class="imagen-single" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
      </div>
      <div class="col-md-6">
        <h2>Biografía</h2>
        <hr>
        <h5><?php echo get_field('fecha_de_nacimiento'); ?> (<?php echo get_field('lugar_de_nacimiento'); ?>)</h5>
        <p><?php echo get_field('biografia'); ?></p>

        <h2>Palmarés</h2>
        <hr>
        <div class="row">
        <?php
        $contador = 0;
        $columnaActual = 1;

        if (have_rows('palmares')) :
            echo '<div class="col-md-4"><ul>';
            while (have_rows('palmares')) : the_row();
                $titulo = get_sub_field('titulo');
                $ano = get_sub_field('ano_del_titulo');
                echo '<li>';
                echo '<h5>' . ($titulo) . '</h5>';
                echo '<p><strong>' . ($ano) . '</strong></p>';
                echo '</li>';
                $contador++;

                // Si llega a 6 títulos, cerrar la columna actual y abrir una nueva
                if ($contador % 6 == 0 && $columnaActual < 3) {
                    echo '</ul></div><div class="col-md-4"><ul>';
                    $columnaActual++;
                }
            endwhile;
            echo '</ul></div>';
        else :
            echo '<p>No hay palmarés registrado.</p>';
        endif;
        ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php endif; ?>

<?php get_footer(); ?>
