<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
	<style>
.finisher-background {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
}
</style>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();
	?>
	<div class="finisher-header finisher-background"></div>

<script src="<?php echo get_template_directory_uri(); ?>/finisher-header.es5.min.js" type="text/javascript"></script>

<script type="text/javascript">
new FinisherHeader({
  "count": 12,
  "size": {
    "min": 1300,
    "max": 1500,
    "pulse": 0
  },
  "speed": {
    "x": {
      "min": 0.6,
      "max": 3
    },
    "y": {
      "min": 0.6,
      "max": 3
    }
  },
  "colors": {
    "background": "#fdebd7",
    "particles": [
      "#fdf4e3",
      "#c0aa8c",
      "#623a34",
      "#D37E73"
    ]
  },
  "blending": "lighten",
  "opacity": {
    "center": 0.6,
    "edge": 0
  },
  "skew": 0,
  "shapes": [
    "c"
  ]
});
</script>
	<?php

	astra_header_after();

	astra_content_before();
	?>	
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
