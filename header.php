<?php
	// puxando fields da página de contato, que está com ID = 51.
	$page_contato = 51;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
		<meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">
		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<!-- Footer Header -->
			<?php wp_head(); ?>	
		<!-- Fecha o Header Wordpress -->
	</head>
	<body>
		
		<header>
			<nav>
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

			<p><?php the_field('endereco_header', $page_contato); ?></p>
			<p class="telefone"><?php the_field('telefone_header', $page_contato); ?></p>
		</header>