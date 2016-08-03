<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title) ?></title>
  </head>
  <body>
    <h1><?php bloginfo(name); ?></h1>

    <ul>
      <li><b>Descripción:</b> <?php bloginfo(description); ?></li>
      <li><b>URL:</b> <?php bloginfo(url); ?></li>
      <li><b>Lenguaje:</b> <?php bloginfo(language); ?></li>
      <li><b>stylesheet URL:</b> <?php bloginfo(stylesheet_url); ?></li>
      <li><b>stylesheet Directory:</b> <?php bloginfo(stylesheet_directory); ?></li>
    </ul>
  </body>
</html>
