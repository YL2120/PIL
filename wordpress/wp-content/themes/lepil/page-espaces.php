<?php
/*
 Template Name: page-espaces
 */
?>
<?php
get_header();
$punchLine1 = get_field('punch_line');
$punchLine2 = get_field('punch_line_2');
$oembedImage = get_field('oembed-img');
$titreEspace = get_field('titre__espaces');
$texteEspace = get_field('texte_espaces');
$texteWysiwygespaces = get_field('texte_wysiwyg_espaces');
$boutonLienespace = get_field('bouton_lien_espace'); // à vérifier
$titreOutilsProductions = get_field('titre_outils_productions');
$introOutilsProductions = get_field('introduction_outils_productions');
$imageOutilsProductions = get_field('image_outils_productions');
$titreOutilsProductions = get_field('titre_outils_productions');
$imageOutilsProductions = get_field('image_outils_productions');
$introOutilsProductions = get_field('introduction_outils_productions');
$accordionRepeater1 = get_field('repeater_accordeons_outils_de_productions1');
?>

<main class="bg-white">
      <!--Début de la page-->
      <section class="espace">
        <div class="text-black font-weight-bold">
          <div class="container-espace">
            <h1 class="fw-bold-espace text-center"><?php echo $punchLine1 ?></h1>
            <h1 class="fw-bold-espace text-center"><?php echo $punchLine2 ?></h1>
          </div>
        </div>
        <div class="image-center d-flex no-max-w">
          <?php if($oembedImage){ ?>            
             <img
              src=<?php echo $oembedImage['url'] ?>
              class="align-items-lg-center"
              alt=""
            />
          <?php } ?>
        </div>
      </section>

      <section class="cat-nos-espaces text-left">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <h1 class="fw-bold-nos-espace titre-nos-espaces"> <?php echo $titreEspace ?></h1>
            <p> <?php echo $texteEspace ?></p>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p> <?php echo $texteWysiwygespaces ?></p>
            <button
              class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 redirect-espace">
                <a href="<?php echo get_permalink(163); ?>">Contact</a> <!-- à regarder -->
            </button>
          </div>
        </div>
      </section>

      <section class="cat-nos-outils text-left bg-dark mb-0">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <h1 class="fw-bold-nos-outils text-white titre-nos-outils">
              <?php echo $titreOutilsProductions ?>
            </h1>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class="text-white">
              <?php echo $introOutilsProductions ?>
            </p>
          </div>

          <div class="image-center-outils d-flex">
          <?php if($imageOutilsProductions){ ?>            
             <img
              src=<?php echo $imageOutilsProductions['url'] ?>
              alt=""
            />
          <?php } ?>
          </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                <h2 class="accordion-script">
                <?php 
                      function displayAccordion(){
                        for ($i=0;$i<15;$i++) {
                          ${'titre'.($i+1)} = get_field(${'titre_du_menu'.($i+1)});
                            print_r(${'titre'.($i+1)})  ;
                      }
                    }
                foreach($accordionRepeater1 as $element){
            
                displayAccordion();

                }

                  
                ?> 
                </h2>
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4 ">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                <h2>Salles d'étalonnage</h2>
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree"
                aria-expanded="false"
                aria-controls="flush-collapseThree"
              >
                <h2>Centre dédié à l'AR/VR</h2>
              </button>
            </h2>
            <div
              id="flush-collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour"
              >
                <h2>Studion green/white key</h2>
              </button>
            </h2>
            <div
              id="flush-collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingFour"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive"
              >
                <h2>Centre dédié à l'AR/VR</h2>
              </button>
            </h2>
            <div
              id="flush-collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingFive"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="flush-headingSix">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix"
                aria-expanded="false"
                aria-controls="flush-collapseSix"
              >
                <h2>Espaces événementiels</h2>
              </button>
            </h2>
            <div
              id="flush-collapseSix"
              class="accordion-collapse collapse"
              aria-labelledby="flush-headingSix"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-4 top-col">
                    <p>
                      Le plus grand cluster d'entreprises wallon dédié à
                      l'audiovisuel, aux métiers du digital, au gaming et à
                      l'AR/ VR.
                    </p>
                  </div>
                  <div class="col-4">
                    <div class="container container-titles">
                      <h3 class="fw-bold">Installation</h3>
                    </div>
                    <ul class="w-100">
                      <li>Salle de mixage</li>
                      <li>Salles de montage son/image</li>
                      <li>Salles d'étalonnage</li>
                      <li>Centre dédié à I'AR/VR</li>
                      <li>Studio green/white key</li>
                      <li>Salles de réunion</li>
                      <li>Espaces événementiels</li>
                    </ul>
                  </div>
                  <div class="col-4 margin-manager">
                    <div class="container container-titles">
                    </div>
                    <ul class="w-100">
                      <li>Salle de sport totalement équipée avec vestiaires</li>
                      <li>Salle de ressourcement pour une pause agréable</li>
                      <li>Des espaces détentes répartis dans le bâtiment</li>
                      <li>Une terrasse aménagée</li>
                      <li>Une cafétéria équipée</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         -->
    </main> 

<?php
get_footer();
?>


