<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package burnt-shake
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<?php if ( has_site_icon() ): ?>
			<img class="burnt-shake-site-icon" src="<?php echo site_icon_url(); ?>" />
		<?php endif; ?>
		<h1 class="page-title"><?php bloginfo('title') ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
			if ( has_nav_menu( 'primary' ) ) :
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'home-primary-menu',
						'walker'         => new BurntShake\Core\WalkerNav(),
					)
				);
			endif;
			?>
		</nav>

	</div><!-- .page-content -->
</section><!-- .no-results -->
