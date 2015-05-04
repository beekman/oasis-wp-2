<div class="last-col d-2of7 t-1of3 m-all sidebar">
<?php if (is_page ('single')) : ?>
	<?php if ( is_active_sidebar( 'single' ) ) : ?>
		<?php dynamic_sidebar( 'single' ); ?>
	<?php else : ?>
		<?php # This content shows up if there are no widgets defined in the backend. ?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area for single post sidebars. Add widgets and they will appear here.', 'oasistheme' );  ?></p>
		</div>
	<? endif; ?>
<? elseif (is_home()) : ?>
	<?php if ( is_active_sidebar( 'blog' ) ) : ?>

		<?php dynamic_sidebar( 'blog' ); ?>

	<?php else : ?>

		<?php  /* This content shows up if there are no widgets defined in the backend. */  ?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area for the blog page sidebar. Add some widgets, and they will appear here.', 'oasistheme' );  ?></p>
		</div>
	<? endif; ?>
<? elseif (is_page ('services')) : ?>
	<?php if ( is_active_sidebar( 'services' ) ) : ?>

		<?php dynamic_sidebar( 'services' ); ?>

	<?php else : ?>

		<?php  /* This content shows up if there are no widgets defined in the backend. */  ?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area for the Services page sidebar. Add some widgets, and they will appear here.', 'oasistheme' );  ?></p>
		</div>
	<? endif; ?>
<? elseif (is_page ('contact')) : ?>
	<?php if ( is_active_sidebar( 'contact' ) ) : ?>

		<?php dynamic_sidebar( 'contact' ); ?>

	<?php else : ?>

		<?php # This content shows up if there are no widgets defined in the backend. ?>
		<div class="no-widgets">
				<p><?php _e( 'This is a widget ready area for the contact page sidebar. Add some and they will appear here.', 'oasistheme' );  ?></p>
		</div>
	<?php endif; ?>
<? elseif (is_page ('resources')) : ?>
	<?php if ( is_active_sidebar( 'resources' ) ) : ?>

		<?php dynamic_sidebar( 'resources' ); ?>

		<?php else : ?>

			<?php # This content shows up if there are no widgets defined in the backend. ?>
			<div class="no-widgets">
				<p><?php _e( 'This is a widget ready area for the resources page sidebar. Add some and they will appear here.', 'oasistheme' );  ?></p>
			</div>

		<?php endif; ?>

<? elseif (is_page ('front')) : ?>

	<?php if ( is_active_sidebar( 'home-sidebar' ) ) : ?>

				<?php dynamic_sidebar( 'home-sidebar' ); ?>

	<?php else : ?>

		<?php # This content shows up if there are no widgets defined in the backend. ?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area for the home page sidebar. Add some widgets, and they will appear here.', 'oasistheme' );  ?></p>
		</div>

	<?php endif; ?>

<? elseif (is_page ('about-page')) : ?>
	<?php if ( is_active_sidebar( 'about' ) ) : ?>

		<?php dynamic_sidebar( 'about' ); ?>

		<?php else : ?>

			<?php # This content shows up if there are no widgets defined in the backend. ?>
			<div class="no-widgets">
					<p><?php _e( 'This is a widget ready area for the about page sidebar. Add some widgets, and they will appear here.', 'oasistheme' );  ?></p>
			</div>

	<?php endif; ?>

<?php endif; ?>

<? # Then display the widgets common to all pages with sidebars ?>
<?php if ( is_active_sidebar( 'universal' ) ) : ?>

	<?php dynamic_sidebar( 'universal' ); ?>

	<?php else : ?>

		<?php #This content shows up if there are no widgets defined in the backend. ?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area for the last part of the sidebar on every page. Add some widgets, and they will appear here.', 'oasistheme' );  ?></p>
		</div>
<?php endif; ?>
</div>
