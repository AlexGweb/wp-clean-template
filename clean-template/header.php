<?php
/**
 * Шаблон шапки (header.php)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/styles/normalize.css">
	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php $args = array(
			'theme_location' => 'top',
			'container'=> 'nav',
			'menu_class' => 'bottom-menu',
	  		'menu_id' => 'bottom-nav',
  			);
			wp_nav_menu($args);
		?>
	</header>