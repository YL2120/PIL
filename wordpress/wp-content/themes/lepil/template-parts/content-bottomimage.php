<?php
$petit_titre = get_field('petit-titre');
$grand_titre = get_field('grand-titre');
$grande_image = get_field('grande_image');

?>






<div class="image-center-espace  d-flex no-max-w ">
          <img
            src="<?php echo $grande_image['sizes']['my_custom_size'] ?>"
            class="align-items-lg-center pole-lastimage"
            alt=""
          />
          <div class="top-left">
            <p class="text-white"><?php echo $petit_titre ?></p>
            <h2><? echo $grand_titre ?></h2>
          </div>
        </div>