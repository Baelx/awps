<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package burnt-shake
 */

get_header(); ?>

<div class="container">

	<div class="row align-stretch">

		<div class="col-sm-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
						if ( is_home() ) {
							get_template_part( 'views/content', 'home' );
						}

					?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
