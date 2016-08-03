<?php get_header(); ?>
  <body>
    <?php
      if(have_posts()) :
        while(have_posts()) :
          the_post();
    ?>
        <h1 class="page-heading max-width"><?php the_title(); ?></h1>
        <main class="max-width">
          <article class="block">
            <div class="block__title">Escrito por: <?php the_author(); ?></div>
            <div class="block__body">
              <p>
                <?php the_content(); ?>
              </p>
              <footer>
                <div>
                  <small><?php the_tags(); ?></small>
                </div>
              </footer>
            </article>
        </main>
    <?php
      endwhile;
      else :
    ?>
      <h4>Huy, no encontramos posts</h4>
    <?php
      endif;
      wp_reset_postdata();
    ?>
  </p>

<?php get_footer("single"); ?>
