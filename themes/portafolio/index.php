<?php get_header(); ?>
  <body>
    <h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
    <div class="grid max-width">
      <div class="block grid--item-9">
        <div class="block__title">
          Últimos Trabajos
        </div>
        <div class="bock__body grid">
          <p>
            <?php
              if (have_posts()) {
                while (have_posts()) {
                  the_post();
                  ?>
                    <article class="block grid--item-4">
                      <h2 class="block__title"><?php the_title(); ?></h2>
                      <div class="block__body">
                        <p>
                          <?php the_excerpt(); ?>
                        </p>
                      <footer>
                        <div>
                          <small><?php the_tags(); ?></small>
                        </div>
                        <div>
                          <small><?php the_author(); ?></small>
                        </div>
                      </footer>
                    </article>
                  <?php
                }
              }
            ?>
          </p>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
