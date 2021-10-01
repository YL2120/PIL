<?php
get_header();
$punchLine1 = get_field('punch_line');
$punchLine2 = get_field('punch_line_2');
$oembedVideo = get_field('oembed-video');
$oembedImage = get_field('oembed-img');
$image = $oembedImage['sizes']['my_custom_size'];
$intro = get_field('introduction');
$titre1 = get_field('titre1');
$titre2 = get_field('titre2');
$titre3 = get_field('titre3');
$titre4 = get_field('titre4');
$repeater1 = get_field('liste');
$repeater2 = get_field('listes_suite');
$gNombre1 = get_field('grand_nombre1');
$gTexte1 = get_field('grand_texte1');
$gNombre2 = get_field('grand_nombre2');
$gTexte2 = get_field('grand_texte2');
$gNombre3 = get_field('grand_nombre3');
$gTexte3 = get_field('grand_texte3');

?>
<main class="bg-dark"> <!--Début de la page-->
        <section class="mb-1">
            <div class="text-white font-weight-bold topdiv">
                <div class="container top-margin">
                <h1 class="fw-bold"><?php echo $punchLine1 ?></h1>
                <h1 class="fw-bold"><?php echo $punchLine2 ?></h1>
            </div>
                
            <div class="full-image">
                <?php
                    if ($oembedVideo){
                        get_template_part('template-parts/content', 'video');
                    } else {
                        get_template_part('template-parts/content', 'image');
                    } ?>
            </div>
            
            <div class="container top-container">
                <div class="row">
                    <div class="col-4 top-col">
                        <p><?= $intro ?></p>
                    </div>
                    <div class="col-4">
                        <div class="container container-titles">
                        <h3 class="fw-bold"><?= $titre1 ?></h3>
                        <h3 class="fw-bold"><?= $titre2 ?></h3>
                    </div>
                    <ul class="w-100">
                        <?php
                            foreach($repeater1 as $element){
                                foreach($element as $lines){
                                    echo '<li>';
                                    echo ($lines);
                                    echo '</li>';
                                }
                            }
                        ?>
                    </ul>
                    </div>
                    <div class="col-4">
                        <div class="container container-titles">
                        <h3 class="fw-bold"><?= $titre3 ?></h3>
                        <h3 class="fw-bold"><?= $titre4 ?></h3>
                    </div>
                        <ul class="w-100">
                        <?php
                            foreach($repeater2 as $element){
                                foreach($element as $lines){
                                    echo '<li>';
                                    echo ($lines);
                                    echo '</li>';
                                }
                            }
                        ?>
                    </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--fin de première section-->
        <!--début de 2ème section-->
        <section class="c-main-largeBanner mt-2 mb-2">
            <ul>
                <li><span><?php echo $gNombre1?></span><span class="sup">+</span> <?php echo $gTexte1?></li>
                <li><span><?php echo $gNombre2?></span><span class="sup">+</span> <?php echo $gTexte2?></li>
                <?php 
                    if ($gNombre3 || $gTexte3){
                        echo '<li><span>'.$gNombre2.'</span><span class="sup">+</span> '.$gNombre2.'</li>';
                    }
                ?>
            </ul>
        </section>
        <!--fin de 2ème session-->
        <!--début de 3ème section-->
        <section class="c-main-entreprise">
            <div class="c-main-entreprise-container-titre">
                <h1>Vous avez un projet</h1>
                <h1 class="text-warning"> audiovisuel ou digital ?</h1>
                    <p>Une entreprise de Pôle peut vous aider !</p>

                <div class="carte-entreprises">
                    <div class="row">
                        
                        <div class="col-md-2 col-lg-2 col-xl-2  ">
                            <div class="card">
                                <img src="../images/cat-ar-vr.svg" class="card-img-top" alt="...">
                                <div class="card-footer">
                                  <a href="#">Image</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2  ">
                            <div class="card">
                                <img src="../images/cat-son.svg" class="card-img-top" alt="...">
                                <div class="card-footer">
                                  <a href="#">Ar / Vr</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2  ">
                            <div class="card">
                                <img src="../images/arrow-down.svg" class="card-img-top arrow-oblique" alt="...">
                                <div class="card-footer">
                                  <a href="#">Son</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2  ">
                            <div class="card">
                                <img src="../images/cat-digital (2).svg" class="card-img-top" alt="...">
                                <div class="card-footer">
                                  <a href="#">Digital</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 ">
                            <div class="card">
                                <img src="../images/cat-image.svg" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <a href="#">Digital</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 all-enterprise">
                            <div class="card justify-content-center align-items-center">
                                <img src="../images/arrow-down.svg" class="card-img-top arrow-oblique m-0" alt="...">
                                <div class="card-footer ">
                                  <a href="#">Voir toutes les entreprises</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!--fin de 3ème section-->
        <!--début de 4ème section-->
        <section class="c-main-fa bg-white mb-1 pb-5">
            <div class="fa__container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                        <div class="fa__img">
                            <img src="../images/Mask Group 89@2x.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                        <div class="fa__text">
                            <h1>Formations</h1>
                            <h1>audiovisuel</h1>
                            <p class="propos">
                                Vous souhaitez vous former à un métier ou une compétence en pénurie en Wallonie ?
                            </p>
                            <p>
                                Rendez-vous sur le site de l’ACA, notre projet dédié à la formation dans l’audiovisuel pour obtenir toutes les informations nécessaires ! Chaque année, plusieurs formations sont organisées en partenariat avec Technifutur, des entreprises du Pôle et l’ACA.
                            </p>
                            <ul>
                                <li>Développeur web par Becode</li>
                                <li>Animateur 3D / 2D</li>
                                <li>Storyboarding</li>
                                <li>Assistant de production</li>
                                <li>Salles de montage son/image</li>
                                <li>Motion Design</li>
                                <li>Pro Tools</li>
                            </ul>
                            <button class="redirect">Voir le site ACA +</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fin de 4ème section-->
        <!--début de 5ème section--> 
        <section class="c-main-preFooter py-5 px-0 m-0">
            <div class="preFooter__container">
                <h4>Les entreprises</h4>
                <ul>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>
                    <li><a href="#">entresprise</a></li>                
                </ul>
            </div>
        </section>
        <!--fin de 5ème section--> 
    </main>








<?php
get_footer();
?>