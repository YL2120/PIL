
<?php

get_header();

?>
    
   
		<article class="content px-3 py-5 p-md-5">


		<?php
			if( have_posts() ){ // if posts exist

				while( have_posts() ){  // while we have posts
					the_post();
					get_template_part( 'templates-parts/content', 'archive' ); //2nd paramater: type of content
				}
			}

		?>
		

        <?php

            the_posts_pagination(); // pagination

        ?>
	    
	    </article>
	   

	<?php

	get_footer();

	?>

   