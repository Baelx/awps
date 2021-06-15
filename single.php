<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package burnt-shake
 */

get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-sm-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php get_template_part( 'views/content', get_post_format() ); ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
