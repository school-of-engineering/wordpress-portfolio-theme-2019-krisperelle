<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"  type="text/css" href="<?php bloginfo('stylesheet_url'); //always returns the current theme's stylesheet?>">
<?php  wp_head();?>
</head>
<title>Welcome to my portfolio</title>
<body>
<?php
wp_nav_menu(array('theme_location'=>'header-nav'));
?>
