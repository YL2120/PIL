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
            <h1 class="fw-bold-nos-espace titre-nos-espaces">Nos espaces</h1>
            <p>Des espaces polyvalents de 15 à 1000m<sup>2</sup></p>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur.
            </p>
            <button
              class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 redirect-espace"
            >
              Reservez votre espace +
            </button>
          </div>
        </div>
      </section>

      <section class="cat-nos-outils text-left bg-dark mb-0">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <h1 class="fw-bold-nos-outils text-white titre-nos-outils">
              Nos outils de production
            </h1>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <p class="text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur.
            </p>
          </div>

          <div class="image-center-outils d-flex">
            <img
              src="..\images\image 63@2x.jpg"
              class="align-items-lg-center"
              alt=""
            />
          </div>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item bg-dark">
            <h2 id="flush-headingOne">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                <h2 class="accordion-script">Salle de mixage cinéma</h2>
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
          <div class="accordion-item">
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
          <div class="accordion-item">
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
          <div class="accordion-item">
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
          <div class="accordion-item">
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
          <div class="accordion-item">
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
        </section>
        <section class="espace-cta bg-dark">
          <div class="image-center-espace d-flex no-max-w">
            <img
              src="..\images\Mask Group 93@2x.jpg"
              class="align-items-lg-center"
              alt=""
            />
            <div class="top-left">
              <p>Vous êtes interesés par ?</p>
              <h2>Un bureau, une location ponctuelle d'un de nos espaces ou un moyen de production ?</h2>
            </div>
          </div>
      </section>
    </main>

<?php
get_footer();
?>


