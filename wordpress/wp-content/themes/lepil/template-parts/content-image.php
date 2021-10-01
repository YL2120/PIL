<?php
$oembedImage = get_field('oembed-img');
$image = $oembedImage['sizes']['my_custom_size'];
?>



<img src="<?= $image ?>" class="full-width" alt="">
