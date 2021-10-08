<?php
/*
 Template Name: archive-entreprises
 */
?>



<?php
    get_header();
?>
    <main>
        <section class="c-main-secteurs bg-dark">
            <div class="secteurs__container">
                <div class="secteurs__sideMenu">
                    <div class="test">
                        <h1>secteurs</h1>
                        <div class="accordion" id="accordionExample">
                            
                        <?php
                            $taxo = get_field('multi-select');
                             $cpt1=0;
                            foreach ($taxo as $element){
                                if( $element->name == 'ar/vr' || $element->name == 'gaming' || $element->name == 'image' || $element->name == 'son' || $element->name == 'digital' ){?>
                                    <div class="accordion-item w-100">
                                        <h2 class="accordion-header" id="heading<?= $cpt1 ?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $cpt1 ?>" aria-expanded="true" aria-controls="collapse<?= $cpt1 ?>">
                                            <?= $element->name; ?> 
                                            </button>
                                        </h2>
                                        <div id="collapse<?= $cpt1 ?>" class="accordion-collapse collapse w-100" aria-labelledby="heading<?= $cpt1 ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body w-100 bg-transparent">
                                            <div class="sectors-list">
                                                <form action="#">
                                                    <ul>
                            <?php $cpt1++;
                            } else { ?>
                                    <li>
                                        <label for="c<?= $cpt1 ?>">
                                            <?= $element->name ?>
                                        </label>
                                        <input type="checkbox" name="choice<?= $cpt1 ?>" id="c<?= $cpt1 ?>">
                                        <span class="custom-check"></span>
                                    </li>
                            <?php $cpt1++;
                             if ($cpt1%10 == 0){
                                echo'   </ul>

                                           </form>
                                       </div>
                                     </div>
                                   </div>
                               </div>';
                               }
                                }
                            }
                        ?>
                                            
                        </div>
                    </div>
                </div>
                <div class="secteurs__content">
                    <form class="content__search" action='#' method="GET">
                        <label for="search" class='label-input-icon'>
                            <input type="search " placeholder='Search...' id='search' name="search">
                            <i class="fas fa-search" for='search'></i>
                        </label>
                    </form>
                    <div class="content_accordion">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingA">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA" aria-expanded="true" aria-controls="collapseA">
                                    Mikros
                                    <div class="tags">
                                        <span class="tag">Audio</span>
                                        <span class="tag">VR</span>
                                        <span class="tag">Gaming</span>
                                        <span class="tag">Couscous</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseA" class="accordion-collapse collapse show" aria-labelledby="headingA" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="body__img">
                                        <img src="../images/Image 63@2x.jpg" alt="">
                                    </div>
                                    <div class="body__info">
                                        <div class="info__top">
                                        <a href="tel:+3242669800">+32 (0)42 66 98 00</a>
                                        <a href="mailto:info.liege@mikrosimages.eu">info.liege@mikrosimages.eu</a>
                                        <a href="https://mikrosimage.be">mikrosimage.be</a>
                                        </div>
                                        <div class="info__bot">
                                            <p>VFX – Effets Spéciaux – Post-production – Animation</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingB">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB" aria-expanded="true" aria-controls="collapseB">
                                    Mikros
                                    <div class="tags">
                                        <span class="tag">Audio</span>
                                        <span class="tag">VR</span>
                                        <span class="tag">Gaming</span>
                                        <span class="tag">Couscous</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseB" class="accordion-collapse collapse" aria-labelledby="headingB" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="body__img">
                                        <img src="../images/Image 63@2x.jpg" alt="">
                                    </div>
                                    <div class="body__info">
                                        <div class="info__top">
                                        <a href="tel:+3242669800">+32 (0)42 66 98 00</a>
                                        <a href="mailto:info.liege@mikrosimages.eu">info.liege@mikrosimages.eu</a>
                                        <a href="https://mikrosimage.be">mikrosimage.be</a>
                                        </div>
                                        <div class="info__bot">
                                            <p>VFX – Effets Spéciaux – Post-production – Animation</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingC">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC" aria-expanded="true" aria-controls="collapseC">
                                    Mikros
                                    <div class="tags">
                                        <span class="tag">Audio</span>
                                        <span class="tag">VR</span>
                                        <span class="tag">Gaming</span>
                                        <span class="tag">Couscous</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseC" class="accordion-collapse collapse" aria-labelledby="headingC" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="body__img">
                                        <img src="../images/Image 63@2x.jpg" alt="">
                                    </div>
                                    <div class="body__info">
                                        <div class="info__top">
                                        <a href="tel:+3242669800">+32 (0)42 66 98 00</a>
                                        <a href="mailto:info.liege@mikrosimages.eu">info.liege@mikrosimages.eu</a>
                                        <a href="https://mikrosimage.be">mikrosimage.be</a>
                                        </div>
                                        <div class="info__bot">
                                            <p>VFX – Effets Spéciaux – Post-production – Animation</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingD">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD" aria-expanded="true" aria-controls="collapseD">
                                    Mikros
                                    <div class="tags">
                                        <span class="tag">Audio</span>
                                        <span class="tag">VR</span>
                                        <span class="tag">Gaming</span>
                                        <span class="tag">Couscous</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseD" class="accordion-collapse collapse" aria-labelledby="headingD" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="body__img">
                                        <img src="../images/Image 63@2x.jpg" alt="">
                                    </div>
                                    <div class="body__info">
                                        <div class="info__top">
                                        <a href="tel:+3242669800">+32 (0)42 66 98 00</a>
                                        <a href="mailto:info.liege@mikrosimages.eu">info.liege@mikrosimages.eu</a>
                                        <a href="https://mikrosimage.be">mikrosimage.be</a>
                                        </div>
                                        <div class="info__bot">
                                            <p>VFX – Effets Spéciaux – Post-production – Animation</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingE">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE" aria-expanded="true" aria-controls="collapseE">
                                    Mikros
                                    <div class="tags">
                                        <span class="tag">Audio</span>
                                        <span class="tag">VR</span>
                                        <span class="tag">Gaming</span>
                                        <span class="tag">Couscous</span>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseE" class="accordion-collapse collapse" aria-labelledby="headingE" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <div class="body__img">
                                        <img src="../images/Image 63@2x.jpg" alt="">
                                    </div>
                                    <div class="body__info">
                                        <div class="info__top">
                                        <a href="tel:+3242669800">+32 (0)42 66 98 00</a>
                                        <a href="mailto:info.liege@mikrosimages.eu">info.liege@mikrosimages.eu</a>
                                        <a href="https://mikrosimage.be">mikrosimage.be</a>
                                        </div>
                                        <div class="info__bot">
                                            <p>VFX – Effets Spéciaux – Post-production – Animation</p>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    </main>

<?php
    get_footer();
?>
    