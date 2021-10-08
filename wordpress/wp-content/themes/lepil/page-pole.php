<?php
/*
 Template Name: page-pole
 */
?>

<?php
get_header();
$titre = get_field('titre');
$introduction = get_field('introduction');
$oembedImage = get_field('oembed-img');
$image = $oembedImage['sizes']['my_custom_size'];
$oembedVideo = get_field('oembed-video');
$gNombre1 = get_field('grand_nombre1');
$gTexte1 = get_field('grand_texte1');
$gNombre2 = get_field('grand_nombre2');
$gTexte2 = get_field('grand_texte2');
$gNombre3 = get_field('grand_nombre3');
$gTexte3 = get_field('grand_texte3');
$photo = get_field('Photo');
$photo_src = $photo['sizes']['my_custom_size'];
$flipcartes = get_field('flip-cartes');
print_r($flipcartes)
?>

<main class="bg-white">
      <!-- TITRE + PARAGRAHPE-->
      <section class="mb-1 lepole-top bg-dark">
        <div class="lepole-top__margin">
          <div class="container  lepole-margin">
            <div class="row">
              <div class="col-6 text-white">
                <h1 class="title_size">
                 <?php echo $titre ?>
                </h1>
              </div>
              <div class="col-6 text-white d-flex align-items-end pole-div">
                <p class="par-style">
                    <?php echo $introduction ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- IMAGE OU VIDEO-->
      <section class="mb-1 bg-white">
        <div>
          <div class="full-image image-l lepole-margin">
          <?php
                    if ($oembedVideo){
                        get_template_part('template-parts/content', 'video');
                    } else {
                        get_template_part('template-parts/content', 'image');
                    } ?>
          </div>
        </div>
      </section>

      <!-- BANNIERE -->
      <section class="c-main-largeBanner mt-1 mb-2 ">
        <div class="lepole-banner">
        <ul>
                <li><span><?php echo $gNombre1?></span><span class="sup">+</span> <?php echo $gTexte1?></li>
                <li><span><?php echo $gNombre2?></span><span class="sup">+</span> <?php echo $gTexte2?></li>
                <?php 
                    if ($gNombre3 || $gTexte3){
                        echo '<li><span>'.$gNombre2.'</span><span class="sup">+</span> '.$gNombre2.'</li>';
                    }
                ?>
            </ul>
      </div>
      </section>

      // CARDS

      <section class="mb-1 bg-white">
        <div class="lepole-card__margin">
          <div class="mb-4 lepole-card-title">
            <h4 class="">Notre équipe</h4>
          </div>
          <div class="container lepole-margin">
            <div class="row ">
              
              
              <?php
                            foreach($flipcartes as $element){
                              
                                ?>
              <div class="col-4 flip-col">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                   
                      <img src="<?php echo $element['photo']['ID']?>" alt="Avatar" />
                    </div>
                    <div
                      class="
                        flip-card-back
                        bg-warning
                        d-flex
                        flex-column
                        justify-content-between
                      "
                    >
                      <div class="mt-4">
                        <h5 class=""><?php echo $element['nom'] ?></h5>
                      </div>

                      <div>
                        <p><?php echo $element['role'] ?></p>
                        <p><?php echo $element['email'] ?></p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php } ?>
              </div>
          </div>
        </div>
      </section>

      <section class="lepole-margin lepole-bottom">
        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-3">
                <div class="mb-4 mt-2">
                <h3 class="fw-bold">Actualités</h3>
              </div>
                <a href="https://www.facebook.com/PoleImageDeLiege" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-dark rounded-pill w-75 button-size">Suivez-nous <i class="fab fa-facebook-f"></i></button></a>
              </div>
              <div class="col-9">
                <div class="row">
                  <div class="col-4">
                    <div class="card lepole-card-dimension" >
                      
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mt-2 d-flex flex-row justify-content-between">
                        <p class="card-title text-warning">05 octobre 2021</p>
                        <img src="../images/arrow-down.svg" class="arrow-oblique arrow-size-lepole" alt="">
                      </div>
                        <div>
                        <hr class="text-white"> 
                        <p class="card-text text-white">BeCode.org vous donne rendez-vous le 
                          22 juillet au Pôle pour leurs portes
                          ouvertes.</p>
                         
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card lepole-card-dimension" >
                     
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mt-2 d-flex flex-row justify-content-between">
                        <p class="card-title text-warning">05 octobre 2021</p>
                        <img src="../images/arrow-down.svg " class="arrow-oblique arrow-size-lepole" alt="">
                      </div>
                        <div>
                          <hr class="text-white">
                        <p class="card-text text-white">BeCode.org vous donne rendez-vous le 
                          22 juillet au Pôle pour leurs portes
                          ouvertes.</p>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-4 ">
                    <div class="card lepole-card-dimension" >
                     
                      <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mt-2 d-flex flex-row justify-content-between">
                        <p class="card-title text-warning">05 octobre 2021</p>
                        <img src="../images/arrow-down.svg" class="arrow-oblique arrow-size-lepole" alt="">
                      </div>
                        <div>
                          <hr class="text-white">
                        <p class="card-text text-white">BeCode.org vous donne rendez-vous le 
                          22 juillet au Pôle pour leurs portes
                          ouvertes.</p>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <section class="espace-cta bg-dark lepole-bottomimage p-0">
        <div class="image-center-espace  d-flex no-max-w ">
          <img
            src="..\images\Mask Group 93@2x.jpg"
            class="align-items-lg-center pole-lastimage"
            alt=""
          />
          <div class="top-left">
            <p class="text-white">Vous êtes interesés par ?</p>
            <h2>Un bureau, une location ponctuelle d'un de nos espaces ou un moyen de production ?</h2>
          </div>
        </div>
      </section>
    
    
    
    
    </main>
    



<?php get_footer(); ?>