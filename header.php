<!DOCTYPE html>
<html>
	<head>

		<title>
			<?php

				wp_title( '-', true, 'right' );

				bloginfo( 'name' );

			?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body>

		<p>This is the header.</p>

		<?php

			$args = array(
				'menu' => 'main-menu'
			);


			wp_nav_menu( $args );

		?>