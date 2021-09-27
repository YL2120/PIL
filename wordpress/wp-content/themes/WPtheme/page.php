<?php

$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$alt = $image['alt'];
$title = $image['title'];
$file= get_field('upload_a_file');
$filename = $file['name'];
$filename = $file['url'];
get_header();


?>
    
   
		<article class="content px-3 py-5 p-md-5">


		<?php
			if( have_posts() ){ // if posts exist

				while( have_posts() ){  // while we have posts
					the_post();
					get_template_part( 'templates-parts/content', 'page' ); //2nd paramater: type of content
				}
			}

		?>

		
			
			<?php if($image){ ?>
			<img src="<?php echo $picture; ?>" class="img-fluid" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>"> <!-- ACF -->
			<?php } ?>

			<?php if($file){
				?>
				<a href="<?php echo $fileurl ?>">Download the image</a>
			<?php }; ?>

	    
	    </article>
	   

	<?php

	get_footer();

	?>

   
