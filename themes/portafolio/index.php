<?php get_header(); ?>
  <body>
    <h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
    <div class="grid max-width">
      <div class="block grid--item-9">
        <div class="block__title">
          Bloque principal
        </div>
        <div class="bock__body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
