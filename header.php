<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StatSpurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/estilo.css?v=1.1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="container container-header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/StatSpurs-Logo.png" alt="Bootstrap" width="30" height="24"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo home_url('/category/jugadores/'); ?>">Jugadores</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Competiciones
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo home_url('/category/premier-league/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/premier-league-logo-5F922E3xXY_brandlogos.net.svg" alt="Premier League"> Premier League </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?php echo home_url('category/uefa-europa-league/')?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/UEFA_Europa_League-OwJNeSA4w_brandlogos.net.svg" alt="UEFA Europa League"> UEFA Europa League</a></li>
                    </ul>
                  </li>
                </ul> <img src" alt="">
                <form class="d-flex nav-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input class="form-control me-2" type="search" placeholder="Buscar partidos" aria-label="Buscar" name="s" autocomplete="off" value="<?php echo get_search_query(); ?>">
                  <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
</header>