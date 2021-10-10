<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
    <title><?php the_title(); ?></title>
</head>
<body>
    <header class="l-main-header">
        <div class="header__container">
            <div class="header__img">
                <img src="./wp-content/uploads/2021/09/logo.svg" alt="">
            </div>
            <nav class="navbar navbar-dark bg-dark navbar-expand-md w-100">
                <div class="container-fluid">
                    <!-- Le bouton s'affichera en petit écran -->
                    <button class="navbar-toggler" data-bs-toggle="collapse"                    data-bs-target="#monMenuDeroulant">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="monMenuDeroulant">
                        <ul class="navbar-nav m-0 p-0">
                            <li class="nav-item mx-3">
                                <a href="archive-entreprises" class="nav-link active">Les entreprises</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a href="page-espaces" class="nav-link">Nos espaces</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a href="#" class="nav-link">Formations</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a href="page-pole" class="nav-link">Le Pôle</a>
                            </li>
                        </ul>
                        <ul class="d-flex justify-content-end contact-item mb-0 w-25">
                            <li class="nav-item">
                                <a href="page-contact" class="nav-link">
                                    Contact
                                    <button type="button"><i class="fas fa-arrow-right"></i></button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="header__socials d-none d-sm-block">
        <nav class="nav-socials h-100 d-flex align-items-end navbar-dark bg-dark text-white">
            <ul>
                <li>Fb</li>
                <li>Tw</li>
                <li>Lk</li>
                <li>In</li>
            </ul>
        </nav>
    </div>