<?php
/**
 * Template Name: LSX Projects Full
 *
 * @package lsx-projects
*/

get_header(); ?>

	<?php lsx_content_wrap_before(); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<div class="content-area front-page col-sm-12">
	
		<?php lsx_content_before(); ?>
		
		<main id="main" class="site-main">

			<?php lsx_content_top(); ?>

			<?php lsx_groups_list();?>

			<?php lsx_projects_list(); ?>

			<?php lsx_content_bottom(); ?>
		
		</main><!-- #main -->
		
		<?php lsx_content_after(); ?>

	</div><!-- #primary -->

	<?php lsx_content_wrap_after(); ?>

	<script>
		$(document).ready(function(){
			var path = location.valueOf().hash;

			if(path.includes('#')){
				path = path.replace('#','');

				setTimeout(function () {
					$('#'+path).click();
				}, 500)
			}

		});
	</script>

<?php get_footer();