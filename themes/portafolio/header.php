<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title) ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
  wp_nav_menu(
    array(
      'theme_localtion' => top-menu,
    )
  )
?>
