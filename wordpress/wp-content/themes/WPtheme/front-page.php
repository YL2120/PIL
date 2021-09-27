<?php

get_header();
$title = get_field('page_title');
$description=get_field('description');
$other_description=get_field('other_description');
$my_input = get_field('my_import');

?>
    
   
		<article class="content px-3 py-5 p-md-5">


		<?php
			if( have_posts() ){ // if posts exist

				while( have_posts() ){  // while we have posts
					the_post();
					the_content(); // Content of the page written in WordPress settings
				}
			}

		?>

		<?php  if($title){?>
			<h1><?php echo $title; ?></h1>
		
		
		<?php }; ?>
		
		<?php  if($description){?>
			<p><?php echo nl2br($description); ?></p> <!--  nl2br displays the paragraphs -->
		
		
		<?php }; ?>

		<?php  if($other_description){?>
			<p><?php echo $other_description; ?></p> <!--  nl2br displays the paragraphs -->
		
		
		<?php }; ?>

		<?php  if($my_input){?>
			<?php echo $my_input ?>  <!--  nl2br displays the paragraphs -->
		
		
		<?php }; ?>
	    
	    </article>
	   

	<?php

	get_footer();

	?>

   
